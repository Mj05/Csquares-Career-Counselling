<?php
include 'career_controller.php';
$obj = new controller();
$uid = $_GET['uid'];
$a =  $obj->scorecard($uid,1);
$b = $obj->scorecard($uid,2);
$c =  $obj->scorecard($uid,3);
$d = $obj->scorecard($uid,4);
$g = $obj->scorecard($uid,6);
$ecom = $obj->usercommonexercisescore($uid);
$final = $obj->finalstepresponse($uid);
$foccup = $final[2];
$moccup = $final[3];
$bsback = $final[4];
$role = $final[5];
$ex2score = $a[0];
$ex3score = $b[0];
$ex4score = $c[0];
$ex6score = $g[0];
$ex5score = $d[0];
$mscore = $ecom[2];
$bscore = $ecom[3];
$cscore = $ecom[4];

//level decider

if($ex2score >= 80 )
{
    $level2 = "Excellent";
}
else if( $ex2score >= 50)
{
    $level2 = "Good";
}
else
{
    $level2 = "Not Good";
}


if($ex3score >= 80 )
{
    $level3 = "Excellent";
}
else if( $ex3score >= 50)
{
    $level3 = "Good";
}
else
{
    $level3 = "Not Good";
}

if($ex4score >= 80 )
{
    $level4 = "Excellent";
}
else if( $ex4score >= 50)
{
    $level4 = "Good";
}
else
{
    $level4 = "Not Good";
}

if($ex5score >= 80 )
{
    $level5 = "Excellent";
}
else if( $ex5score >= 50)
{
    $level5 = "Good";
}
else
{
    $level5 = "Not Good";
}

if($ex6score >= 80 )
{
    $level6 = "Excellent";
}
else if( $ex6score >= 50)
{
    $level6 = "Good";
}
else
{
    $level6 = "Not Good";
}






//weight calculation start

$mwt = 0;
$bwt = 0;
$cwt = 0;
$awt = 0;

$mwt = $mwt + ($mscore *50/100);
$bwt = $bwt + ($bscore *50/100);
$cwt = $cwt + ($cscore *50/100);

$mwt = $mwt + ($ex2score *40/100);
$cwt = $cwt + ($ex2score *40/100);

$mwt = $mwt + ($ex3score *40/100);
$bwt = $bwt + ($ex3score *40/100);

$bwt = $bwt + ($ex4score *40/100);

$awt = $awt + ($ex6score *40/100);

$cwt = $cwt + ($ex5score *40/100);


if($foccup == "Doctor")
{
    $bwt = $bwt + ($bwt * 5/100);

}
elseif ($foccup == "Businessman")
{
    $cwt = $cwt + ($cwt * 5/100);
}
elseif ($foccup == "Engineer")
{
    $mwt = $mwt + ($mwt * 5/100);
}
elseif($foccup == "Charted accountant(CA)")
{
    $cwt = $cwt + ($cwt * 5/100);
}
elseif($foccup == "Other")
{
    $awt = $awt + ($awt * 5/100);
}
else
{

}



if($moccup == "Doctor")
{
    $bwt = $bwt + ($bwt * 5/100);
}
elseif ($moccup == "Business women")
{
    $cwt = $cwt + ($cwt * 5/100);
}
elseif ($moccup == "Engineer")
{
    $mwt = $mwt + ($mwt * 5/100);
}
elseif ($moccup == "Charted accountant(CA)")
{
    $cwt = $cwt + ($cwt * 5/100);
}
elseif ($moccup == "Other")
{
    $awt = $awt + ($awt * 5/100);
}
elseif ($moccup == "House Wife")
{
    $awt = $awt + ($awt * 5/100);
    $cwt = $cwt + ($cwt * 5/100);
    $bwt = $bwt + ($bwt * 5/100);
    $mwt = $mwt + ($mwt * 5/100);
}
else
{

}

if($bsback == "Science-Biology")
{
    $bwt = $bwt + ($bwt * 5/100);
}
elseif ($bsback == "Science-Maths")
{
    $mwt = $mwt + ($mwt * 5/100);
}
elseif ($bsback == "Commerce")
{
    $cwt = $cwt + ($cwt * 5/100);
}
elseif ($bsback == "Arts")
{
    $awt = $awt + ($awt * 5/100);
}
elseif ($bsback == "N/A")
{
    $awt = $awt + ($awt * 5/100);
    $awt = $awt + ($awt * 5/100);
    $cwt = $cwt + ($cwt * 5/100);
    $bwt = $bwt + ($bwt * 5/100);
}
else
{

}

if($role == "Dr.APJ Abdul kalam")
{
    $mwt = $mwt + ($mwt * 5/100);
}
elseif ($role = "Mr.Mukesh Ambani")
{
    $cwt = $cwt + ($cwt * 5/100);
}
elseif ($role = "Mr. Nrendra Modi")
{
    $awt = $awt + ($awt * 5/100);
}

elseif ($role = "Mrs. Kiran Bedi")
{
    $awt = $awt + ($awt * 5/100);
}
else
{

}



if($mwt > $bwt && $mwt > $cwt && $mwt > $awt)
{
    $stream = "Science mathematics";
}
else if($bwt > $mwt && $bwt > $cwt && $bwt > $awt)
{
    $stream = "Biology";
}
else if($cwt > $mwt && $cwt > $bwt && $cwt > $awt)
{
    $stream = "Commerce";
}
else
{
    $stream = "Arts";
}


