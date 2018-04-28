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
                </li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="testnow.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>

                <li>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m1">
            </div>
            <div class="col s12 m5">
                <br>
                <br>
            <form class="col s12" action="action.php" method="post">

                <div class="row">
                    <img class="responsive-img" src="fonts/contact1.jpg">
                    <div class="input-field col s12">
                        <input name="user_name" id="name" type="text" class="validate" required>
                        <label for="name">Full Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="user_email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">

                    <div class="input-field col s12">
                        <input name="subject" id="name" type="text" class="validate" required>
                        <label for="name">Subject</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="description" id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Description</label>
                    </div>
                </div>
                <input name="contact" id="contact" type="hidden" value="contact" class="validate">
                <button class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">Send
                    <i class="material-icons right">send</i>
                </button>
            </form>
            </div>
            <div class="col s12 m1">
                </div>
          <div class="col s12 m5">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br> <br>

         <blockquote>
        <h5 class="purple-text">
                 <b><u><i class="material-icons">work</i> Development Office</u></b>
        </h5>
             <h6>Kamala Bhavan Oppossite Water Works ,<br> Pur Road Pratap Nagar,<br> Bhilwara , Rajasthan , India <br>PIN-311001 </h6>
    </blockquote>
              <br>
              <blockquote>
                  <h5 class="purple-text">
                     <b><u><i class="material-icons">contacts</i> Contact</u></b>
                  </h5>
                  <h6> <i class="material-icons">call</i> Phone : +91-7728045249 <br>
                       <i class="material-icons">email</i> Email : jangid.mukesh990@gmail.com<br>
                      </h6>
              </blockquote>
</div>
            </div>
    </div>
    <br>
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
    </body>
    </html>
