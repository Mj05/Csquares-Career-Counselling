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
$ex2score = $a[0];
$ex3score = $b[0];
$ex4score = $c[0];
$ex6score = $g[0];
$ex5score = $d[0];
$mscore = $ecom[2];
$bscore = $ecom[3];
$cscore = $ecom[4];

if($ex2score >=60 && $ex3score >=60)
{
    $stream = "Science mathematics";
}
else if($ex2score >=60 && $ex5score >=60)
{
    $stream = "Commerce";
}
else if($ex3score >=60 && $ex4score >=60)
{
    $stream = "Biology";
}
else if($ex4score >=60 && $ex5score >=60)
{
    if($mscore > $bscore && $mscore > $cscore)
    {
        $stream = "Commerce";
    }
    else if($bscore > $mscore && $bscore > $cscore)
    {
        $stream = "Biology";
    }
    else
    {
        $stream = "Commerce";
    }

}
else if($ex3score >=60 && $ex5score >=60)
{
    if($mscore > $bscore && $mscore > $cscore)
    {
        $stream = "Science mathematics";
    }
    else if($bscore > $mscore && $bscore > $cscore)
    {
        $stream = "Biology";
    }
    else
    {
        $stream = "Commerce";
    }

}
else if($ex2score >=60 && $ex4score >=60)
{
    if($mscore > $bscore && $mscore > $cscore)
    {
        $stream = "Science mathematics";
    }
    else if($bscore > $mscore && $bscore > $cscore)
    {
        $stream = "Biology";
    }
    else
    {
        $stream = "Commerce";
    }
}
else if($ex2score > $ex3score && $ex2score > $ex4score && $ex2score > $ex5score)
{
    $stream = "Science mathematics";
}
else if($ex3score > $ex2score && $ex3score > $ex4score && $ex3score > $ex5score)
{

    if($mscore > $bscore && $mscore > $cscore)
    {
        $stream = "Science mathematics";
    }
    else if($bscore > $mscore && $bscore > $cscore)
    {
        $stream = "Biology";
    }
    else
    {
        $stream = "Science mathematics";
    }
}
else if($ex4score > $ex3score && $ex4score > $ex2score && $ex4score > $ex5score)
{
    $stream = "Science mathematics";
    if($mscore > $bscore && $mscore > $cscore)
    {
        $stream = "Biology";
    }
    else if($bscore > $mscore && $bscore > $cscore)
    {
        $stream = "Biology";
    }
    else
    {
        $stream = "Biology";
    }
}

else if($ex5score > $ex2score && $ex5score > $ex3score && $ex5score > $ex4score)
{
    $stream = "Commerce";
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

$uid = $_SESSION['user_id'];
$username = $_SESSION['user_name'];
if(isset($_SESSION['user_email']))
{

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Csquare</title>
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
                    ['Excersies#2',  <?php echo $a[0]; ?>,    ],
                    ['Excersies#3',  <?php echo $b[0]; ?>,    ],
                    ['Excersies#4', <?php echo $c[0]; ?>,    ],
                    ['Excersies#5',  <?php echo $d[0]; ?>,    ]

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
        </script>


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

    <div class="container">
        <div class="row">
            <br>


            <div class="col s12 m12 #fce4ec pink lighten-5">

                <div class="center">
                    <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">Report card
                </div>
                <p class="z-depth-3 center purple-text"><b><?php echo $username; ?> According to our Application Your Stream is<h5 class="center"><u class="purple-text"><?php echo $stream; ?></u></h5></b>
                    <br>
                    <u><a href="<?php if($m == 1){ echo "#";}else {echo $stream;}   ?>.php" class="brand-logo" style=" padding-left: 450px;font-style: oblique"><b>Career Opportunities</b><sup style="font-size: 18px;font-style: oblique;font-family:cursive">click here</sup></a><b></b></u>
                </p>
            </div>

        </div>

        <div class="row #fce4ec pink lighten-5">
            <div class="col s12 m8">
                <div id="chart_div" style="width: 500px; height: 300px;"></div>
            </div>
            <div class="col s12 m4">
                <table class="stripd">
                    <caption><h5><b><u>Exercises Score</u></b></h5></caption>
                    <thead>
                    <tr>
                        <th data-field="id">Title</th>
                        <th data-field="name">Your Score</th>
                        <th data-field="price">Base Cut off</th>
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
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Exercise#3</td>
                        <td><?php echo $b[0]; ?></td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Exercise#4</td>
                        <td><?php echo $c[0]; ?></td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Exercise#5</td>
                        <td><?php echo $d[0]; ?></td>
                        <td>60</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>



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
