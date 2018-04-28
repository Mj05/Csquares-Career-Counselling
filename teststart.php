<?php
include 'career_controller.php';
$uid = $_GET['uid'];
$eid = $_GET['eid'];
$obj = new controller();
$a = $obj->quizcreate($eid);


$b =  $obj->scorecard($uid,1);
$c =  $obj->scorecard($uid,2);
$d =  $obj->scorecard($uid,3);
$e =  $obj->scorecard($uid,4);
$f =  $obj->usercommonexercisescore($uid);
$g =  $obj->scorecard($uid,6);
if($b[1] == 1)
{

    $check1 = "&#10004;";

}
else
{
    $colorclass1 = "#ba68c8 purple lighten-2";
}
if($c[1] == 2)
{

    $check2 = "&#10004;";

}
else
{
    $colorclass2 = "#ba68c8 purple lighten-2";

}
if($d[1] == 3)
{

    $check3 = "&#10004;";

}
else
{
    $colorclass3 = "#ba68c8 purple lighten-2";
}

if($e[1] == 4)
{

    $check4 = "&#10004;";

}
else
{
    $colorclass4 = "#ba68c8 purple lighten-2";
}
if($f[5] == 5)
{

    $check = "&#10004;";

}
else
{
    $colorclass = "#ba68c8 purple lighten-2";
}
if($g[1] == 6)
{

    $check5 = "&#10004;";

}
else
{
    $colorclass5 = "#ba68c8 purple lighten-2";

}


