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
            <h4 class="center"><b class="">About</b><b class="brand-logo" style=" padding-left: 10px;font-style: oblique">Science Biology</b><sup style="font-size: 20px;font-style: oblique;font-family:cursive">Stream</sup></h4>

            <br>
            <div class="progress">
                <div class="determinate" style="width: 100%"></div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="fonts/banner.png">

                </div>
                <div class="card-content">
                    <p>According to now-a-days market trend professionals with science background are always on high demand not only in home but also in abroad.
                        The “Medical field” is one of the best, reputed and respected professional fields in India and abroad.
                        When we talk about Medical, an image of an MBBS rises in our mind.it is not the only course of medical field .
                        Medical field contains a broad range of academic education other than MBBS. It contains the certificate courses, medical diploma courses, bachelor degree courses, master degree courses and many short time knowledge booster courses for medical professionals.</p>
                </div>

            </div>


        </div>


        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        <h5 class="center"><b class="purple-text">About Science Biology Courses</b></h5><hr>

                        <div class="row">
                            <ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Medicine and Bachelor of Surgery (MBBS)</div>
                                    <div class="collapsible-body"><span>MBBS stands for Bachelor of Medicine and Bachelor of Surgery. The naming suggests that they are
                                            two separate degrees; however, in practice, they are usually treated as one and awarded together. Professionals holding MBBS
                                            degrees are referred to by the courtesy title of "Doctor" and use the prefix "Dr".
                                    The basic or degree level qualification for a medical profession is MBBS (Bachelor of Medicine And Bachelor of Surgery) which is of 5 1/2
                                            years duration (including 1 year internship). Selection for MBBS is through an All India Entrance Examination. The qualification
                                            required for entrance is 10+2 or equivalent with Science subjects. In the case of private medical colleges entrance examinations
                                            are conducted by the institutes individually.</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Dental Surgery (BDS)</div>
                                    <div class="collapsible-body"><span>BDS stands for Bachelor of Dental Surgery. In India BDS degree is awarded at the successful
                                            completion of four years of study and one year of internship to the students as per the old regulations of Dental council
                                            of India. According to new regulations, the BDS course comprises of five years with no internship period.
                                            Post graduate courses (Master of Dental Surgery. MDS) are also available in different specialties. It requires 3 years of
                                            study after BDS.</span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Homeopathic Medicine & Surgery (BHMS)</div>
                                    <div class="collapsible-body"><span>BHMS (Bachelor of Homeopathic Medicine and Surgery) is an undergraduate degree programme in medical field.
                                            This degree covers the medical knowledge of the homeopathic system. After completing this degree you are eligible to become a doctor in
                                            the homeopathic medical field.
                                            The degree holder is eligible to have the prefix as a doctor, the abbreviation is Dr.</span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Ayurvedic Medicine and Surgery (BAMS)</div>
                                    <div class="collapsible-body"><span>Bachelor of Ayurvedic Medicine and Surgery (BAMS)is an integrated Indian Degree in the medical field.
                                            This degree programme is conferred to those students who studied the modern medicines and traditional Ayurveda.
                                        Bachelor of Ayurvedic Medicine & Surgery (BAMS) is a graduate degree course in Ayurvedic system.
                                            This degree is awarded after the completion of 5 years and 6 month degree programme
                                            containing the4 and 1/2 year academic session and one year internship programme with live practical.
                             </span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>B.Sc Nursing</div>
                                    <div class="collapsible-body"><span>B. Sc. Nursing is a four year degree program which follows the syllabus prescribed by the Indian Nursing Council.
                                        As the word stands for, Nursing refers to caring the people. It is considered to be one of the noblest profession in the service industry.
                                       The aim of this program is to prepare graduates to assume responsibilities as professional, competent nurses and midwives in providing promotive,
                                            preventive, curative and rehabilitative services, who can make independent decisions in nursing situations, protect the rights of individuals
                                            in pursuit of health.</span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Pharmacy (B.Pharm)</div>
                                    <div class="collapsible-body"><span>B.Pharm is an under graduate degree awarded for the completion of a 3 year program in the area of Pharmacy.
                                            B.Pharm is a shortened form of Bachelor of Pharmacy.
                                            Pharmacy Council of India is the controlling authority of the Indian Pharmacy education.
                                            One of the main tasks of a pharmacist is to prescribe medications to patients. It is evident from this very fact that the course of B Pharm
                                            focuses on the study of biology, pharmaceutical
                                            chemistry (inorganic, physical and organic), biochemistry, medicines, physiology, pharmacology, dispensing etc.</span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i> Biotechnology</div>
                                    <div class="collapsible-body"><span>Biotechnology is the use of biological processes, organisms, or systems to manufacture products intended to
                                            improve the quality of human life. The earliest biotechnologists were farmers who developed improved species of plants and animals by
                                            cross pollenization or cross breeding. In recent years, biotechnology has expanded in
                                            sophistication, scope, and applicability.</span></div>
                                </li>

                                <li>
                                    <div class="collapsible-header"><i class="material-icons">view_module</i>Bachelor of Medical Lab Technicians (BMLT)</div>
                                    <div class="collapsible-body"><span>Bachelor in Medical Laboratory Technology  is a three year graduate programe. is one of the largest and important
                                            wings in modern healthcare Sector. With the advancement of medical science, the requirements of skilled persons / employees are increasing sharply.
                                            For accurate diagnosis of a disease doctors need the help of the medical laboratories. Hence the role of the BMLT can’t be denied indiagnosis,
                                            treatment and prevention of disease. </span></div>
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
                   <p class="center"><b class="purple-text">Medical Entrance Exams</b><hr>

                 <ul>
                       <li>&#x270D; All India Institute of Medical Sciences (AIIMS)</li>
                       <li>&#x270D; All India Pre-Medical/ Pre-Dental Entrance Test (AIPMT)</li>
                       <li>&#x270D; All India Pre-Veterinary Test (AIPVT)</li>
                       <li>&#x270D; Armed Forces Medical College Entrance Exam (AFMC)</li>
                       <li>&#x270D; Banaras Hindu University Pre Medical Test (BHUPMT)</li>
                       <li>&#x270D; Vinayaka Missions University All India Common Entrance Examination (VMU AICEE)</li>
                       <li>&#x270D; Karnataka Common Entrance Test (KCET 2017)</li>
                       <li>&#x270D; Maharashtra Common Entrance Test (MHT CET 2017)</li>
                       <li>&#x270D; Consortium of Medical, Engineering and Dental Colleges of Karnataka (COMEDK 2017)</li>
                       <li>&#x270D; Delhi University Medical / Dental Entrance Test (DUMET)
                       </li>


                </ul>



               </div>

           </div>
       </div>
                <div class="row">
                    <div class="card z-depth-3">

                        <div class="card-content">
                            <p class="center"><b class="purple-text">B.sc Nursing Entrance Exams</b><hr>

                            <ul>
                                <li>&#x270D; AIIMS Bsc Nursing Enterance exam</li>
                                <li>&#x270D; GITAM University BSc Nursing Admission</li>
                                <li>&#x270D; NIMHANS Bangalore BSc Nursing, MSc Nursing Admission</li>




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
                            <p class="center"><b class="purple-text">Biotechnology Entrance Exams</b><hr>

                            <ul>
                                <li>&#x270D; AIIMS Biotechnology Entrance Exam</li>
                                <li>&#x270D; Alagappa University M.Sc Biotechnology Entrance Exam</li>
                                <li>&#x270D; All India Biotechnology Entrance Examination</li>
                                <li>&#x270D; All India Institute of Medical Sciences Biotechnology Entrance Examination</li>
                                <li>&#x270D; Amity Institute of Biotechnology Entrance Examination</li>
                                <li>&#x270D; Anna University Biotechnology Entrance Examination</li>
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