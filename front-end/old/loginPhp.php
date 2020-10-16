<?php 

require_once "connection.php";

$db = connection();

$email = $password = "";
$email_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $input_email = trim($_POST["email"]);
    if(empty($input_email)) $email_err = "Please enter an email";
    else $email = $input_email;

    $input_password = trim($_POST["password"]);
    if(empty($input_password)) $password_err = "Please enter an password";
    else $password = $input_password;
 

    if(empty($email_err) && empty($password_err))
    {

        $sql = "SELECT * FROM user WHERE email=:email AND password=:password";
        
        $stmt = $db->prepare($sql);
        
        $stmt->bindParam(":email", $param_email);
        $stmt->bindParam(":password", $param_password);
        
        $param_email = $email;
        $param_password = $password;

        $stmt->execute();
        $count = $stmt->rowCount();

        if($count != 1) echo('Incorrect email / password');
        else
        {
            $sql1 = "SELECT * FROM user INNER JOIN administrateur ON user.id = administrateur.user_id";
            
            $result = $db->query($sql1);

            foreach($db->query($sql1) as $row)
            {
                if($row['email'] == $email)
                {
                    header('Location: administration.html');
                    exit;
                }else 
                {
                    header('Location: index.html');
                    exit;
                }

            }
        }
        unset($stmt);
    }
    unset($db);
}

?>