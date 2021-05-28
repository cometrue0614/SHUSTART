<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/article.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}
$datass = get_user();
$article = get_design_article($_GET['p']);
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <?php include_once 'menu.php'; ?>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $article['title']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
					<div class="col-xs-8">
                        <?php if($article):?>
                        <center><img src="<?php echo $article['image_path'];?>" class="img-responsive"></center>
						<br>
						<center><iframe width="560" height="315" src="<?php echo $article['video_path'];?>" frameborder="0" allowfullscreen></iframe></center>
						<br>
					</div>
					<h5>
                        <i class="glyphicon glyphicon-time"></i>發布時間：<?php echo $article['create_date'];?>
                    </h5>
                        <h3>內文：<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $article['content'];?></h4></h3>
                        <?php else: ?>
                        <h3 class="text-center">無此篇文章</h3>
                        <?php endif; ?>
                        <br>
						<center><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></center>
						<center><div class="fb-comments" data-href="http://www.shumis.url.tw/shustart/admin/design_article.php" data-width="500" data-numposts="5"></div></center>
					</div>
                </div>
            </div>
        </div>
    </div>
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
