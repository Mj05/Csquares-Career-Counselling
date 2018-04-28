<?php
include 'career_controller.php';
$uid = $_SESSION['user_id'];
if(isset($_SESSION['user_email']))
{
?>
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
            <li><a href="testnow.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>

            <li>
                <button onclick="window.location.href='logout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
            </li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="testnow.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>

            <li>
                <button onclick="window.location.href='logout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">

        <div class="col s12 m1">

        </div>
        <div class="col s12 m10">



                    <br>
<h4 class="purple-text center"><b>Final Step</b></h4>
                    <hr/>
<br>

                        <form class="col s12" action="action.php?finalstep_uid=<?php echo $uid ?>" method="post">

                                <div class="row">
                                    <div class="input-field col s12 m2"></div>
                                    <div class="input-field col s12 m8">
                                        <h5>Select your father's occupation:</h5>
                                        <select name="foccupation" class="icons">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="Doctor" data-icon="fonts/check-icon.png" class="left circle">Doctor</option>
                                            <option value="Businessman" data-icon="fonts/check-icon.png" class="left circle">Businessman</option>
                                            <option value="Engineer" data-icon="fonts/check-icon.png" class="left circle">Engineer</option>
                                            <option value="Charted accountant(CA)" data-icon="fonts/check-icon.png" class="left circle">Charted accountant(CA)</option>
                                            <option value="Other" data-icon="fonts/check-icon.png" class="left circle">Other</option>
                                        </select>

                                    </div>
                                    <div class="input-field col s12 m2"></div>
                                </div>

                            <div class="row">
                                <div class="input-field col s12 m2"></div>
                                <div class="input-field col s12 m8">
                                    <h5>Select Your mother's occupation:</h5>
                                    <select name="moccupation" class="icons">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Doctor" data-icon="fonts/check-icon.png" class="left circle">Doctor</option>
                                        <option value="Business women" data-icon="fonts/check-icon.png" class="left circle">Business women</option>
                                        <option value="Engineer" data-icon="fonts/check-icon.png" class="left circle">Engineer</option>
                                        <option value="Charted accountant(CA)" data-icon="fonts/check-icon.png" class="left circle">Charted accountant(CA)</option>
                                        <option value="Other" data-icon="fonts/check-icon.png" class="left circle">Other</option>
                                        <option value="House Wife" data-icon="fonts/check-icon.png" class="left circle">House Wife</option>
                                    </select>

                                </div>
                                <div class="input-field col s12 m2"></div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m2"></div>
                                <div class="input-field col s12 m8">
                                    <h5>Select your brother/ Sister's educational background:</h5>
                                    <select name="bsbackground" class="icons">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Science-Biology" data-icon="fonts/check-icon.png" class="left circle">Science-Biology</option>
                                        <option value="Science-Maths" data-icon="fonts/check-icon.png" class="left circle">Science-Maths</option>
                                        <option value="Commerce" data-icon="fonts/check-icon.png" class="left circle">Commerce</option>
                                        <option value="Arts" data-icon="fonts/check-icon.png" class="left circle">Arts</option>
                                        <option value="N/A" data-icon="fonts/check-icon.png" class="left circle">N/A</option>

                                    </select>

                                </div>
                                <div class="input-field col s12 m2"></div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m2"></div>
                                <div class="input-field col s12 m8">
                                    <h5>Select which one you like more among the following:</h5>
                                    <select name="rolemodel" class="icons">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Dr.APJ Abdul kalam" data-icon="fonts/check-icon.png" class="left circle">Dr.APJ Abdul kalam</option>
                                        <option value="Mr.Mukesh Ambani" data-icon="fonts/check-icon.png" class="left circle">Mr.Mukesh Ambani</option>
                                        <option value="Mr. Nrendra Modi" data-icon="fonts/check-icon.png" class="left circle">Mr. Nrendra Modi</option>
                                        <option value="Mrs. Kiran Bedi" data-icon="fonts/check-icon.png" class="left circle">Mrs. Kiran Bedi</option>

                                    </select>

                                </div>
                                <div class="input-field col s12 m2"></div>
                            </div>
                        <div class="row">
                        <div class="input-field col s12 m4"></div>
                        <div class="input-field col s12 m4">

                            <input name="finalstep" id="password" type="hidden" value="finalstep" class="validate">
                        <button class="btn waves-effect waves-light #ba68c8 purple lighten-2 center" type="submit" name="action">Report Card<i class="material-icons right">receipt</i></button>
                         <br><br>
                        </div>
                        <div class="input-field col s12 m4"></div>
                            </div>
                            </form>



            </div>


        <div class="col s12 m1">

        </div>
    </div>
</div>

<footer class="page-footer #ba68c8 purple lighten-2">

    <div class="footer-copyright">
        <div class="container center">
            Csquares© 2017 All rights reserved
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    });
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</body>
</html>
<?php
}
else
{
    header('location:index.php');
}
?>
