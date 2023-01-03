<?php
    session_start();

    if($_SESSION["login_status"] == "LOGOUT") {
        header("Location: login_to_index.php");
    }
?>
<html>
    <head>
        <title>Login | Register</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- LOCAL STYLESHEETS -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="css/navstyle.css">
    </head>
    <body id="login-page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img class="website-brand" src="assets/website-logo.png" alt="Tundra"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-5"> <a class="nav-link" href="aboutus.php">ABOUT US</a> </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                <img id="website-logo-big" src="assets/website-logo.png" alt="Tundra Esports">
            </div>
        </div>

        <div class="center">
            <h1>Login</h1>
            <form action = "connection.php" method = "post">
                <p class="txt_field">
                    <label>Username</label>
                              <span></span>
                    <input type = "text" name = "username" />
                </p>
                <p class="txt_field">
                    <label>Password</label>
                              <span></span>
                    <input type = "password" name = "password" />
                </p>
                <p>
                    <input type = "submit" name = "Login" />
                </p>
            </form>

        </div>
    </body>
</html>
