<?php
include 'career_controller.php';
$uid = $_SESSION['user_id'];
$obj = new controller();
$a =  $obj->scorecard($uid,1);
$b =  $obj->scorecard($uid,2);
$c =  $obj->scorecard($uid,3);
$d =  $obj->scorecard($uid,4);
$e =  $obj->usercommonexercisescore($uid);
$g =  $obj->scorecard($uid,6);
if($a[1] == 1)
{
   $colorclass1 = "#311b92 deep-purple darken-2";
    $check1 = "&#10004;";
    $done1 = "Done";
}
else
{
    $colorclass1 = "#ba68c8 purple lighten-2";
}
if($b[1] == 2)
{
    $colorclass2 = "#311b92 deep-purple darken-2";
    $check2 = "&#10004;";
    $done2 = "Done";
}
else
{
    $colorclass2 = "#ba68c8 purple lighten-2";

}
if($c[1] == 3)
{
    $colorclass3 = "#311b92 deep-purple darken-2";
    $check3 = "&#10004;";
    $done3 = "Done";
}
else
{
    $colorclass3 = "#ba68c8 purple lighten-2";
}

if($d[1] == 4)
{
    $colorclass4 = "#311b92 deep-purple darken-2";
    $check4 = "&#10004;";
    $done4 = "Done";
}
else
{
    $colorclass4 = "#ba68c8 purple lighten-2";
}
if($e[5] == 5)
{
    $colorclass = "#311b92 deep-purple darken-2";
    $check = "&#10004;";
    $done = "Done";
}
else
{
    $colorclass = "#ba68c8 purple lighten-2";
}
if($g[1] == 6)
{
    $colorclass5 = "#311b92 deep-purple darken-2";
    $check5 = "&#10004;";
    $done5 = "Done";
}
else
{
    $colorclass5 = "#ba68c8 purple lighten-2";
}




