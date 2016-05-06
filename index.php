<?php
    session_start();
    if(isset($_SESSION['mail'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Xeon | OnePage Responsive Theme</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="carga_index" class="navbar-brand" href="#home"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li id="carga_services"><a href="#services">Services</a></li>
                        <li id="carga_portfolio"><a href="#portfolio">Portfolio</a></li>
                        <!-- <li><a href="#pricing">Pricing</a></li> -->
                        <li id="carga_aboutus"><a href="#about-us">About Us</a></li>
                        <li id="carga_verperfil"><a href="#verperfil">Perfil</a></li>
                        <li><a href="login.php"><i class="icon-signout icon-large"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Free Onepage Theme</h1>
                        <p class="lead">Xeon is the best free onepage responsive theme available arround the globe<br>Download it right now for free</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>ShapeBootstrap.net</h1>
                        <p class="lead">Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>from shapebootstrap.net</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="carga_contenido" class="margen">
      
    </section><!--/#carga_contenido-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contenido_web.js"></script>
</body>
</html>
<?php
    }else{
        header("Location: login.php");
        die();
    }
?>