<?php include_once "create.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Poule emploi</title>
    <link rel="icon" type="image/png" href="img/chicken.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!--Materialize CSS,JS & Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<header>
    <nav>
        <div class="nav-wrapper blue-grey darken-1">
            <a href="index.html" class="brand-logo">Poule emploi<img src="img/chicken.png"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="col s12 m5" id="divLogin">
    <div class="card-panel blue-grey darken-1" id="login">
        <div class="row">
            <form class="col s12" id="dataRegister"  method='post'>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s12 <?php echo (!empty($firstName_err)) ? 'has-error' : ''; ?>">
                            <i class="material-icons prefix">First name</i>
                            <input id="firstName" type="text" class="validate" name="firstName" value="<?php echo $firstName; ?>">
                            <label for="firstName">Last name</label>
                            <span class="help-block"><?php echo $firstName_err;?></span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="row">
                        <div class="input-field col s12 <?php echo (!empty($lastName_err)) ? 'has-error' : ''; ?>">
                            <i class="material-icons prefix">Last name</i>
                            <input id="lastName" type="text" class="validate" name="lastName" value="<?php echo $lastName; ?>">
                            <label for="lastName">Last name</label>
                            <span class="help-block"><?php echo $lastName_err;?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s12 <?php echo (!empty($user_err)) ? 'has-error' : ''; ?>">
                            <i class="material-icons prefix">User name</i>
                            <input id="user" type="text" class="validate" name="user" value="<?php echo $user; ?>">
                            <label for="user">User Name</label>
                            <span class="help-block"><?php echo $user_err;?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s12 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate" name="email" value="<?php echo $email; ?>">
                            <label for="email">email</label>
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="phone" type="text" class="validate" name="phone" value="<?php echo $phone; ?>">
                        <label for="phone">Phone</label>
                        <span class="help-block"><?php echo $phone_err;?></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" type="password" class="validate" name="password" value="<?php echo $password; ?>">
                        <label for="password">Password</label>
                        <span class="help-block"><?php echo $password_err;?></span>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit" value="Submit">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
</div>

<footer class="page-footer blue-grey darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">This is a very nice footer</h5>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Dev team</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/celesxx">Cameron Debliquy</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/mathieuarthur">Arthur Mathieu</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/theoackermann">Théo Ackermann</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2020 Copyright Poule emploi
        </div>
    </div>
</footer>

<script src="js/main.js">
    $("#dataRegister").submit(function(event)
    {
        alert($(this).serialize())
        event.preventDefault();
        axios.post("127.0.0.1:8000/register",{data : $(this).serialize()})
        .then(function (data)
        {
            alert(data);
        })
        .catch(function (erreur)
        {
            console.log(erreur);
        });
    });

    /*
        $("#submit").submit(function(event)
        {
            event.preventDefault();

            $.ajax
            ({
                type: 'POST',
                url: "127.0.0.1:8000/data",
                data: $(this).serialize(),
                success: function(data)
                {
                    $(this).append(data+"<br/>");
                    echo(data);
                    if(window.Notification)
                    {
                        if(Notification.permission === "granted")
                        {
                            var notify = new Notification('Data.',
                                {
                                    body: data
                                });
                        }else if(Notification.permission === "denied") alert("Merci d'accepter les notifications")
                    }
                },
            });
        });*/
</script>
</body>

</html>