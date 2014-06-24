<?php 
require_once('dbconfig.php');

?>


<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie ie8 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
    <meta charset="utf-8"> 

    <title>TP - Espace Membres</title>  

    <meta name="description" content="Espace Membres"> 
    <meta name="keywords" content=""> 
    <meta name="author" content="Steve CARRASCO, Florian BERNARD, Kamel DERRAR">

    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="assets/css/main.css">  

    <!-- For retina-display iPads -->
    <!-- <link href="assets/img/icons/retina_ipad_home.png" rel="apple-touch-icon-precomposed" sizes="144x144" type="image/png"/> -->
    <!-- For retina-display iPhones -->
    <!-- <link href="assets/img/icons/iphone_home.png" rel="apple-touch-icon-precomposed" sizes="114x114" type="image/png"/> -->
    <!-- For iPad 1 -->
    <!-- <link href="assets/img/icons/ipad_home.png" rel="apple-touch-icon-precomposed" sizes="72x72" type="image/png"/> -->
    <!-- For iPhone 3G, iPod Touch and Android -->
    <!-- <link href="assets/img/icons/iphone_home.png" rel="apple-touch-icon-precomposed" type="image/png"/> -->
    <!-- For Nokia -->
    <!-- <link href="assets/img/icons/iphone_home.png" rel="shortcut icon"/> -->
    <!-- For everything else -->
    <!-- <link href="assets/img/icons/favicon.png" rel="shortcut icon" type="image/png"/> -->
    <!-- <link href="assets/img/icons/favicon.ico" rel="shortcut icon" type="image/x-icon"/> -->   

    <!-- IE8 and below fallbacks -->
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="assets/js/libs/respond/respond.min.js"></script>
    <![endif]-->

</head>

<body id="sitename">

    <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header class="wrapper-header" role="banner">

    </header><!-- .wrapper-header -->

    <main class="wrapper-primary" role="main">  

        
        <div class="grid">
           <div class="col-1"> 
             <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="grid">
                            <div class="col-1">
                                 <h1 class="title-primary">Espace Membres</h1>
                                 
                            </div>
                             <?php
                             require_once('form.html');
                              ?>
                        </div>
                        <p><small>&copy; 2014 Copyright Steve CARRASCO, Florian BERNARD, kamel DERRAR - IP FORMATION</small></p>
                        </div>
                   </div>
                 </div>
                </div>
            </div>
        </main><!-- .wrapper-primary -->
    <footer class="wrapper-footer" role="contentinfo">
    </footer><!-- .wrapper-footer --> 

    <!-- JavaScript -->
    <script src="src/public/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="src/public/assets/jquery/dist/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/libs/jquery.min.js"><\/script>')</script>
    <script src="assets/js/main.min.js"></script>
    
    <script src="http://localhost:35729/livereload.js"></script> 
    

    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/libs/selectivizr/selectivizr.js"></script>
    <![endif]-->

    <!-- Google Analytics -->
    <!-- <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script> -->

</body>
</html>
