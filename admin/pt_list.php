<?php
require_once '../php/db.php';
require_once '../php/functions.php';
require_once '../php/pt.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../login.php");
}
$datas = get_user();
$data = get_pt_list();
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
    <?php include_once 'menu.php'; ?>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>校園尖兵</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <?php if(!empty($data)):?>
                    	<?php foreach($data as $row):?>
                    	<?php
											$abstract = strip_tags($row['content']);
											$abstract = mb_substr($abstract, 0, 40, "UTF-8") . " ⋯⋯ ";
                    	?>
                			<div class="col-md-4 col-sm-6">
                    			<div class="service-wrapper">
                        	<div class="image-container">
                        		<img src="<?php echo $row['image_path'];?>" class="img-responsive"></img>
                        	</div>
							<div class="panel-body">
                                    <span class="label label-success"><?php echo $row['category'];?></span>&nbsp;
									<span class="label label-info"><?php echo $row['specialty'];?></span>&nbsp;
                                    <span class="label label-danger"><?php echo $row['create_date'];?></span>
                            </div>
                        	<h3><?php echo $row['title'];?></h3>
                        	<?php echo $abstract;?>
							<div class ="price">
							<br>
								NTD $<?php echo $row['price'];?> / hr
							</div>
                        	<br>
                        	<a href="pt.php?i=<?php echo $row['id'];?>" class="btn">Read more</a>
                    		</div>
                    	</div>
                    	<?php endforeach; ?>
                    	<?php else: ?>
                    	<h3 class="text-center">尚無資料</h3>
                    	<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  <!--1-->
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> <!--2-->
    <script src="../js/bootstrap.min.js"></script> <!--3-->
    <script src="../js/jquery.fitvids.js"></script> <!--4-->
    <script src="../js/jquery.sequence-min.js"></script> <!--5-->
    <script src="../js/jquery.bxslider.js"></script> <!--6-->
    <script src="../js/main-menu.js"></script> <!--7-->
    <script src="../js/template.js"></script> <!--8-->
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> <!--9-->
</body>
</html>
