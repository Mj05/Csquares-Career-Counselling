<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Csqaure</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

</head>

<body>

<nav class="#ba68c8 purple lighten-2">
    <div class="nav-wrapper">
        <a href="../index.php" class="brand-logo" style=" padding-left: 150px;font-style: oblique">C<sup style="font-size: 20px;font-style: oblique;font-family:cursive">Square</sup></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>


        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>

        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col s12 m3"></div>
        <div class="col s12 m6">
            <br><br><br>

            <h5 class="center purple-text"><b>ADMIN LOGIN</b></h5>
            <hr>
            <div class="col s12 m12 #fce4ec pink lighten-5">
                <p class="z-depth-3 center"><b>Wrong Email or Password Try again !!</b></p>
            </div>
            <hr>
            <form class="col s12 z-depth-5 center" action="qsubmit.php" method="post">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="admin_email" id="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="admin_password" id="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <input name="admin" id="password" type="hidden" value="admin" class="validate">
                <input name="login" id="password" type="hidden" value="login" class="validate">
                <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">LOGIN
            </form>
        </div>
        <div class="col s12 m3"></div>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<footer class="page-footer #ba68c8 purple lighten-2">

    <div class="footer-copyright">
        <div class="container center">
            © 2014 Copyright Text
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    });
</script>
</body>
</html>

