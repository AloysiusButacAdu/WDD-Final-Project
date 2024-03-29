<?php
    session_start();
    if(!isset($_SESSION["login_status"]) || !isset($_SESSION["logged_in"])) {
        $_SESSION["login_status"] = "LOGIN";
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Group 8 E-sports Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- LOCAL STYLESHEETS -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/navstyle.css">
    </head>
    <body id="landing-page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="">
                <img class="website-brand" id="website-logo" src="assets/website-logo.png" alt="Tundra"/>
			</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-5"> <a class="nav-link" href="aboutus.php">ABOUT US</a> </li>
                </ul>
            </div>
            <div>
                <a href="login.php">
                    <!-- <button class="btn btn-logout" type="button">LOGIN</button> -->
                    <button class="btn btn-logout" type="button"><?php echo $_SESSION["login_status"]; ?></button>
                </a>
            </div>
        </nav>
        
        <!-- CONTENT -->
        <div class="container-fluid text-center cells-container">    
            <div class="row justify-content-center">
                <!-- OVERWATCH -->
                <div class="col-sm cell rotate-on-hover">
                    <figure>
                        <img class="mx-auto" src="assets/Overwatch-Logo.png"/>
                    </figure>
                    <div class="cell-links">
                        <a href="https://tracker.gg/overwatch-2" target="_blank">
                            <div class="btn-game-links">
                                STATS
                            </div>
                        </a>
                        <br />
                        <a href="https://overwatch.blizzard.com/en-us/" target="_blank">
                            <div class="btn-game-links">
                                DOWNLOAD
                            </div>
                        </a>
                        <br />
                        <a href="https://overwatch.blizzard.com/en-us/news/" target="_blank">
                            
                            <div class="btn-game-links">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
                <!-- VALORANT -->
                <div class="col-sm cell rotate-on-hover">
                    <figure>
                        <img src="assets/Valorant-logo.png"/>
                    </figure>
                    <div class="cell-links">
                        
                        <a href="https://tracker.gg/valorant" target="_blank">
                            <div class="btn-game-links">
                                STATS
                            </div>
                        </a>
                        <br />
                        <a href="https://playvalorant.com/en-us/" target="_blank">
                            <div class="btn-game-links">
                                DOWNLOAD
                            </div>
                        </a>
                        <br />
                        <a href="https://playvalorant.com/en-us/news/" target="_blank">
                            <div class="btn-game-links">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
                <!-- APEX LEGENDS -->
                <div class="col-sm cell rotate-on-hover">
                    <figure>
                        <img src="assets/apex-game-png-logo-21.png"/>
                    </figure>
                    <div class="cell-links">
                        
                        <a href="https://apex.tracker.gg/" target="_blank">
                            <div class="btn-game-links">
                                STATS
                            </div>
                        </a>
                        <br />
                        <a href="https://www.ea.com/games/apex-legends" target="_blank">
                            <div class="btn-game-links">
                                DOWNLOAD
                            </div>
                        </a>
                        <br />
                        <a href="https://www.ea.com/games/apex-legends/news" target="_blank">
                            <div class="btn-game-links">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- DOTA 2 -->
                <div class="col-sm cell rotate-on-hover">
                    <figure>
                        <img src="assets/Dota-2-Logo.png"/>
                    </figure>
                    <div class="cell-links">

                        <a href="https://www.dotabuff.com/" target="_blank">
                            <div class="btn-game-links">
                                STATS
                            </div>
                        </a>
                        <br />
                        <a href="https://www.dota2.com/home" target="_blank">
                            <div class="btn-game-links">
                                DOWNLOAD
                            </div>
                        </a>
                        <br />
                        <a href="https://www.dota2.com/news" target="_blank">
                            <div class="btn-game-links">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
                <!-- LEAGUE OF LEGENDS -->
                <div class="col-sm cell rotate-on-hover">
                    <figure>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/LoL_icon.svg"/>
                    </figure>
                    <div class="cell-links">
                        <a href="https://www.leagueofgraphs.com/" target="_blank">
                            <div class="btn-game-links">
                                STATS
                            </div>
                        </a>
                        <br />
                        <a href="https://lol.garena.ph/" target="_blank">
                            <div class="btn-game-links">
                                DOWNLOAD
                            </div>
                        </a>
                        <br />
                        <a href="https://www.leagueoflegends.com/en-us/news/" target="_blank">
                            <div class="btn-game-links">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
