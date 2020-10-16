<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Poule emploi</title>
    <link rel="icon" type="image/png" href="img/chicken.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="col s12 m5" id="Table">
        
        <?php

            require_once "admin.php";

        ?>

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
</body>

</html>