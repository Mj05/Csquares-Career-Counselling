<?php
include 'career_controller.php';
$uid = $_SESSION['user_id'];
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
    <br>
    <br>

    <div class="row">

        <br>
        <h4 class="center"><b class="">About</b><b class="brand-logo" style=" padding-left: 10px;font-style: oblique">Science mathematics</b><sup style="font-size: 20px;font-style: oblique;font-family:cursive">Stream</sup></h4>
<br>
        <div class="progress">
            <div class="determinate" style="width: 100%"></div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="fonts/banner.png">

            </div>
            <div class="card-content">
                <p>Science Maths has Versatile Career.
                    There are  exciting profession in this , but one of its greatest advantages is that it will leave you time for all the other things in your life that you love!
                    There are lots of career opportunities available for students who don’t want to pursue engineering as a major career option. Choosing a right career is not a
                    tough task for any individual. The problem is that we are not aware of options we are having.</p>
            </div>

        </div>


    </div>


    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <h5 class="center"><b class="purple-text">About Science mathematics Courses</b></h5><hr>

                    <div class="row">
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Technology (B.Tech)</div>
                                <div class="collapsible-body"><span>Engineers apply the principles of science and mathematics to develop economical solutions to technical problems.
                                        Their work is the link between scientific discoveries and the commercial applications that meet societal and consumer needs.
                                    Engineering is a great outlet for the imagination—the perfect field for independent thinkers.
                                    Come up with solutions no one else has thought of. Make your mark on the world.
                                    An engineering degree offers you lots of freedom in finding your dream job.
                                    Everywhere you look you’ll see examples of engineering having a positive effect on everyday life.
                                    Engineers not only earn lots of respect, but they’re highly paid. Even the starting salary for an entry-level job is impressive!
                                    Engineering takes teamwork, and you’ll collaborate with all kinds of people inside and outside the field.
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i> Bachelor in Science (B.sc)</div>
                                <div class="collapsible-body"><span>Bachelor of Science (B.Sc.) or B.S. is one of the most popular academic degree courses among
                                        the science students after class 12th. The duration of B.Sc. degree course ranges from 3 years to 5 years, depending upon the country in which
                                        you are studying for eg. In India the course is generally of 3 years whereas in Argentina the course duration is 5 years.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Computer Application (BCA)</div>
                                <div class="collapsible-body">
                                    <span>BCA Stands for the Bachelor in Computer Application.BCA is 3 year graduation degree course generally for those students who wants to
                                        learn Computer languages and after that who wants to join Software companies.In Today time every course have its own importance.
                                        BCA have also there own.Some students who were not able to take 4 year BTech graduation degree course in Computer Science branch,they
                                        join the BCA course.Admission to a regular BCA program is generally through a common entrance test conducted by the respective universities.

                                    </span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>B.Sc in Information Technology (B.sc IT)</div>
                                <div class="collapsible-body"><span>B.Sc. IT stands for Bachelor of Science in Information Technology. In this article, we will analyze this
                                        professional course. We will cover details such as- basic course details, advantages of pursuing this course, eligibility criteria,
                                        courses to do after B.Sc. IT, scope associated with this field and career prospects. Before we head to the above mentioned details,
                                        let me tell you some interesting facts about this course. B.Sc. programs have been offered by Colleges across India since a long time!
                                        But, Information Technology program is a relatively new entrant, when compared to other traditional B.Sc. programs. This is a 3 years long program.
                             </span></div>
                            </li>

                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i> Bachelor in Pharmacy (B.Pharm)</div>
                                <div class="collapsible-body"><span>B.Pharm is an under graduate degree awarded for the completion of a 3 year program in the area of Pharmacy.
                                        B.Pharm is a shortened form of Bachelor of Pharmacy. Pharmacy Council of India is the controlling authority of the Indian Pharmacy education.
                                        One of the main tasks of a pharmacist is to prescribe medications to patients. It is evident from this very fact that the course of B Pharm
                                        focuses on the study of biology,
                                        pharmaceutical chemistry (inorganic, physical and organic), biochemistry, medicines, physiology, pharmacology, dispensing etc.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>  Bachelor of Design in Visual Communication</div>
                                <div class="collapsible-body"><span>In the Bachelor of Design in Visual Communication students learn how to create visual messages and experiences that
                                        communicate information and ideas across many media.
                                Students experiment with both traditional and emerging design practices, and develop a visual language that allows them to work across digital, physical
                                        and analogue media. This visual language is broad, encompassing typography, interaction and image-making.
                                There are many career options in a range of fields for graduates, such as digital media, publication designer, graphic designer, interactive media designer,
                                        web designer, branding specialist, art director, motion graphics designer, advertising, illustrator, and exhibition designer. Graduates are also
                                        equipped with the skills to become writers, researchers, editors and critics, and to apply design thinking in a non-design industry business.
