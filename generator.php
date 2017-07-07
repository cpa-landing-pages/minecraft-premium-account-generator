<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="MIG-92">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="images/favicon.ico">

    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta property="fb:app_id" content="" />

    <title>Minecraft Generator</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.unpacker.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.unpacker.org/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="styles/vendors/animate.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">

</head>

<body>
    <div class="app">

        <!-- Basic-header-2 -->

    <nav class="navbar navbar-default">

        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="220" alt="Minecraft Gratuit"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="home" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>

                    <li class="active">
                        <a id="cards" href="generator.php"><i class="fa fa-cogs" aria-hidden="true"></i> Generator</a>
                    </li>

                    <li>
                        <a id="cards" href="contact.php"><i class="fa fa-users" aria-hidden="true"></i> Contact us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

        <!-- Basic-conatiner-2 -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="first" class="panel panel-default minecraft-panel">
                            <div class="panel-body">
                                <div class="left-top-corner"></div>
                                <div class="right-bottom-corner"></div>

                                <div class="gen-cover">
                                    <img src="images/gen-caver.png" width="240" alt="">
                                </div>
                                <h1 class="h1-generator text-center minecraft-font">Minecraft Premium <i class="fa fa-cogs" aria-hidden="true"></i></h1>
                                <hr>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a, commodi blanditiis.</p>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Sélectionnez votre plateforme:</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                            <select id="platform" class="form-control ubuntu-bold form-text pointer">
                                               <option value="PC">PC</option>
                                                <option value="PS3">PS3</option>
                                                <option value="PS4">PS4</option>
                                                <option value="ANDROID">ANDROID</option>
                                                <option value="iOS">iOS</option>
                                                <option value="XBOX360">XBOX 360</option>
                                                <option value="XBOXONE">XBOX ONE</option>&gt;
                                                <option value="Choisissez votre plateforme" disabled="" selected="">▼ Choisissez votre plateforme</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <label>Activer Anti BAN?</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-shield" aria-hidden="true"></i></span>
                                            <select id="antiban" name="antiban" class="form-control ubuntu-bold form-text pointer">
                                                <option value="YES">OUI (Préféré) </option>
                                                <option value="NO">NO</option>&gt;
                                                <option disabled="" selected="">▼ Choisissez Anti BAN</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="p-generator text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi sapiente quas repellat, assumenda cumque fugiat expedita tempora quia deserunt. Quis commodi consequatur unde quibusdam ipsa facere accusantium dolorum quasi molestias.</p>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                        <a id="next" href="#" class="btn btn-default btn-lg btn-block generator-btn"><i class="fa fa-cogs" aria-hidden="true"></i> Démarrez le générateur</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row text-center">
                                 <label>I agree to <a href="#" > TOS </a>
                                                    <input type="checkbox" checked class="simple-switch-input tos"/>
                                                    <span class="simple-switch dark"></span>
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="second" class="panel panel-default minecraft-panel hide">
                            <div class="panel-body konzola">
                                <div class="left-top-corner"></div>
                                <div class="right-bottom-corner"></div>

                                <div class="gen-cover">
                                    <img src="images/gen-caver.png" width="240" alt="">
                                </div>
                                <h1 class="h1-generator text-center minecraft-font">Minecraft Premium <i class="fa fa-cogs" aria-hidden="true"></i></h1>
                                <hr>
                                <div class="pixel-loader"></div>
                                <div id="cons" class="minecraft-font text-center">
                                </div>
                                <br>
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                <p class="user-data minecraft-font text-center hide">Username: <span id="userData" style="color:#50A335;"></span></p>
                                <p class="user-data minecraft-font text-center hide">Password: <span id="userPass" style="color:#50A335;"></span></p>
                                <br>
                                <!-- change this onclick function with function from  your network. -->
                                <button onclick="alert('demo')" class="user-data btn btn-default btn-lg btn-block generator-btn hide"><i class="fa fa-cogs" aria-hidden="true"></i> Procceed</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Basic-footer-1 -->
        <div class="basic-footer-1 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <a class="social-btn" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="social-btn" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social-btn" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <span class="basic-footer-1-text">© 2017 - Your domain name. All rights reserved.</span>
            </div>
        </div>

        <!-- modal-error -->
        <div class="modal fade bs-example-modal-sm" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-error">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Error <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h4>
                        <p class="error-message text-center">Choisissez votre plateforme!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- JS -->
    <script type="text/javascript">
    //consoleMessages edit text if you wish just leave text in {}
         hack = ['Connecting to the server ...', 'Anti BAN Protection: {antiban} ...', 'SHA 256 Encryption: On ...', ' Username Found: [ {username} ]   ...', ' Password Found: [ ******]   ...', 'Verifying user account ...', 'Resetting password on: [ {username} ] account ...', 'Verifying password...', 'Password Verified...', 'Please verify you are not bot... '];


    </script>

    <!-- JS -->

    <script src="https://cdn.unpacker.org/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.unpacker.org/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts/vendors/jquery.shuffleLetters.js"></script>
    <script src="scripts/script.min.js"></script>

</body>
</html>
