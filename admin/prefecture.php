<?php
require_once '../php/db.php';
require_once '../php/functions.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
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
                    <h1>學生專區</h1>
                </div>
            </div>
        </div>
    </div>
	<div class="main">
    <div class="section">
        <div class="container">
		<h2>Prefecture</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="service-wrapper">
                        <a href="graduation.php">
                            <img src="../img/service-icon/graduation.png" alt="Service Name">
                            <h3>SHU 畢業展</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-wrapper">
                        <a href="media.php">
                            <img src="../img/service-icon/media.png" alt="Service Name">
                            <h3>SHU 傳技展</h3>
                        </a>
                    </div>
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