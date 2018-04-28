<?php
include 'qz_controller.php';
if(isset($_SESSION['admin_email']))
{
?>
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
        <a href="#" class="brand-logo" style=" padding-left: 150px;font-style: oblique">C<sup style="font-size: 20px;font-style: oblique;font-family:cursive">Square</sup></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li>
                <button onclick="window.location.href='adminlogout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
            </li>

        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li>
                <button onclick="window.location.href='adminlogout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <br>
    <div class="row">
        <div class="col s12 m3"></div>
        <div class="col s12 m6">
            <br><br><br>

            <h5 class="center purple-text"><b>DROP PERVIOUS EXERCISE</b></h5>
            <hr>
            <form class="col s12 z-depth-5 center" action="qsubmit.php" method="post">

                <div class="row">
                    <div class="input-field col s12">
                        <input name="exercise_id" id="exercise_id" type="number" class="validate" min="1" max="4" required>
                        <label for="exercise_id">Exercise ID:</label>
                    </div>
                </div>
                <input name="drop" id="" type="hidden" value="drop" class="validate">
                <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">DROP Now
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
<?php
}
else
{
    header('location:admin.php');
}
