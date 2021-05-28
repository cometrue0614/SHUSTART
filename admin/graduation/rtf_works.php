<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once '../../php/db.php';
require_once '../../php/functions.php';
//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once '../../php/works.php';

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	//直接轉跳到 login.php
	header("Location: ../../login.php");
}
$datass = get_user();
$work = get_gra_rtf_works($_GET['i']);
$site_title = strip_tags($work['intro']);
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
    <link rel="stylesheet" href="../../css/icomoon-social.css">
    <link rel="stylesheet" href="../../css/leaflet.css" />
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../img/icon.png" />
    <script src="../../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <!-- 頁首 -->
    <?php include_once 'menu.php'; ?>

    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $work['title']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php if($work):?>
						<center><iframe width="853" height="480" src="<?php echo $work['video_path'];?>" frameborder="0" allowfullscreen></iframe></center>   
						<br>
                        <i class="glyphicon glyphicon-time"></i> <?php echo $work['upload_date']; ?>
                        <div class="caption">
                            <h3><?php echo $work['intro'];?></h3>
                        </div>
                        <div class="caption">
                            <h4><?php echo $work['content'];?></h4>
                        </div>
                        <br>
                        <?php else: ?>
                        <h3 class="text-center">無此篇作品</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 頁底 -->
    <?php include_once 'footer.php'; ?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  <!--1-->
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> <!--2-->
    <script src="../../js/bootstrap.min.js"></script> <!--3-->
    <script src="../../js/jquery.fitvids.js"></script> <!--4-->
    <script src="../../js/jquery.sequence-min.js"></script> <!--5-->
    <script src="../../js/jquery.bxslider.js"></script> <!--6-->
    <script src="../../js/main-menu.js"></script> <!--7-->
    <script src="../../js/template.js"></script> <!--8-->
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> <!--9-->
</body>
</html>