if(isset($_SESSION['user_email']))
{
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Csquares</title>
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
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>

            <li>
                <button onclick="window.location.href='logout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
            </li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>

            <li>
                <button onclick="window.location.href='logout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
<br>
    <br>

    <div class="row">

        <h4 class="center"><b class="purple-text">About</b><b class="brand-logo purple-text" style=" padding-left: 10px;font-style: oblique">C</b><sup class="purple-text" style="font-size: 20px;font-style: oblique;font-family:cursive">square</sup><b class="purple-text"> Exercises</b></h4>
       <br>

        <div class="progress">
            <div class="determinate" style="width: 100%"></div>
        </div>


        <div class="row">

            <div class="card z-depth-1">

                <div class="card-content ">
            <div class="row">
                <div class="col s12 m6">
                    <h5 class="center">

                    There is a skill and interest based test in the first and

                    foremost exercise.  Then  test for minds with scientific

                    behaviour followed by calcus test. It is very realistic as

                    here when You performs these exercises , Your knowledge

                    comes into picture  and so one's interest also.
              </h5>
                </div>
                <div class="col s12 m6">
                    <img src="fonts/child.jpg" class="responsive-img">
                </div>
                </div>
                </div>

            </div>
        </div>

    </div>
</div>
        <div class="row">

            <div class="col s12 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">

                        <span class="card-title">Exercise#1</span>
                       <p>I am a very simple Exercise.
                            <b class="red-text"><?php echo $check ; ?><?php echo $check ; ?><?php echo $done ; ?></b></p>

                    </div>
                    <div class="card-action">

                        <button onclick="window.location.href='commonexercise.php?eid=5&uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light <?php echo $colorclass ;?>" type="submit" name="action">Start
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>

            </div>
            <div class="col s12 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Exercise#2</span>
                        <p>I am a very simple Exercise.<b class="red-text"><?php echo $check1 ; ?><?php echo $check1 ; ?><?php echo $done1 ; ?></b></p> </p>
                    </div>
                    <div class="card-action">

                        <button onclick="window.location.href='teststart.php?eid=1&uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light <?php echo $colorclass1 ;?>" type="submit" name="action">Start
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>

            </div>
            <div class="col s12 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Exercise#3</span>
                        <p>I am a very simple Exercise.<b class="red-text"><?php echo $check2 ; ?><?php echo $check2 ; ?><?php echo $done2 ; ?></b></p> </p>
                    </div>
                    <div class="card-action">

                        <button onclick="window.location.href='teststart.php?eid=2&uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light <?php echo $colorclass2;?>" type="submit" name="action">Start
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>

            </div>
            <div class="col s12 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Exercise#4</span>
                        <p>I am a very simple Exercise.<b class="red-text"><?php echo $check3 ; ?><?php echo $check3 ; ?><?php echo $done3 ; ?></b></p> </p>
                    </div>
                    <div class="card-action">

                        <button onclick="window.location.href='teststart.php?eid=3&uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light <?php echo $colorclass3 ;?>" type="submit" name="action">Start
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>

            </div>
            <div class="col s12 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Exercise#5</span>
                        <p>I am a very simple Exercise.<b class="red-text"><?php echo $check5 ; ?><?php echo $check5 ; ?><?php echo $done5 ; ?></b></p></p>
                    </div>
                    <div class="card-action">

                        <button onclick="window.location.href='teststart.php?eid=6&uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light <?php echo $colorclass5 ;?>" type="submit" name="action">Start
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>
            </div>
            <div class="col s12 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Exercise#6</span>
                        <p>I am a very simple Exercise.<b class="red-text"><?php echo $check4 ; ?><?php echo $check4 ; ?><?php echo $done4 ; ?></b></p></p>
                    </div>
                    <div class="card-action">

                        <button onclick="window.location.href='teststart.php?eid=4&uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light <?php echo $colorclass4 ;?>" type="submit" name="action">Start
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </div>

            </div>


        </div>



<div class="row">
    <div class="col s12 m11">

    </div>

    <div class="col s12 m1">
        <?php
        if($a[1]==1 && $b[1]==2 && $c[1]==3 && $d[1]==4 && $e[5]==5 && $g[1]==6)
        {
            ?>
       <a  href="#modal1"><h5><b><u>Next <i class="material-icons">send</i></u></b></h5></a>
       <?php
            }
        else
        {
        ?>
            <a  href="#modal2"><h5><b><u>Next <i class="material-icons">send</i></u></b></h5></a>
          <?php
         }
       ?>
    </div>
    <div class="row">
        <!-- Modal Structure1 -->
        <div id="modal1" class="modal">
            <div class="modal-content">

                <h5>Congratulaions !</h5>
                <hr>
                <div class="row">
                    <div class="col s12 m8">
                        <h6>You just completed all exercises successfully<br><br>
                            Now you can view your final report card<br><br>
                            for final report card<b> click on agree</b>
                        </h6>
                    </div>
                    <div class="col s12 m4">
                        <img class="responsive-img" src="fonts/report-card-clip.gif">

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button  onclick="window.location.href='otherfactor_form.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">agree</button>

               <!--
                <button  onclick="window.location.href='report.php?uid=<?php echo $uid; ?>'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">agree</button>
            -->
            </div>

        </div>


        <!-- Modal Structure2 -->
        <div id="modal2" class="modal">
            <div class="modal-content">

                <h5>Notification </h5>
                <hr>
                <div class="row">
                    <div class="col s12 m8">
                        <h6><br><br>
                            You skiped some exercises Please complete all exercises.</b><br><br>
                            After that you can view your final report with exact Stream
                        </h6>
                    </div>
                    <div class="col s12 m4">
                        <img class="responsive-img" src="fonts/report-card-clip.gif">

                    </div>

                </div>
            </div>
            <div class="modal-footer">

                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">close</a>
            </div>
            </div>

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
</script>
<script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
    $('#modal1').modal('open');
    $('#modal1').modal('close');
    $('#modal2').modal('open');
    $('#modal2').modal('close');
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