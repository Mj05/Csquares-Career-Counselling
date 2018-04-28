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
    <script type='text/javascript'>
        function addFields()
        {
             var number = document.getElementById("q_no").value;
            var testid = document.getElementById("exercise_id").value;
            window.location.href = "qbox.php?question_no="+number+"&&testid="+testid;
        }

    </script>
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
    <br>
    <br>
<div class="row">
    <div class="col s12 m3"></div>
    <div class="col s12 m6 z-depth-5 center">

            <br>

            <h5 class="center purple-text"><b>CREATE NEW EXERCISE</b></h5>
            <hr>
            <form>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="exercise_id" id="exercise_id" type="number" min="1" max="4" class="validate" required>
                        <label for="exercise_id">Exercise ID :</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="q_no" id="q_no" type="number" min="1" max="10" class="validate" required>
                        <label for="q_no">No of Questions :</label>
                    </div>
                </div>
                <input name="controller" id="password" type="hidden" value="controller" class="validate">
                <input name="function" id="password" type="hidden" value="function" class="validate">

            </form>

                <br>
            <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" onclick="addFields()" type="submit" name="action">CREATE NOW
        </button>
</div>
    <div class="col s12 m3"></div>
    </div>

</div>
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
