<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Csqaures</title>
    <link rel="shortcut icon" href="fonts/c2icon.jpg" />
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

</head>

<body>

<nav class="#ba68c8 purple lighten-2">
    <div class="nav-wrapper">
        <img src="fonts/logo.png" class="responsive-img" width="80" height="80"  />
        <a href="#" class="brand-logo" style=" padding-left: 70px;font-style: oblique">C<sup style="font-size: 20px;font-style: oblique;font-family:cursive">Squares</sup></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>


        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>

        </ul>
    </div>
</nav>

</div>

<div class="container">
    <div class="row">
        <br>
        <div class="col s12 m12 #fce4ec pink lighten-5">
            <p class="z-depth-3 center"><b>Successfully Registered LogIN Now !!</b></p>
        </div>
        <div class="col s12 m6 l7 ">
            <form class="col s12" action="action.php" method="post">
                <br>
                <br>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="user_email" id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Email</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">lock</i>
                        <input name="user_password" id="icon_telephone" type="tel" class="validate">
                        <input name="login" id="icon_telephone" type="hidden" value="login" class="validate">
                        <label for="icon_telephone">Password</label>
                    </div>
                    <div class="input-field col s4">
                        <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">LOGIN
                            <i class="material-icons right">send</i>
                        </button>
                        <br>
                        <br>
                        <a href="">Forgot Password ?</a>
                    </div>
                </div>
                <br>

                <blockquote>

                    <p class="center">
                    <h5 class="purple-text">
                        Career Choices Are Life Choices Take Them Seriously.
                        <b class="purple-text"><h5>What after 10th ? ...<br><u><a href="#" class="brand-logo" style=" padding-left: 110px;font-style: oblique"><b>C</b><sup style="font-size: 18px;font-style: oblique;font-family:cursive">Square</sup></a> is here to help you !</u></h5></p>

                </blockquote>
            </form>
        </div>
        <div class="col s12 m1 l1 ">
        </div>
        <div class="col s12 m5 l4">

            <br>
            <br>
            <br>

            <div class="row">

                <form class="col s12" action="action.php" method="post">
                    <div class="row">

                        <div class="input-field col s12">
                            <input name="user_name" id="name" type="text" class="validate">
                            <label for="name">Full Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="user_email" id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="user_password" id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <input name="controller" id="password" type="hidden" value="controller" class="validate">
                    <input name="function" id="password" type="hidden" value="function" class="validate">
                    <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">SIGNUP
                </form>
                <br>

            </div>



        </div>

    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    });
</script>

<br>

<footer class="page-footer #ba68c8 purple lighten-2">

    <div class="footer-copyright">
        <div class="container">
            Csquares© 2017 All rights reserved

        </div>
    </div>
</footer>

</body>
</html>

