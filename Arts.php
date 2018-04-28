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
        <h4 class="center"><b class="">About</b><b class="brand-logo" style=" padding-left: 10px;font-style: oblique">Arts</b><sup style="font-size: 20px;font-style: oblique;font-family:cursive">Stream</sup></h4>

        <br>
        <div class="progress">
            <div class="determinate" style="width: 100%"></div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="fonts/banner.png">

            </div>
            <div class="card-content">
                <p>Arts stream involves the study of subjects like Literature, Languages, Geography, Political science, History etc.
                    Best Career Options in Arts- Chakreview.comCareer options and opportunities in Arts stream are endless.
                    For students who wish to pursue a career in this stream must be creative and should possess the basic knowledge of the field.
                    The stream of arts has many doors for those who wish to pursue it. But pursue it for the love and knowledge of art.  Rest all will soon fall into place.
                    As mentioned before, arts stream is very diverse. This fact is evident from the studies involved in this stream.
                    It covers wide variety of studies such as- visual arts (painting, sculpting, drawing etc), performing arts (music, dance, drama etc),
                    literary arts (languages, literature, philosophy etc), history, law, humanities subjects, geography, political science etc.</p>
            </div>

        </div>


    </div>


    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <h5 class="center"><b class="purple-text">About Arts Courses</b></h5><hr>

                    <div class="row">
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Arts(BA)</div>
                                <div class="collapsible-body"><span> B.A. stands for Bachelor of Arts. Course duration is 3 years. The best thing about this
                                        course is that so many B.A. specialization courses are available to choose from. A general set of common B.A. subjects are present,
                                        in addition to which specialization subjects are also present.<br>BA in Hindi<br>
                                        BA in Humanities<br>
                                        BA in Finance<br>
                                        BA in Foreign Languages (example- French)<br>
                                        BA in Regional Languages (example- Malayalam)<br>
                                        BA in Journalism and Mass Communication<br>
                                        BA in Literature<br>
                                        BA in Philosophy<br>
                                        BA in Music<br>
                                        BA in Theatre<br>
                                        BA in Yoga and Naturopathy<br>
                                        BA in Tourism and Hospitality Management<br>
                                        BA in Library Science<br>
                                        BA in Applied Science<br>
                                        BA in Advertising<br>
                                        BA in Fine Arts<br>
                                        BA in Mathematics<br>
                                        BA in Retail Management<br>
                                        BA in Fashion Merchandising<br>
                                        BA in Culinary Sciences<br>
                                        BA in Anthropology<br>
                                        BA in Home Science<br>
                                        BA in Hotel Management<br>
                                        BA in Computer Applications<br>
                                        BA in Finance and Insurance<br>
                                        BA in Interior Designing<br>
                                        BA in Psychology<br>
                                        BA in Economics<br>
                                        BA in Animation and Multimedia,etc.</span>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Fine Arts(B.F.A.)</div>
                                <div class="collapsible-body"><span>Just like B.A., this professional course is also 3 years long course.
                                Talking about the syllabus, B.F.A. is all about study of visual forms of arts. For example, some of the areas of specialization within this
                                        course (and thus subjects) are- Painting, Sculpting, Music, Dance, Photography etc. According to me,
                                        this course suits students who are into the creative side of things.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Journalism and Mass Communication(B.J.M)</div>
                                <div class="collapsible-body"><span>This one is a job oriented and ‘in demand’ course. The Media sector is going through
                                        a phase of immense growth! Not only traditional forms of Media like print and TV, online media is also something that is catching up.
                                        When it comes to Mass Communication, there are different types of courses available, like Degree, Diploma as well as Certificate courses. Degree course lasts 3 years.
                                        The duration of Diploma and Certificate courses ranges between 1-2 years.
                                        It is one of the highest paying career options in the field of arts. The salary is entirely dependent on the organization and the post.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of computer application(BCA)</div>
                                <div class="collapsible-body"><span>BCA Stands for the Bachelor in Computer Application.BCA is 3 year graduation degree
                                        course generally for those students who wants to learn Computer languages and after that who wants to join Software http://companies.In Today time every
                                        course have its own importance.BCA have also there own.Some students who were not able to take 4 year BTech graduation degree course in Computer
                                        Science branch,they join the BCA course.
                             </span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of business administration(BBA)</div>
                                <div class="collapsible-body"><span>Bachelor in Business Management/Administration-->
                                        Majority of BBA colleges in India offer this bachelor's degree program in the form of a three-year course. However, there are four-year part time courses as well. A student is eligible
                                        to study Bachelor of Business Administration in India only if he has passed the 10+2 level examination or higher secondary
                                        examination from a recognized board or council in the country. A BBA degree can be portrayed as the gateway to the global business sector.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Laws(LLB)</div>
                                <div class="collapsible-body"><span>“Law” is the basic part of our constitution. The law education is the only legal education in India.
                                The student who passed this degree, designated as the “Lawyer” and that have to be done before the entry in the court activities and practice.
                                The education of law in India has been offered by the various universities and in various academic levels.
                                B.A. L.L.B: This is a 5-year course and the students can pursue this course after passing Class 12.
                                L.L.B: This is a 3-year course, open for graduates.
                                L.L.M: This is a postgraduate course in Law. The duration of the course is 2year. Students can pursue this course after completing B.A. L.L.B. or L.L.B.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor in Fashion Technology</div>
                                <div class="collapsible-body"><span>It is a 4 years long residential program. This period of 4 years is divided into 8 semesters. Apart from theoretical knowledge,
                                        adequate importance is given to practical knowledge, internship program, field trips, projects etc.
                                        The aim of this program is to make students familiar with the latest techniques, instruments, technology etc used in the fashion industry. The field of textiles,
                                        garments and clothing has evolved really fast and has become what the fashion industry is today. BFT program trains students so that
                                        they become well equipped, in terms of technology and methods used today in the fashion industry.</span></div>
                            </li>

                            <li>
                                <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Interior Designing</div>
                                <div class="collapsible-body"><span>As the construction industry has been growing by leaps bounds, there has been an infinite scope for interior designers.
                                        In the present scenario, with varied preferences of people, interior designing has come up with challenging and promising career opportunities.
                                        Interior designing involves creativity, imaginative and artistic skills to decorate an interior space according to client requirements and given theme. Interior Designers provide
                                        designing solutions so as to best utilize the space and giving it an attractive look. So the person has to be very creative, imaginative,
                                        disciplined and  able to communicate as well as understand client needs clearly. </span></div>
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
                                        <p class="center"><b class="purple-text">BFA Entrance Exams</b><hr>

                                        <ul>
                                            <li>&#x270D; Banaras Hindu University</li>
                                            <li>&#x270D; Delhi University entrance exam</li>
                                            <li>&#x270D; Delhi University</li>
                                            <li>&#x270D; JNAFAU Entrance Exam</li>
                                            <li>&#x270D; Jawaharlal Nehru Architecture and Fine Arts University</li>
                                       </ul>



                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Bachelor of JOURNALISM AND MASS COMMUNICATION Exams</b><hr>

                                        <ul>


                                            <li>&#x270D; Indraprastha University Common Entrance Test</li>
                                            <li>&#x270D; Xavier Institute of Communications Entrance Exam</li>
                                            <li>&#x270D; Asian College of Journalism Entrance Exam</li>
                                            <li>&#x270D; Indian Institute of Mass Communication Entrance Exam</li>
                                            <li>&#x270D; International School of Business and Media Entrance Exam</li>
                                            <li>&#x270D; Jamia Milia Islamia Entrance Exam</li>
                                            <li>&#x270D; Symbiosis institute of Mass Communication</li>


                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Bachelor in Business Administration (BBA) Entrance Exams</b><hr>

                                        <ul>


                                            <li>&#x270D; Pune University BBA / BBM CET</li>
                                            <li>&#x270D; Conducted by Guru Gobind Singh Indraprastha University, Delhi, GGSIPU CET is a common entrance test for BBA</li>
                                            <li>&#x270D; AIMA-UGAT:- All India Management Association BBA Entrance Examination</li>
                                            <li>&#x270D; Symbiosis Entrance Test:- Symbiosis Entrance Test (SET)</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Bachelor of Computer Application (BCA) Entrance Exams<br>
                                                Admission to a regular BCA program is generally through a common entrance test conducted by the respective universities.</b><hr>

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
                                        <p class="center"><b class="purple-text">LAW Entrance Exams</b><hr>


                                        <ul>


                                            <li>&#x270D; Common Law Admission Test (CLAT)</li>
                                            <li>&#x270D; All India Law Entrance Test (AILET)</li>
                                            <li>&#x270D; Law School Admission Test  (LSAT)</li>
                                            <li>&#x270D; AIL Entrance Test (Army Institute of Law B.A. LL.B Entrance Test)</li>
                                            <li>&#x270D; AIBE (All India Bar Exam)</li>

                                        </ul>


                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="card z-depth-3">

                                    <div class="card-content">
                                        <p class="center"><b class="purple-text">Bachelor of Interior Designing Entrance Exams</b><hr>


                                        <ul>


                                            <li>&#x270D; Common Entrance Examination for Design (CEED) is an countrywide examination conducted by the Indian Institute of Technology</li>
                                            <li>&#x270D; GATE qualified candidates for IIT’s</li>
                                            <li>&#x270D; National Council for Interior Design Qualification exam</li>
                                            <li>&#x270D; National Level Entrance Aptitude Test (NLAT) conducted by the Institute</li>
                                            <li>&#x270D; National Entrance Examination for Design (NEED)</li>
                                            <li>&#x270D; NID Entrance Test</li>
                                            <li>&#x270D; NIFT Entrance Exam</li>
                                            <li>&#x270D; School of Fashion Technology (SOFT) Entrance Exam</li>


                                        </ul>


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