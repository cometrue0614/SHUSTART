<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/article.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}
$datass = get_user();
$datas = get_film_article_list();
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
    <?php include_once 'menu.php'; ?>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Film</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php if(!empty($datas)):?>
                        <?php foreach($datas as $row):?>
                        <?php
                        $abstract = strip_tags($row['content']);
                        $abstract = mb_substr($row['content'], 0, 100, "UTF-8")
                        ?>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a href="film_article.php?p=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <span class="label label-info"><?php echo $row['category']; ?></span>&nbsp;
                                    <span class="label label-danger"><?php echo $row['create_date']; ?></span>
                                </p>
                                <?php echo $abstract ." ... MORE "; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <h3 class="text-center">尚無文章</h3>
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
    <script src="../../js/bootstrap.min.js"></script> <!--3-->
    <script src="../../js/jquery.fitvids.js"></script> <!--4-->
    <script src="../../js/jquery.sequence-min.js"></script> <!--5-->
    <script src="../../js/jquery.bxslider.js"></script> <!--6-->
    <script src="../../js/main-menu.js"></script> <!--7-->
    <script src="../../js/template.js"></script> <!--8-->
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> <!--9-->
</body>
</html>
