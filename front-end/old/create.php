<?php


require_once "connection.php";
 
$db = connection();

$firstName = $lastName = $email = $user = $phone = $password = "";
$firstName_err = $lastName_err = $email_err = $user_err = $phone_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $input_firstName = trim($_POST["firstName"]);
    if(empty($input_firstName)) $firstName_err = "Please enter a first name.";
    else $firstName = $input_firstName;

    $input_lastName = trim($_POST["lastName"]);
    if(empty($input_lastName)) $lastName_err = "Please enter a last name.";
    else $lastName = $input_lastName;
    
    $input_user = trim($_POST["user"]);
    if(empty($input_user)) $user_err = "Please enter a username";
    else $user = $input_user;

    $input_email = trim($_POST["email"]);
    if(empty($input_email)) $email_err = "Please enter an email";
    else $email = $input_email;

    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)) $phone_err = "Please enter a phone number";
    else $phone = $input_phone;

    $input_password = trim($_POST["password"]);
    if(empty($input_password)) $password_err = "Please enter an password";
    else $password = $input_password;


    if(empty($firstName_err) && empty($lastName_err) && empty($user_err) && empty($email_err) && empty($password_err)){

        $sql = "INSERT INTO user (nom, prenom, email, user, password, phone) VALUES (:firstName, :lastName, :email, :user, :password, :phone)";

        if($stmt = $db->prepare($sql))
        {
            foreach($db->query($sql1) as $row)
            {
                if($row['nom'] !==  $firstName)
                {
                    if($row['prenom'] !== $lastName)
                    {
                        if($row['email'] !== $email)
                        {
                            if($row['user'] !== $user)
                            {
                                if($row['password'] == $password)
                                {
                                    $stmt->bindParam(":firstName", $param_firstName);
                                    $stmt->bindParam(":lastName", $param_lastName);
                                    $stmt->bindParam(":email", $param_email);
                                    $stmt->bindParam(":user", $param_user);
                                    $stmt->bindParam(":password", $param_password);
                                    $stmt->bindParam(":phone", $param_phone);


                                    $param_firstName = $firstName;
                                    $param_lastName = $lastName;
                                    $param_email = $email;
                                    $param_user = $user;
                                    $param_password = $password;
                                    $param_phone = $phone;

                                    if($stmt->execute())
                                    {
                                        header("location: index.html");
                                        exit();
                                    } else
                                    {
                                        echo "Something went wrong. Please try again later.";
                                    }
                                }
                            }else print_r ("the user name is already use choose a another one please");
                        }else print_r("the email is already use choose a another email please.");
                    }

                }

            }
        }
         
        unset($stmt);
    }
    
    unset($db);
}
?>