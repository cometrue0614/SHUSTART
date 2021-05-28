<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
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
    <link rel="stylesheet" href="../../css/icomoon-social.css">
    <link rel="stylesheet" href="../../css/leaflet.css" />
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../img/icon.png" />
    <script src="../../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <?php include_once 'menu.php'?>

    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Who we are</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="../../img/team1.jpg" alt="Name Surname">
                        </div>
                        <div class="team-member-info">
                            <ul>
                                <li class="team-member-name">
                                    Yvain 資科四乙
                                    <span class="team-member-social">
                                        <a href="https://www.facebook.com/bingyin.Hsieh?fref=ts"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-github"></i></a>
                                        <a href="#"><i class="icon-tumblr"></i></a>
                                    </span>
                                </li>
                                <li>Design and Art</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="../../img/team2.jpg" alt="Name Surname">
                        </div>
                        <div class="team-member-info">
                            <ul>
                                <li class="team-member-name">
                                    Patrick 資管四乙
                                    <span class="team-member-social">
                                        <a href="https://www.facebook.com/liu.chaiming?fref=ts"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-dribbble"></i></a>
                                        <a href="#"><i class="icon-tumblr"></i></a>
                                    </span>
                                </li>
                                <li>Web Designer</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="../../img/team3.jpg" alt="Name Surname">
                        </div>
                        <div class="team-member-info">
                            <ul>
                                <li class="team-member-name">
                                    Ann 資科四甲
                                    <span class="team-member-social">
                                        <a href="https://www.facebook.com/ann.ling.338?fref=ts"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-dribbble"></i></a>
                                        <a href="#"><i class="icon-tumblr"></i></a>
                                    </span>
                                </li>
                                <li>Group representatives </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="../../img/team4.jpg" alt="Name Surname">
                        </div>
                        <div class="team-member-info">
                            <ul>
                                <li class="team-member-name">
                                    BOBO 資管四乙
                                    <span class="team-member-social">
                                        <a href="https://www.facebook.com/xiao.baihao?fref=ts"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-dribbble"></i></a>
                                        <a href="#"><i class="icon-tumblr"></i></a>
                                    </span>
                                </li>
                                <li>Web Designer </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="../../img/team5.jpg" alt="Name Surname">
                        </div>
                        <div class="team-member-info">
                            <ul>
                                <li class="team-member-name">
                                    Tim 資管四乙
                                    <span class="team-member-social">
                                        <a href="https://www.facebook.com/soon0614"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-dribbble"></i></a>
                                        <a href="#"><i class="icon-tumblr"></i></a>
                                    </span>
                                </li>
                                <li>Group Leader</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.fitvids.js"></script>
    <script src="../../js/jquery.sequence-min.js"></script>
    <script src="../../js/jquery.bxslider.js"></script>
    <script src="../../js/main-menu.js"></script>
    <script src="../../js/template.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
</body>
</html>