$esrength = ($mwt + $cwt)/2;
$astrength = $cwt;
$cstrength = ($cwt + $mwt + $bwt)/3;

$eper = intval (($esrength +30));
$aper = intval (($astrength +30));
$cper =intval  (($cstrength +30));





/*

if(1)
{

}
else
{
    $m = 1;
   # echo '<script language="javascript">';
   # echo 'alert("Its Difficult to Suggest You Any Stream Please Once More go through our exercises for Effective result")';
   # echo '</script>';
    //header("location: testnow.php");
    $stream = "Difficult to Identify Please Go Through Exercises Once More "."<a href='testnow.php'>Click Here</a> ";

}
*/

$uid = $_SESSION['user_id'];
$username = $_SESSION['user_name'];
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


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);


        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Excersies', 'Score', ],
                ['Ex#2',  <?php echo $a[0]; ?>,    ],
                ['Ex#3',  <?php echo $b[0]; ?>,    ],
                ['Ex#4', <?php echo  $c[0]; ?>,    ],
                ['Ex#5',  <?php echo $d[0]; ?>,    ],
                ['Ex#6',  <?php echo $g[0]; ?>,    ]

            ]);

            var options = {
                title : 'Complete Report',
                vAxis: {title: 'Score'},
                hAxis: {title: 'Execersies'},
                seriesType: 'bars',
                series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }



        google.charts.load('current', {'packages':['gauge']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Memory', 80],
                ['CPU', 55],
                ['Network', 68]
            ]);

            var options = {
                width: 400, height: 120,
                redFrom: 90, redTo: 100,
                yellowFrom:75, yellowTo: 90,
                minorTicks: 5
            };

            var chart = new google.visualization.Gauge(document.getElementById('chart1_div'));

            chart.draw(data, options);

            setInterval(function() {
                data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
                chart.draw(data, options);
            }, 13000);
            setInterval(function() {
                data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
                chart.draw(data, options);
            }, 5000);
            setInterval(function() {
                data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
                chart.draw(data, options);
            }, 26000);
        }




        $(window).resize(function(){
            drawVisualization();

        });
    </script>
<style>
    .chart {
        width: 100%;
        min-height: 450px;
    }
</style>

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

<div class="container-fluid">
    <div class="row">
        <br>
<div class="col s3 m2">

    <img src="fonts/winer1.jpg" class="responsive-img">

</div>
        <div class="col s6 m8">
            <br>
            <br>
            <br>



                <h5 class="center purple-text"><b><?php echo $username; ?> The Best Stream For You in Class 11th is<h4 class="center"><u class="purple-text"><i class="material-icons">grade</i> <?php echo $stream; ?> <i class="material-icons">grade</i></u></h4></b>
                    <br>
            </h5>
        </div>
        <div class="col s3 m2">
            <img src="fonts/winer1.jpg" class="responsive-img">

        </div>

        </div>
</div>
<hr>
<div class="container">
    <div class="row">


        <div class="col s12 m8">

            <div id="chart_div"  class="chart"></div>
            </div>
        <div class="col s12 m4">
            <table class="stripd">
                <caption><h5><b><u>Exercises Score</u></b></h5></caption>
                <thead>
                <tr>
                    <th data-field="id">Title</th>
                    <th data-field="name">Your Score</th>
                    <th data-field="name">Level</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Exercise#1</td>
                    <td>Hidden</td>
                    <td>Hidden</td>
                </tr>
                <tr>
                    <td>Exercise#2</td>
                    <td><?php echo $a[0]; ?></td>
                    <td><?php echo $level2; ?></td>

                </tr>
                <tr>
                    <td>Exercise#3</td>
                    <td><?php echo $b[0]; ?></td>
                    <td><?php echo $level3; ?></td>

                </tr>
                <tr>
                    <td>Exercise#4</td>
                    <td><?php echo $c[0]; ?></td>
                    <td><?php echo $level4; ?></td>

                </tr>
                <tr>
                    <td>Exercise#5</td>
                    <td><?php echo $g[0]; ?></td>
                    <td><?php echo $level6; ?></td>

                </tr>
                <tr>
                    <td>Exercise#6</td>
                    <td><?php echo $d[0]; ?></td>
                    <td><?php echo $level5; ?></td>

                </tr>
                </tbody>
            </table>
        </div>
        </div>
<br>



</div>
<hr>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m4">
            <div class="col s12">

                <div class="card horizontal z-depth-3">
                    <div class="card-image">
                        <img src="fonts/strength1.png" class="responsive-img">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5><b>Enterprising Strength:</b></h5>
                            <p><h2><?php echo $eper; ?>%</h2></p>
                        </div>


                    </div>
                </div>
            </div>
            </div>

        <div class="col s12 m4">
            <div class="col s12">

                <div class="card horizontal z-depth-3">
                    <div class="card-image">
                        <img src="fonts/strength1.png" class="responsive-img">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5><b>Analytical Strength:</b></h5>
                            <p><h2><?php echo $aper; ?>%</h2></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="col s12">

                <div class="card horizontal z-depth-3">
                    <div class="card-image">
                        <img src="fonts/strength1.png" class="responsive-img">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5><b>Conventional Strength:</b></h5>
                            <p><h2><?php echo $cper; ?>%</h2></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="row center">
    <a href="<?php if($m == 1){ echo "#";}else {echo $stream;}   ?>.php" ><h5><b><u>Career Opportunities <i class="material-icons">games</i></u></b></h5>  </a>
</div>
</div>







<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    });
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