☺                              </span></div>
                            </li>

                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor in Fashion Technology</div>
                                <div class="collapsible-body"><span>It is a 4 years long residential program. This period of 4 years is divided into 8 semesters. Apart from theoretical
                                        knowledge, adequate importance is given to practical knowledge, internship program, field trips, projects etc.
                                        The aim of this program is to make students familiar with the latest techniques, instruments, technology etc used in the fashion industry.
                                        The field of textiles, garments and clothing has
                                        evolved really fast and has become what the fashion industry is today. BFT program trains students so that
                                        they become well equipped, in terms of technology and methods used today in the fashion industry.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i> The Bachelor of Design</div>
                                <div class="collapsible-body"><span>The Bachelor of Design(B. Des) is a four years duration . India will soon be a player in the international framework
                                        of animation production. Graduates of this programme find rewarding careers as animators, character designers, story-board artists as well as
                                        creative directors, producers, consultants and designers in many organizations such as Channel [V], MTV, Nickelodeon, Cartoon Network,
                                        Tata Interactive, Infosys, Cognizant to name a few and also as individual designpreneur or as faculty/designers at various design schools in India,
                                        including their alma mater (NID), and abroad.</span></div>
                            </li>

                        </ul>



                    </div>
                </div>

            </div>
        </div>
        <div>

            <div class="row">

                <div class="col s12 m12">
                    <div class="card z-depth-3">

                        <div class="card-content">
                            <h5 class="center"><b class="purple-text">About Entrance Exams</b></h5><hr>
                            <br>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Engineering Entrance Exams</b><hr>

                                        <ul>
                                            <li>&#x270D; JEE MAIN ( Joint Entrance Examination main )</li>
                                            <li>&#x270D; JEE Advanced ( Joint Entrance Examination Advanced )</li>
                                            <li>&#x270D; BITSAT ( Birla Institute of Technology and Science Admission Test )</li>
                                            <li>&#x270D; VITEEE ( VIT Engineering Entrance Examination)</li>
                                            <li>&#x270D; Banaras Hindu University Pre Medical Test (BHUPMT)</li>
                                            <li>&#x270D; WBJEE ( West Bengal Joint Entrance Examination )</li>
                                            <li>&#x270D; MHTCET ( Maharashtra Common Entrance Test )</li>
                                            <li>&#x270D; KCET ( Karnataka Common Entrance Test )</li>
                                            <li>&#x270D; AP EAMCET(Andhra Pradesh Engineering Agriculture and Medical Common Entrance Test )</li>
                                            <li>&#x270D; UPSEE (Uttar Pradesh State Entrance Exam)</li>
                                            <li>&#x270D; KIITEE(Kalinga Institute of Industrial Technology Entrance Examination (KIITEE))</li>
                                            <li>&#x270D;  Manipal University Online Entrance Test</li>
                                            <li>&#x270D;  UPESEAT (University of Petroleum and Energy Studies Engineering Aptitude Test)</li>
                                            <li>&#x270D;  SRMJEEE (SRM Joint Engineering Entrance Examination)</li>
                                            <li>&#x270D;  Amrita Engineering Entrance Examination (AEEE)</li>


                                        </ul>



                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Bachelor in Science (B.sc)  Entrance Exams     </b><hr>

                                        <ul>
                                            <li>&#x270D; Lucknow University Computer Science Admission Test(LUCSAT)</li>
                                            <li>&#x270D; Amrita University Entrance Test for BBA BCom BCA MSc MA Admissions</li>
                                            <li>&#x270D; JVWU Jaipur Joint National Entrance Exam</li>



                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">B. Pharmacy Entrance Exams</b><hr>

                                        <ul>
                                            <li>&#x270D; Graduate Pharmacy Aptitude Test (GPAT)</li>
                                            <li>&#x270D; Telangana State Engineering Common Entrance Test (TS ECET)</li>
                                            <li>&#x270D; Assam Combined Entrance Examination (Assam CEE)</li>
                                            <li>&#x270D; Uttarakhand Technical University organizes the Uttarakhand State Entrance Exam (UKSEE)</li>

                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text"> Bachelor of Design in Visual Communication  Entrance Exams</b><hr>

                                        <ul>
                                            <li>&#x270D; AIEED (All India Entrance Examination for Design)</li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Bachelor in Fashion Technology  Entrance Exams</b><hr>

                                        <ul>
                                            <li>&#x270D; AIEED (All India Entrance Examination for Design)</li>
                                            <li>&#x270D; Army Institute of Fashion Design (AIFD)</li>
                                            <li>&#x270D; Footwear Design & Development Institute FDDI AIST Entrance Exam(FDDI AIST)</li>
                                            <li>&#x270D; Pearl Academy of Fashion UG, PG and PG Diploma Admissions</li>
                                            <li>&#x270D; Kerala State Institute of Design Entrance Test (KSID)</li>

                                        </ul>


                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text"> The Bachelor of Design Entrance Exams</b><hr>

                                        <ul>
                                            <li>&#x270D; Arena Animation Academy Entrance Exam</li>
                                            <li>&#x270D; National School of Design Animation Entrance Exam</li>
                                            <li>&#x270D; DSK International Institute for Industrial Design, Animation and Gaming Entrance Exam</li>


                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>

    <br>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });
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