<?php
require_once '../php/db.php';
require_once '../php/functions.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	$_SESSION['last_url'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	header("Location: ../login.php");
}

$datas = get_user();
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SHUSTART</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/icomoon-social.css">
    <link rel="stylesheet" href="../css/leaflet.css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/icon.png" />
    <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

    <?php include_once 'menu.php'?>

    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Review</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2>Field</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/music_article_list.php">
                            <img src="../img/service-icon/music.png" alt="Service Name">
                            <h3>Music</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/art_article_list.php">
                            <img src="../img/service-icon/art.png" alt="Service Name">
                            <h3>ART</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/photograph_article_list.php">
                            <img src="../img/service-icon/photo.png" alt="Service Name">
                            <h3>Photograph</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/technology_article_list.php">
                            <img src="../img/service-icon/tech.png" alt="Service Name">
                            <h3>Technology</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/film_article_list.php">
                            <img src="../img/service-icon/film.png" alt="Service Name">
                            <h3>Film</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/publishing_article_list.php">
                            <img src="../img/service-icon/ruler.png" alt="Service Name">
                            <h3>Publishing</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/design_article_list.php">
                            <img src="../img/service-icon/design.png" alt="Service Name">
                            <h3>Design</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper">
                        <a href="discover/game_article_list.php">
                            <img src="../img/service-icon/game.png" alt="Service Name">
                            <h3>game</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br></br>

    <?php include_once 'footer.php'?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.fitvids.js"></script>
    <script src="../js/jquery.sequence-min.js"></script>
    <script src="../js/jquery.bxslider.js"></script>
    <script src="../js/main-menu.js"></script>
    <script src="../js/template.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
</body>
</html>