<?php

include 'databaseAdapter.php';

try {
    $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(Exception $e){
    die(var_dump($e));
}

print_r( $_POST );

if(!empty($_POST)) { 
    try {
        $email = $_POST['EMAIL'];
        $date = date("Y-m-d");

        $sql_insert = "INSERT INTO remora_newsletter (email, date) 
                   VALUES (?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $date);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>remora - responsive landing page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Twitter bootstrap theme">
    <meta name="author" content="prettystrap">

    <!-- Le styles -->
    <link href="assets/css/style.css" rel="stylesheet"> 

    <!--Import Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav  -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    if (typeof jQuery == 'undefined') {
      document.write(unescape("%3Cscript src='assets/js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>


    <!--Has to be in head, to lazy load images.
    Minimize in production. -->

    <script src="assets/js/lazyload.js"></script>
    <script src="assets/js/jRespond.js"></script>
    <script src="assets/js/spin.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Main js fail. -->
    <script src="assets/js/main.js"></script>

  </head>

  <body id="top" data-spy="scroll" data-target=".navbar">

       <!-- Brand and Navigation -->
      <header class="navbar navbar-fixed-top">
        <div class="inner-page">
          <h1 class="logo">remora</h1>
          <a class="btn-nav" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon-reorder"></i>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav navigation" id="menu">
              <li class="active"><a title="Home page" class="scroll brand-1" href="#home">Home</a></li>
              <li><a title="Check out our awesome services" href="#features" class=" scroll brand-4">Service</a></li>
              <li><a title="Who we are" href="#team" class="scroll fadeto brand-4"> Team</a></li>
              <li><a title="Get in touch!" href="#contact" class="scroll brand-2">Contact</a></li>
            </ul>
          </div> 
        </div> 
      </header>
      
      <!-- Home Page -->
      <div id="home" class="page color-1">
        <div class="inner-page">
          <h2 class="page-headline large"><strong>Thank for you interest!</strong></h2>
        </div>  
      </div>

      
      <!-- Features -->
      <div id="features" class="page color-4">
        <div class="inner-page">
          <h2 class="page-headline">One more thing...</h2>
        </div>
      </div>

        <hr>

        <!-- Team -->
        <div id="team" class="row-fluid inner-page team">
          <h2 class="page-headline">remora was founded out of our own desire for a more flexible workspace</h2>
          <div class="span6">
            <img class="pull-left" src="assets/img/andrew.jpg" alt="Andrew" />
            <h4>Andrew Berezovskiy</h4>
            <p>Kiev, Ukraine</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="andrew@remora.eu">andrew@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/hendrik.jpg" alt="Hendrik" />
            <h4>Hendrik Heuer</h4>
            <p>Bremen, Germany</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="hendrik@remora.eu">hendrik@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6">
            <img class="pull-left" src="assets/img/irene.jpg" alt="Irene" />
            <h4>Irene Kolomvrezou</h4>
            <p>Athens, Greece</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="irene@remora.eu">irene@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6 team2">
            <img class="pull-left" src="assets/img/simon.jpg" alt="Simon" />
            <h4>Simon Kreiser</h4>
            <p>Cologne, Germany</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="simon@remora.eu">simon@remora.eu</a></li>
            </ul>
          </div>
          <div class="span6">
            <img class="pull-left" src="assets/img/shaun.jpg" alt="Shaun" />
            <h4>Shaun Mulligan</h4>
            <p>Cape Town, South Africa</p>
            <ul>
              <li><i class="icon-envelope-alt"></i> <a href="shaun@remora.eu">shaun@remora.eu</a></li>
            </ul>
          </div>
        </div>
      </div>


      <!-- Contact Us -->
      <div id="contact" class="page color-1">
        <div class="inner-page">
          <h2 class="page-headline">Get in touch and stay updated</h2>
        </div>
        <div class="row-fluid inner-page contact">
          <div class="span6">
            <h3>What's on your mind?</h3>
            <textarea rows="6" placeholder="Your story"></textarea>
            <input type="text" placeholder="your@e-mail.com"><br />
            <input type="text" placeholder="Name"><br />
            <button class="btn btn-centered">Contact us</button>
          </div>
          <div class="span6">
            <div class="btn-container centered lazy-container text-center">
              <img src="assets/img/pixel.png" class="lazy figurette" alt="Open the map"   data-original="assets/img/map.png"/>
              <a class="lightbox iframe  btn-map" target="blank" title="Open google maps" href="https://www.google.com/maps/place/Royal+Institute+of+Technology/@59.2842991,18.0389002,11z/data=!3m1!4b1!4m2!3m1!1s0x0:0xb1366ae00b879b4a"><i class="pull-left icon-map-marker"></i><div>Valhallavägen 79,<br />100 44 Stockholm,<br />Sweden</div></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="newsletter color-2">
        <div class="inner-page row-fluid">
          <div class="span4">
            <h4><strong>Get in touch!</strong> Sign up and we'll keep you updated</h4>
          </div>
          <form action="signup.php" method="post">
            <div class="span6">
              <input type="email" placeholder="your@e-mail.com" name="EMAIL" class="subscribe">
            </div>
            <div class="span2">
              <button type="submit"  class="btn pull-right subscribe">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <!-- The footer, social media icons, and copyright -->        
      <footer class="page color-5">
        <div class="inner-page row-fluid">
          <div class="span6 social">
            <a href="#contact"><i class="icon-twitter"></i></a>
            <a href="#contact"><i class="icon-facebook-sign"></i></a>
            <a href="#contact"><i class="icon-google-plus-sign"></i></a>
          </div>
          <div class="span6 text-right copyright">
            &copy; 2014 <a href="http://remora.eu">remora.eu</a> | all rights reserved |  <a href="#top"   title="Got to top" class="scroll">To top <i class="icon-caret-up"></i></a>
          </div>
        </div>
      </footer>

  </body>
</html>