$uid = $_SESSION['user_id'];
if(isset($_SESSION['user_email']))
{

?>
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

<div class="row">
    <br>
    <br>
    <div class="row">


<hr/>

    </div>

    <div class="row">
        <div class="col s12 m3">
       <div class="row">
           <div class="card blue-grey darken-1">

               <div class="card-content white-text">
                   <span class="card-title"><b>Exercise Status</b> </span>
                   <hr>
                   <span class="card-title"><?php echo $check ;?>  Exercise#1 </span>
                   <span class="card-title"><?php echo $check1 ;?> Exercise#2 </span>
                   <span class="card-title"><?php echo $check2 ;?> Exercise#3</span>
                   <span class="card-title"><?php echo $check3 ;?> Exercise#4</span>
                   <span class="card-title"><?php echo $check5 ;?> Exercise#5</span>
                   <span class="card-title"><?php echo $check4 ;?> Exercise#6</span>
               </div>

               </div>
         </div>
        </div>
        <div class="col s12 m7">
            <p class="center"><b><h4>Exercise#</b><b class="brand-logo" style=" padding-left: 10px;font-style: oblique"><sup style="font-size: 20px;font-style: oblique;font-family:cursive">Live</sup></b></p>
            <div class="progress">
                <div class="indeterminate"></div>
            </div>



           <?php
           for($i=1;$i<=10;$i++)
           {



               echo "<hr>";
               echo "<h5>"."Q.$i"." ".$a[$i-1][1]."</h5>";

            for($j=1,$k=2;$j<=4,$k<=5;$j++,$k++)
            {
             ?>



                        <div class="input-field col s12">
                                <input name="<?php echo $i?>_option" id="<?php echo $i;?>_single_<?php echo $j;?>" value="<?php echo $a[$i-1][$k]; ?>" type="checkbox" class="filled-in">
                                <label for="<?php echo $i;?>_single_<?php echo $j; ?>"><?php echo $a[$i-1][$k]; ?></label>

                       </div>

<br>


            <?php
               }
               echo "<br>";
              echo "<br>";
               echo "<br>";
               echo "<br>";
               echo "<br>";
               }
            ?>
<br>
                    <br>

             <hr>





            <div class="row">

                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn #ba68c8 purple lighten-2" href="#modal<?php echo $eid ; ?>">Submit</a>
                <!-- Modal Structure1 -->
                <div id="modal1" class="modal">
                    <div class="modal-content">

                        <h5>Congratulations! Your Response submitted successfully</h5>
                        <hr>
                        <div class="row">
                            <div class="col s12 m8">
                        <h6>You just completed exercise#2 successfully<br><br>
                            You are just few steps away from Your Final Report with right Stream for you<br><br>
                            Now you can move on next exercise<br> <br>
                            To complete processing of exercise#2 & for Score <br><b> click on submit button</b>
                            </h6>
                    </div>
                            <div class="col s12 m4">
                                <img class="responsive-img" src="fonts/winer2.webp">

                            </div>
                            <h6 id="m1" class="red-text"></h6>
                            </div>
                        </div>
                    <div class="modal-footer">

                        <button class="#ba68c8 purple lighten-2 right" onclick="gradeTest()"><h5 class = "white-text"">SUBMIT</h5></button>
                    </div>

                    </div>
            </div>


                <!-- Modal Structure2 -->
                <div id="modal2" class="modal">
                    <div class="modal-content">

                        <h5>Congratulations! You Response submitted successfully2</h5>
                        <hr>
                        <div class="row">
                            <div class="col s12 m8">
                                <h6>You just completed exercise#3 successfully<br><br>
                                    You are just few steps away from Your Final Report with right Stream for you<br><br>
                                    Now you can move on next exercise<br> <br>
                                    To complete processing of exercise#3 & for Score <br><b> click on submit button</b>
                                </h6>
                            </div>
                            <div class="col s12 m4">
                                <img class="responsive-img" src="fonts/winer2.webp">

                            </div>
                            <h6 id="m2" class="red-text"></h6>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button class="#ba68c8 purple lighten-2 right" onclick="gradeTest()"><h5 class = "white-text"">SUBMIT</h5></button>
                    </div>

                </div>


            <!-- Modal Structure2 -->
            <div id="modal3" class="modal">
                <div class="modal-content">

                    <h5>Congratulations! You Response submitted successfully3</h5>
                    <hr>
                    <div class="row">
                        <div class="col s12 m8">
                            <h6>You just completed exercise#4 successfully<br><br>
                                You are just few steps away from Your Final Report with right Stream for you<br><br>
                                Now you can move on next exercise<br> <br>
                                To complete processing of exercise#4 & for Score <br><b> click on submit button</b>
                            </h6>
                        </div>
                        <div class="col s12 m4">
                            <img class="responsive-img" src="fonts/winer2.webp">

                        </div>
                        <h6 id="m3" class="red-text"></h6>
                    </div>
                </div>
                <div class="modal-footer">

                    <button class="#ba68c8 purple lighten-2 right" onclick="gradeTest()"><h5 class = "white-text"">SUBMIT</h5></button>
                </div>

            </div>

            <!-- Modal Structure2 -->
            <div id="modal6" class="modal">
                <div class="modal-content">

                    <h5>Congratulations! You Response submitted successfully3</h5>
                    <hr>
                    <div class="row">
                        <div class="col s12 m8">
                            <h6>You just completed exercise#5 successfully<br><br>
                                You are just few steps away from Your Final Report with right Stream for you<br><br>
                                Now you can move on next exercise<br> <br>
                                To complete processing of exercise#5 & for Score <br><b> click on submit button</b>
                            </h6>
                        </div>
                        <div class="col s12 m4">
                            <img class="responsive-img" src="fonts/winer2.webp">

                        </div>
                        <h6 id="m5" class="red-text"></h6>
                    </div>
                </div>
                <div class="modal-footer">

                    <button class="#ba68c8 purple lighten-2 right" onclick="gradeTest()"><h5 class = "white-text"">SUBMIT</h5></button>
                </div>

            </div>

            <!-- Modal Structure2 -->
            <div id="modal4" class="modal">
                <div class="modal-content">

                    <h5>Congratulations! You Response submitted successfully</h5>
                    <hr>
                    <div class="row">
                        <div class="col s12 m8">
                            <h6>You just completed exercise#6 successfully<br><br>
                                You are just few steps away from Your Final Report with right Stream for you<br><br>
                                Now you can move on next exercise<br> <br>
                                To complete processing of exercise#6 & for Score <br><b> click on submit button</b>
                            </h6>
                        </div>
                        <div class="col s12 m4">
                            <img class="responsive-img" src="fonts/winer2.webp">

                        </div>
                        <h6 id="m4" class="red-text"></h6>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="#ba68c8 purple lighten-2 right" onclick="gradeTest()"><h5 class = "white-text"">SUBMIT</h5></button>

                </div>

            </div>





        </div>

        <div class="col s12 m2">

            </div>

        </div>


    </div>
    <br>

</div>
<!--Import jQuery before materialize.js-->
<script>

 function gradeTest() {
        //variables with global implications
        var totalQuestions = 10;
        var correctAnswers = 0;
        var alertText;
        var i;

       var a1 = document.getElementsByName('1_option');


        for(i = 0; i < a1.length; i++) {

            if(a1[i].checked) {

                if(a1[i].value == "<?php $j=0; echo $a[$j][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a2 = document.getElementsByName('2_option');
        for(i = 0; i < a2.length; i++) {
            if(a2[i].checked) {
                if(a2[i].value == "<?php $j=0; echo $a[$j+1][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a3 = document.getElementsByName('3_option');
        for(i = 0; i < a3.length; i++) {
            if(a3[i].checked) {
                if(a3[i].value == "<?php $j=0; echo $a[$j+2][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a4 = document.getElementsByName('4_option');
        for(i = 0; i < a4.length; i++) {
            if(a4[i].checked) {
                if(a4[i].value == "<?php $j=0; echo $a[$j+3][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a5 = document.getElementsByName('5_option');
        for(i = 0; i < a5.length; i++) {
            if(a5[i].checked) {
                if(a5[i].value == "<?php $j=0; echo $a[$j+4][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a6 = document.getElementsByName('6_option');
        for(i = 0; i < a6.length; i++) {
            if(a6[i].checked) {
                if(a6[i].value == "<?php $j=0; echo $a[$j+5][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }


        var a7 = document.getElementsByName('7_option');
        for(i = 0; i < a7.length; i++) {
            if(a7[i].checked) {
                if(a7[i].value == "<?php $j=0; echo $a[$j+6][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a8 = document.getElementsByName('8_option');
        for(i = 0; i < a8.length; i++) {
            if(a8[i].checked) {
                if(a8[i].value == "<?php $j=0; echo $a[$j+7][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a9 = document.getElementsByName('9_option');
        for(i = 0; i < a9.length; i++) {
            if(a9[i].checked) {
                if(a9[i].value == "<?php $j=0; echo $a[$j+8][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }
        var a10 = document.getElementsByName('10_option');
        for(i = 0; i < a10.length; i++) {
            if(a10[i].checked) {
                if(a10[i].value == "<?php $j=0; echo $a[$j+9][6] ; ?>") {
                    correctAnswers++;
                    break;
                }
            }
        }

        var score = (correctAnswers * 10);


        if(correctAnswers == totalQuestions) {
            alertText = "Congratulations! You got all the questions right!";


        }
        else {
            alertText = "You got "  + score + " out of " + totalQuestions*10 + " Congratulations !!";

        }


     document.getElementById("m1").innerHTML = alertText;
     document.getElementById("m2").innerHTML = alertText;
     document.getElementById("m3").innerHTML = alertText;
     document.getElementById("m4").innerHTML = alertText;
     document.getElementById("m5").innerHTML = alertText;


     setTimeout(function() {
         window.location.href = 'action.php?score='+score+'&uid='+<?php echo $uid.$eid; ?>;

     }, 1100);

    }

function completeTest()
{
    document.getElementById("m4").innerHTML = "First Complete Remaining Exercises For Final Report with Stream";


    setTimeout(function() {
        window.location.href = 'testnow.php';

    }, 1200);

}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function() {
        $("input:checkbox").on('click', function() {
            // in the handler, 'this' refers to the box clicked on
            var $box = $(this);
            if ($box.is(":checked")) {
                // the name of the box is retrieved using the .attr() method
                // as it is assumed and expected to be immutable
                var group = "input:checkbox[name='" + $box.attr("name") + "']";
                // the checked state of the group/box on the other hand will change
                // and the current value is retrieved using .prop() method
                $(group).prop("checked", false);
                $box.prop("checked", true);
            } else {
                $box.prop("checked", false);
            }
        });
    });
</script>
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
<br>


<footer class="page-footer #ba68c8 purple lighten-2">

    <div class="footer-copyright">
        <div class="container center">
            Csquares© 2017 All rights reserved
        </div>
    </div>
</footer>

</body>
</html>
<?php
}
else
{
    header('location:index.php');
}
?>
