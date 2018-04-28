<?php
include 'career_controller.php';
$obj = new controller();
$uid = $_GET['uid'];
$eid = $_GET['eid'];
$uid = $_SESSION['user_id'];
if(isset($_SESSION['user_email']))
{
    ?>
    <html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Csquares</title>

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
            <a href="#" class="brand-logo" style=" padding-left: 150px;font-style: oblique">C<sup style="font-size: 20px;font-style: oblique;font-family:cursive">Square</sup></a>
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
    <div class="col s12 m2  ">

    </div>
    <div class="col s12 m8">
    <p class="center"><b><h4>Exercise#</b><b class="brand-logo" style=" padding-left: 10px;font-style: oblique"><sup style="font-size: 20px;font-style: oblique;font-family:cursive">Live</sup></b></p>
    <div class="progress">
        <div class="indeterminate"></div>
    </div>

<div class="row">
        <h5>Q.1 Which describes Fleming Left Hand Rule ? </h5>
<div class="col s6 m6">
        <input name="1_option" id="1_single_1" value="A" type="checkbox" class="filled-in">
        <label for="1_single_1"><img src="fonts/1_image_1.png" class="responsive-img">
        </label>
</div>
        <div class="col s6 m6">
        <input name="1_option" id="1_single_2" value="B" type="checkbox" class="filled-in">
        <label for="1_single_2"><img src="fonts/1_image_2.png" class="responsive-img">
        </label>
 </div>
</div>
<br>
    <br>
    <br>


    <div class="row">
        <h5>Q.2 Which image show Newton’s Third law ? </h5>
        <div class="col s6 m6">
            <input name="2_option" id="2_single_1" value="A" type="checkbox" class="filled-in">
            <label for="2_single_1"><img src="fonts/2_image_1.png" class="responsive-img">
            </label>
        </div>
        <div class="col s6 m6">
            <input name="2_option" id="2_single_2" value="B" type="checkbox" class="filled-in">
            <label for="2_single_2"><img src="fonts/2_image_2.png" class="responsive-img">
            </label>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>


    <div class="row">
        <h5>Q.3 Unit of current is? </h5>
        <div class="col s6 m6">
            <input name="3_option" id="3_single_1" value="A" type="checkbox" class="filled-in">
            <label for="3_single_1"><img src="fonts/3_image_1.png" class="responsive-img">
            </label>
        </div>
        <div class="col s6 m6">
            <input name="3_option" id="3_single_2" value="B" type="checkbox" class="filled-in">
            <label for="3_single_2"><img src="fonts/ampere_210.png" class="responsive-img">
            </label>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="row">
        <h5>Q.4 Which represent the symbol of Chemical name for common salt ? </h5>
        <div class="col s6 m6">
            <input name="4_option" id="4_single_1" value="A" type="checkbox" class="filled-in">
            <label for="4_single_1"><img src="fonts/4_image_1.png" class="responsive-img">
            </label>
        </div>
        <div class="col s6 m6">
            <input name="4_option" id="4_single_2" value="B" type="checkbox" class="filled-in">
            <label for="4_single_2"><img src="fonts/4_imaage_2.png" class="responsive-img">
            </label>
        </div>
    </div>
    <br>
    <br>
    <br>


    <div class="row">
        <h5>Q.5 Which of the following is  a  metal ? </h5>
        <div class="col s6 m6">
            <input name="5_option" id="5_single_1" value="A" type="checkbox" class="filled-in">
            <label for="5_single_1"><img src="fonts/rsz_platinum-button.jpg" class="responsive-img">
            </label>
        </div>
        <div class="col s6 m6">
            <input name="5_option" id="5_single_2" value="B" type="checkbox" class="filled-in">
            <label for="5_single_2"><img src="fonts/The-Diamond-Industry.jpg" class="responsive-img">
            </label>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <h5>Q.6 The figure given below which shows the _________ through a rectangular glass slab. </h5>
        <div class="col s6 m6">
           <img src="fonts/6_image_2.png" class="responsive-img">
        </div>
        <br>
        <div class="col s6 m6">
            <input name="6_option" id="6_single_1" value="Reflection of light" type="checkbox" class="filled-in">
            <label for="6_single_1">Reflection of light</label>
            <br>
            <input name="6_option" id="6_single_2" value="Collision of lights" type="checkbox" class="filled-in">
            <label for="6_single_2">Collision of lights</label>
            <br>
            <input name="6_option" id="6_single_3" value="Refraction of light" type="checkbox" class="filled-in">
            <label for="6_single_3">Refraction of light</label>
            <br>
            <input name="6_option" id="6_single_4" value="Non of above" type="checkbox" class="filled-in">
            <label for="6_single_4">Non of above</label>
        </div>
    </div>
    <br>

    <div class="row">
        <h5>Q.7 The figure given below which shows the _________ through a rectangular glass slab. </h5>
        <div class="col s6 m6">
            <img src="fonts/7_image_1.png" class="responsive-img">
        </div>
        <br>
        <div class="col s6 m6">
            <input name="7_option" id="7_single_1" value="Oxygen" type="checkbox" class="filled-in">
            <label for="7_single_1">Oxygen</label>
            <br>
            <input name="7_option" id="7_single_2" value="Methane" type="checkbox" class="filled-in">
            <label for="7_single_2">Methane</label>
            <br>
            <input name="7_option" id="7_single_3" value="CO2" type="checkbox" class="filled-in">
            <label for="7_single_3">CO2</label>
            <br>
            <input name="7_option" id="7_single_4" value="Ethene" type="checkbox" class="filled-in">
            <label for="7_single_4">Ethene</label>
        </div>
    </div>
    <br>


    <div class="row">
        <h5>Q.8 The figure given below which shows the _________ through a rectangular glass slab. </h5>
        <div class="col s5 m6">
            <img src="fonts/8_image_11.png" class="responsive-img">
        </div>
        <br>
        <div class="col s7 m6">
            <input name="8_option" id="8_single_1" value="Amplitude Modulation" type="checkbox" class="filled-in">
            <label for="8_single_1">Amplitude Modulation</label>
            <br>
            <input name="8_option" id="8_single_2" value="Frequency modulation" type="checkbox" class="filled-in">
            <label for="8_single_2">Frequency modulation</label>
            <br>
            <input name="8_option" id="8_single_3" value="Pulse modulation" type="checkbox" class="filled-in">
            <label for="8_single_3">Pulse modulation</label>
            <br>
            <input name="8_option" id="8_single_4" value="None of these" type="checkbox" class="filled-in">
            <label for="8_single_4">None of these</label>
        </div>
    </div>
    <br>


    <div class="row">
        <h5>Q.9 What is PH value of pure water? </h5>
        <div class="col s6 m6">
            <img src="fonts/9_image_11.png" class="responsive-img">
        </div>
        <br>
        <div class="col s6 m6">
            <input name="9_option" id="9_single_1" value="less than 7" type="checkbox" class="filled-in">
            <label for="9_single_1">less than 7</label>
            <br>
            <input name="9_option" id="9_single_2" value="Greater than 7" type="checkbox" class="filled-in">
            <label for="9_single_2">Greater than 7</label>
            <br>
            <input name="9_option" id="9_single_3" value="Greater than 14" type="checkbox" class="filled-in">
            <label for="9_single_3">Greater than 14</label>
            <br>
            <input name="9_option" id="9_single_4" value="Equal to 7" type="checkbox" class="filled-in">
            <label for="9_single_4">Equal to 7</label>
        </div>
    </div>
    <br>


    <div class="row">
        <h5>Q.10 This is the image of _____cycle ? </h5>
        <div class="col m8">
            <img src="fonts/10_image_11.png" class="responsive-img">
        </div>
        <br>
        <div class="col s12 m4">
            <input name="10_option" id="10_single_1" value="Carbon cycle" type="checkbox" class="filled-in">
            <label for="10_single_1">Carbon cycle</label>
            <br>
            <input name="10_option" id="10_single_2" value="Nitrogen cycle" type="checkbox" class="filled-in">
            <label for="10_single_2">Nitrogen cycle</label>
            <br>
            <input name="10_option" id="10_single_3" value="Born-Haber cycle" type="checkbox" class="filled-in">
            <label for="10_single_3">Born-Haber cycle</label>
            <br>
            <input name="10_option" id="10_single_4" value="Non of these" type="checkbox" class="filled-in">
            <label for="10_single_4">Non of these</label>
        </div>
    </div>
 <hr/>


    <div class="row">
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn #ba68c8 purple lighten-2" href="#modal1">Submit</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h5>Congratulations! Your Response submitted successfully</h5>
                <hr>
                <div class="row">
                    <div class="col s12 m8">
                        <h6>Your First Exercise's Score is submitted successfully.<br><br>
                            It is a special  skill and interest based exercise so it's score is Hidden.<br><br>
                            To complete processing of exercise#1 <b>click on submit button</b>.
                        </h6>
                    </div>
                    <div class="col s12 m4">
                        <img class="responsive-img" src="fonts/winer2.webp">
                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <button class="#ba68c8 purple lighten-2 right" onclick="gradeTest()"><h5 class = "white-text"">SUBMIT</h5></button>
            </div>
        </div>
    </div>
    <div class="col s12 m4">


        <div class="col s12 m4">

        </div>
        <div class="col s12 m4"></div>
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
        var math = 0;
        var com = 0;
        var bio = 0;
        var alertText;
        var i;
        var stream;

        var a1 = document.getElementsByName('1_option');


        for(i = 0; i < a1.length; i++) {

            if(a1[i].checked) {

                if(a1[i].value == "B") {

                    correctAnswers++;
                    break;

                }


            }
        }
        var a2 = document.getElementsByName('2_option');
        for(i = 0; i < a2.length; i++) {
            if(a2[i].checked) {
                if(a2[i].value == "A") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a3 = document.getElementsByName('3_option');
        for(i = 0; i < a3.length; i++) {
            if(a3[i].checked) {
                if(a3[i].value == "B") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a4 = document.getElementsByName('4_option');
        for(i = 0; i < a4.length; i++) {
            if(a4[i].checked) {
                if(a4[i].value == "A") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a5 = document.getElementsByName('5_option');
        for(i = 0; i < a5.length; i++) {
            if(a5[i].checked) {
                if(a5[i].value == "A") {
                    correctAnswers++;
                    break;
                }


            }
        }
        var a6 = document.getElementsByName('6_option');
        for(i = 0; i < a6.length; i++) {
            if(a6[i].checked) {
                if(a6[i].value == "Refraction of light") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a7 = document.getElementsByName('7_option');
        for(i = 0; i < a7.length; i++) {
            if(a7[i].checked) {
                if(a7[i].value == "Methane") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a8 = document.getElementsByName('8_option');
        for(i = 0; i < a8.length; i++) {
            if(a8[i].checked) {
                if(a8[i].value == "Amplitude Modulation") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a9 = document.getElementsByName('9_option');
        for(i = 0; i < a9.length; i++) {
            if(a9[i].checked) {
                if(a9[i].value == "Equal to 7") {
                    correctAnswers++;
                    break;
                }

            }
        }
        var a10 = document.getElementsByName('10_option');
        for(i = 0; i < a10.length; i++) {
            if(a10[i].checked) {
                if(a10[i].value == "Carbon cycle") {
                    correctAnswers++;
                    break;
                }

            }
        }


    var scoreimgexercise = ( correctAnswers * 10);

        alert("Score is :" + scoreimgexercise);

       // window.location.href = 'action.php?mscore='+mscore+'&cscore='+cscore+'&bscore='+bscore+'&uid='+<?php echo $uid.$eid; ?>;

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
    </script>
    <footer class="page-footer #ba68c8 purple lighten-2">

        <div class="footer-copyright">
            <div class="container center">
                © 2014 Copyright Text
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