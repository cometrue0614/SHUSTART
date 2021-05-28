<?php
require_once '../php/db.php';
require_once '../php/functions.php';
require_once '../php/pt.php';

if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
	header("Location: ../login.php");
}
$datas = get_user();
$pt = get_pt($_GET['i']);
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
    <?php
	include_once 'menu.php';
 ?>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $pt['title']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
					<div class="col-xs-6">
                        <?php if($pt):?>
                        <center><img src="<?php echo $pt['image_path']; ?>" class="img-responsive"></center>
						<br>
					</div>
						<h5>
                        <i class="glyphicon glyphicon-time"></i>發布時間：<?php echo $pt['create_date']; ?>
						</h5>
						<h3>姓名：<?php echo $pt['ptname']; ?></h3>
						<h3>專長：<?php echo $pt['specialty']; ?></h3>
						<h3>價格：<?php echo $pt['price']; ?>／小時</h3>
                        <h3>個人簡介：<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pt['intro']; ?></h4></h3>
						<h3>內容介紹：<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pt['content']; ?></h4></h3>
                        <?php else: ?>
                        <h3 class="text-center">查無資料</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
			include_once 'footer.php';
 ?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  <!--1-->
    <script>window.jQuery || document.write('<script src="../js/jquery-1.9.1.min.js"><\/script>')</script> <!--2-->
    <script src="../js/bootstrap.min.js"></script> <!--3-->
    <script src="../js/jquery.fitvids.js"></script> <!--4-->
    <script src="../js/jquery.sequence-min.js"></script> <!--5-->
    <script src="../js/jquery.bxslider.js"></script> <!--6-->
    <script src="../js/main-menu.js"></script> <!--7-->
    <script src="../js/template.js"></script> <!--8-->
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> <!--9-->
</body>
</html>
