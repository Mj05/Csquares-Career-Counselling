<?php
include 'qz_controller.php';
$q_no = $_GET['question_no'];
$testid = $_GET['testid'];
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
    <br>
    <br>

    <div class="row">
    <?php
    for($i=1;$i<=$q_no;$i++)
    {

     ?>
        <form class="col s12" action="qsubmit.php" method="post">
            <h3>Question:<?php  echo $i ?></h3>
            <div class="row">

                <div class="input-field col s12">
                    <input name="question_<?php  echo $i ?>" id="name" type="text" class="validate" required>
                    <label for="name">Question</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="option_A_<?php  echo $i ?>" id="option_A" type="text" class="validate" required>
                    <label for="option_A">Option A</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="option_B_<?php  echo $i ?>" id="option_B" type="text" class="validate" required>
                    <label for="option_B">Option B</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="option_C_<?php  echo $i ?>" id="option_C" type="text" class="validate" required>
                    <label for="option_C">Option C</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="option_D_<?php  echo $i ?>" id="option_D" type="text" class="validate" required>
                    <label for="option_D">Option D</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="answer_<?php  echo $i ?>" id="answer_" type="text" class="validate" required>
                    <label for="answer_">Answer</label>
                </div>
            </div>
            <input name="controller" id="hide" type="hidden" value="task" class="validate">
            <input name="function" id="hide" type="hidden" value="function" class="validate">
            <input name="q_no" id="hide" type="hidden" value="<?php echo $q_no?>" class="validate">
            <input name="testid" id="hide" type="hidden" value="<?php echo $testid ?>" class="validate">
            <?php
                 }
            ?>
            <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">SUBMIT
        </form>

    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br><br>
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
