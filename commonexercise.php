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
            <div class="col s12 m2  ">

            </div>
            <div class="col s12 m8">
                <p class="center"><b><h4>Exercise#</b><b class="brand-logo" style=" padding-left: 10px;font-style: oblique"><sup style="font-size: 20px;font-style: oblique;font-family:cursive">Live</sup></b></p>
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>

                        <div class="input-field col s12">
                            <h5>Q.1 Do you find it difficult to deal with huge set of numbers and data? </h5>

                            <input name="1_option" id="1_single_1" value="Yes" type="checkbox" class="filled-in">
                            <label for="1_single_1">Yes</label>
                            <br>
                            <input name="1_option" id="1_single_2" value="No" type="checkbox" class="filled-in">
                            <label for="1_single_2">No</label>
                            <br>
                            <input name="1_option" id="1_single_3" value="Not Sure" type="checkbox" class="filled-in">
                            <label for="1_single_3">Not Sure</label>
                         <br>
                            <br>
                            <hr>
                        </div>

                    <div class="input-field col s12">
                    <h5>Q.2 Do you feel confident in handling other people's money? </h5>

                    <input name="2_option" id="2_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="2_single_1">Yes</label>
                        <br>
                    <input name="2_option" id="2_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="2_single_2">No</label>
                        <br>
                        <input name="2_option" id="2_single_3" value="Not Sure" type="checkbox" class="filled-in">
                        <label for="2_single_3">Not Sure</label>
                        <br>
                        <br>
                        <hr>
                    </div>


                <div class="input-field col s12">
                    <h5>Q.3 Do you enjoy reading technical materials and solve technical problems? </h5>

                    <input name="3_option" id="3_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="3_single_1">Yes</label>
                    <br>
                    <input name="3_option" id="3_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="3_single_2">No</label>
                    <br>
                    <input name="3_option" id="3_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="3_single_3">Not Sure</label>
                    <br>
                    <br>
                    <hr>
                </div>


                <div class="input-field col s12">
                    <h5>Q.4  Do you enjoy working in a laboratory and experimenting? </h5>

                    <input name="4_option" id="4_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="4_single_1">Yes</label>
                    <br>
                    <input name="4_option" id="4_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="4_single_2">No</label>
                    <br>
                    <input name="4_option" id="4_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="4_single_3">Not Sure</label>
                    <br>
                    <br>
                    <hr>
                </div>


                <div class="input-field col s12">
                    <h5>Q.5  Can you analyze financial information and interpret it to others? </h5>

                    <input name="5_option" id="5_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="5_single_1">Yes</label>
                    <br>
                    <input name="5_option" id="5_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="5_single_2">No</label>
                    <br>
                    <input name="5_option" id="5_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="5_single_3">Not Sure</label>
                    <br>
                    <br>
                    <hr>

                </div>

                <div class="input-field col s12">
                    <h5>Q.6  Do you find new technologies exciting and you think they are fun?</h5>

                    <input name="6_option" id="6_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="6_single_1">Yes</label>
                    <br>
                    <input name="6_option" id="6_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="6_single_2">No</label>
                    <br>
                    <input name="6_option" id="6_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="6_single_3">Not Sure</label>
                    <br>
                    <br>

                    <hr>
                </div>

                <div class="input-field col s12">
                    <h5>Q.7  Do you find it’s exciting to learn how things grow and stay alive? </h5>

                    <input name="7_option" id="7_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="7_single_1">Yes</label>
                    <br>
                    <input name="7_option" id="7_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="7_single_2">No</label>
                    <br>
                    <input name="7_option" id="7_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="7_single_3">Not Sure</label>
                    <br>
                    <br>
                    <hr>

                </div>

                <div class="input-field col s12">
                    <h5>Q.8 Do you think working in a hospital or other medical facilities is a bad idea? </h5>

                    <input name="8_option" id="8_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="8_single_1">Yes</label>
                    <br>
                    <input name="8_option" id="8_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="8_single_2">No</label>
                    <br>
                    <input name="8_option" id="8_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="8_single_3">Not Sure</label>
                    <br>
                    <br>
                    <hr>

                </div>

                <div class="input-field col s12">
                    <h5>Q.9 Suppose you are in the middle of a river sitting on a boat, accidently water starts filling in the boat due to a hole then what would you do in that condition? </h5>

                    <input name="9_option" id="9_single_1" value="Ask for help in exchange of money" type="checkbox" class="filled-in">
                    <label for="9_single_1">Ask for help in exchange of money</label>
                    <br>
                    <input name="9_option" id="9_single_2" value="Find a way to fill the hole and save the boat" type="checkbox" class="filled-in">
                    <label for="9_single_2">Find a way to fill the hole and save the boat</label>
                    <br>
                    <input name="9_option" id="9_single_3" value="Will swim to save myself." type="checkbox" class="filled-in">
                    <label for="9_single_3">Will swim to save myself.</label>
                    <br>
                    <br>
                    <hr>

                </div>

                <div class="input-field col s12">
                    <h5>Q.10 If ever given an option would you choose given work to make a living? </h5>

                    <input name="10_option" id="10_single_1" value="Deciding on investments in share markets" type="checkbox" class="filled-in">
                    <label for="10_single_1">Deciding on investments in share markets</label>
                    <br>
                    <input name="10_option" id="10_single_2" value="To work on computers and write programs and logical codes" type="checkbox" class="filled-in">
                    <label for="10_single_2">To work on computers and write programs and logical codes</label>
                    <br>
                    <input name="10_option" id="10_single_3" value="Conducting educational camps to eradicate polio" type="checkbox" class="filled-in">
                    <label for="10_single_3">Conducting educational camps to eradicate polio
                    </label>
                    <br>
                    <br>
                    <hr>

                </div>

                <div class="input-field col s12">
                    <h5>Q.11 What do you consider more  important?</h5>

                    <input name="11_option" id="11_single_1" value="Emotions" type="checkbox" class="filled-in">
                    <label for="11_single_1">Emotions</label>
                    <br>
                    <input name="11_option" id="11_single_2" value="Logic" type="checkbox" class="filled-in">
                    <label for="11_single_2">Logic</label>
                    <br>
                    <input name="11_option" id="11_single_3" value="Money" type="checkbox" class="filled-in">
                    <label for="11_single_3">Money
                    </label>
                    <br>
                    <br>
                    <hr>

                </div>

                <div class="input-field col s12">
                    <h5>Q.12 Do you find it boring to learn chemical formulas and physics theory?</h5>

                    <input name="12_option" id="12_single_1" value="Yes" type="checkbox" class="filled-in">
                    <label for="12_single_1">Yes</label>
                    <br>
                    <input name="12_option" id="12_single_2" value="No" type="checkbox" class="filled-in">
                    <label for="12_single_2">No</label>
                    <br>
                    <input name="12_option" id="12_single_3" value="Not Sure" type="checkbox" class="filled-in">
                    <label for="12_single_3">Not Sure
                    </label>
                    <br>
                    <br>
                    <hr>
                </div>
                        <div class="input-field col s12">
                            <h5>Q.13 Do you like to read business newspapers ?</h5>

                            <input name="13_option" id="13_single_1" value="Emotional" type="checkbox" class="filled-in">
                            <label for="13_single_1">Yes</label>
                            <br>
                            <input name="13_option" id="13_single_2" value="Think" type="checkbox" class="filled-in">
                            <label for="13_single_2">No</label>
                            <br>
                            <input name="13_option" id="13_single_3" value="Not Sure" type="checkbox" class="filled-in">
                            <label for="13_single_3">Not Sure
                            </label>
                            <br>
                            <br>
                            <hr>
                        </div>
                        <div class="input-field col s12">
                            <h5>Q.14 You are more attracted towards</h5>

                            <input name="14_option" id="14_single_1" value="A brilliant  business mind" type="checkbox" class="filled-in">
                            <label for="14_single_1">A brilliant  business mind</label>
                            <br>
                            <input name="14_option" id="14_single_2" value="A  scientific mind" type="checkbox" class="filled-in">
                            <label for="14_single_2">A  scientific mind</label>
                            <br>
                            <input name="14_option" id="14_single_3" value="Not Sure" type="checkbox" class="filled-in">
                            <label for="14_single_3">Not Sure
                            </label>
                            <br>
                            <br>
                            <hr>
                        </div>
                        <div class="input-field col s12">
                            <h5>Q.15 Do you usually get along better with?</h5>

                            <input name="15_option" id="15_single_1" value="Imaginative peopleYes" type="checkbox" class="filled-in">
                            <label for="15_single_1">Imaginative people</label>
                            <br>
                            <input name="15_option" id="15_single_2" value="Realistic people" type="checkbox" class="filled-in">
                            <label for="15_single_2">Realistic people</label>
                            <br>
                            <input name="15_option" id="15_single_3" value="Not Sure" type="checkbox" class="filled-in">
                            <label for="15_single_3">Not Sure
                            </label>
                            <br>
                            <br>
                            <hr>
                        </div>
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

                    if(a1[i].value == "Yes") {
                        com++;
                        bio++;
                        break;
                    }
                    else if(a1[i].value == "No")
                    {
                        math++;
                        break;
                    }
                    else
                    {
                      break;
                    }

                }
            }
            var a2 = document.getElementsByName('2_option');
            for(i = 0; i < a2.length; i++) {
                if(a2[i].checked) {
                    if(a2[i].value == "Yes") {
                        com++;
                        break;
                    }
                    else if(a2[i].value == "No")
                    {
                        math++;
                        bio++;
                        break;
                    }
                    else
                    {

                        break;
                    }
                }
            }
            var a3 = document.getElementsByName('3_option');
            for(i = 0; i < a3.length; i++) {
                if(a3[i].checked) {
                    if(a3[i].value == "Yes") {
                        math++;
                        break;
                    }
                    else if(a3[i].value == "No")
                    {
                         bio++;

                        break;
                    }
                    else
                    {
                        com++;
                        break;
                    }
                }
            }
            var a4 = document.getElementsByName('4_option');
            for(i = 0; i < a4.length; i++) {
                if(a4[i].checked) {
                    if(a4[i].value == "Yes") {
                        bio++;
                        break;
                    }
                    else if(a4[i].value == "No")
                    {
                        math++;
                        com++;
                        break;
                    }
                    else
                    {

                        break;
                    }
                }
            }
            var a5 = document.getElementsByName('5_option');
            for(i = 0; i < a5.length; i++) {
                if(a5[i].checked) {
                    if(a5[i].value == "Yes") {
                        com++;
                        break;
                    }
                    else if(a5[i].value == "No")
                    {
                        math++;
                        bio++;
                        break;
                    }
                    else
                    {

                        break;
                    }

                }
            }
            var a6 = document.getElementsByName('6_option');
            for(i = 0; i < a6.length; i++) {
                if(a6[i].checked) {
                    if(a6[i].value == "Yes") {
                        math++;
                        break;
                    }
                    else if(a6[i].value == "No")
                    {
                        bio++;
                        com++;
                        break;
                    }
                    else
                    {

                        break;
                    }
                }
            }
            var a7 = document.getElementsByName('7_option');
            for(i = 0; i < a7.length; i++) {
                if(a7[i].checked) {
                    if(a7[i].value == "Yes") {
                        bio++;
                        break;
                    }
                    else if(a7[i].value == "No")
                    {
                        math++;
                        com++;
                        break;
                    }
                    else
                    {

                        break;
                    }
                }
            }
            var a8 = document.getElementsByName('8_option');
            for(i = 0; i < a8.length; i++) {
                if(a8[i].checked) {
                    if(a8[i].value == "Yes") {
                       com++;
                        math++;
                        break;
                    }
                    else if(a8[i].value == "No")
                    {
                        bio++;
                        break;
                    }
                    else
                    {

                        break;
                    }
                }
            }
            var a9 = document.getElementsByName('9_option');
            for(i = 0; i < a9.length; i++) {
                if(a9[i].checked) {
                    if(a9[i].value == "Ask for help in exchange of money") {
                        com++;
                        break;
                    }
                    else if(a9[i].value == "Find a way to fill the hole and save the boat")
                    {
                        math++;
                        break;
                    }
                    else
                    {
                        bio++;
                        break;
                    }
                }
            }
            var a10 = document.getElementsByName('10_option');
            for(i = 0; i < a10.length; i++) {
                if(a10[i].checked) {
                    if(a10[i].value == "Deciding on investments in share markets") {
                        com++;
                        break;
                    }
                    else if(a10[i].value == "To work on computers and write programs and logical codes")
                    {
                        math++;
                        break;
                    }
                    else
                    {
                        bio++;
                        break;
                    }
                }
            }
            var a11 = document.getElementsByName('11_option');
            for(i = 0; i < a11.length; i++) {
                if(a11[i].checked) {
                    if(a11[i].value == "Emotions") {
                        bio++;
                        break;
                    }
                    else if(a11[i].value == "Logic")
                    {
                        math++;
                        break;
                    }
                    else
                    {
                        com++;
                        break;
                    }
                }
            }
            var a12 = document.getElementsByName('12_option');
            for(i = 0; i < a12.length; i++) {
                if(a12[i].checked) {
                    if(a12[i].value == "Yes") {
                        com++;
                        break;
                    }
                    else if(a12[i].value == "No")
                    {
                        math++;
                        bio++;
                        break;
                    }
                    else
                    {

                        break;
                    }
                }
            }
            var a13 = document.getElementsByName('13_option');
            for(i = 0; i < a13.length; i++) {
                if(a13[i].checked) {
                    if(a13[i].value == "Yes") {
                        com++;
                        math++;
                        break;
                    }
                    else if(a13[i].value == "No")
                    {
                        bio++;
                        break;
                    }
                    else
                    {
                        bio++;
                        break;
                    }
                }
            }
            var a14 = document.getElementsByName('14_option');
            for(i = 0; i < a14.length; i++) {
                if(a14[i].checked) {
                    if(a14[i].value == "A brilliant  business mind") {
                        com++;
                        break;
                    }
                    else if(a14[i].value == "A  scientific mind")
                    {
                        math++;
                        break;
                    }
                    else
                    {
                        bio++;
                        break;
                    }
                }
            }
            var a15 = document.getElementsByName('15_option');
            for(i = 0; i < a15.length; i++) {
                if(a15[i].checked) {
                    if(a15[i].value == "Imaginative people") {
                        math++;
                        break;
                    }
                    else if(a15[i].value == "Realistic people")
                    {
                        com++;
                        break;
                    }
                    else
                    {
                        break;
                    }
                }
            }

            var mscore = (math * 10);
            var cscore = (com * 10);
            var bscore = (bio * 10);

            window.location.href = 'action.php?mscore='+mscore+'&cscore='+cscore+'&bscore='+bscore+'&uid='+<?php echo $uid.$eid; ?>;

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