<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once '../../php/db.php';
require_once '../../php/functions.php';
//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once '../../php/works.php';

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
	//直接轉跳到 login.php
	header("Location: ../../login.php");
}
$datass = get_user();
$datas = get_gra_ba_works_list();
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
    <?php
		include_once 'menu.php';
    ?>

    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>畢業展 - BA 企管系</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- 網站內容 -->
    <div class="main">
        <div class="section">
        			<div class="container">
            			<div class="row">
            					<?php if(!empty($datas)):?>
                    	<?php foreach($datas as $row):?>
                    	<?php
							$abstract = strip_tags($row['intro']);
							$abstract = mb_substr($abstract, 0, 40, "UTF-8") . " ⋯⋯ ";
                    	?>
                			<div class="col-md-4 col-sm-6">
                    			<div class="service-wrapper">
                        			<div class="video-container">
                        			<iframe width="560" height="315" src="<?php echo $row['video_path'];?>" frameborder="0" allowfullscreen></iframe>
                        			</div>
                        	<h3><?php echo $row['title']; ?></h3>
                        	<?php echo $abstract; ?>
                        	<br></br>
                        	<a href="ba_works.php?i=<?php echo $row['id']; ?>" class="btn">Read more</a>
                    			</div>
                    	</div>
                    	<?php endforeach; ?>
                    	<?php else: ?>
                    	<h3 class="text-center">尚無作品</h3>
                    	<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- 頁底 -->
    <?php
		include_once 'footer.php';
    ?>

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
