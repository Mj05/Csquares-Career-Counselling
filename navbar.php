<html>
<head>
    <title></title>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link href="https://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<div data-role="page" id="home">
    <div data-role="header">
        <nav class="#ba68c8 purple lighten-2">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo" style=" padding-left: 150px;font-style: oblique">C<sup style="font-size: 20px;font-style: oblique;font-family:cursive">Square</sup></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Home</a></li>
                    <li><a href="badges.html">About Us</a></li>
                    <li><a href="collapsible.html">Contact Us</a></li>

                    <li>
                    <button onclick="window.location.href='logout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>

                    <li>
                    <button onclick="window.location.href='logout.php'" class="btn waves-effect waves-light #ba68c8 purple lighten-2" type="submit" name="action">logout</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /header -->

    <div role="main" class="ui-content">

    </div>
    <!-- /content -->
</div>
<!-- /page -->
</body>
<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    });
</script>
</html>