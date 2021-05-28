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
                    <h1>What is SHUSTART</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>SHUSTART</h3>
                    <p>
                        世新，是一所富有創造力、想像力與執行力的一所優質大學。SHUSTAR 秉持著一貫的精神，想替所有世新大學的同學夥伴們建構一個專屬於我們發想的舞台。讓世新的學生能夠耀眼群倫。大聲的告訴大家我『世新』來的。
                    </p>
					<br><br>
                    <h3>SHUSTART Service</h3>
                    <p>
                        SHUSTART 團隊，深入了解世新主要以傳播科系為傲。因此本平台特別替學校傳技展新增專區，也替各學系畢業展增設專區。
                        <br>
                        除此之外，針對創意創新創造的部分，為滿足世新學生們天馬行空的想法，從藝術、音樂、影視、科技、設計...等等，都設有專區讓學生們能夠展現自我的特色專屬的發光舞台。
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="portfolio-image">
                        <img src="../../img/team6.jpg" width="500" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/music_article_list.php">
                        <img src="../../img/service-icon/music.png" alt="Service Name">
                        <h3>Music</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/art_article_list.php">
                        <img src="../../img/service-icon/art.png" alt="Service Name">
                        <h3>ART</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/phtotgraph_article_list.php">
                        <img src="../../img/service-icon/photo.png" alt="Service Name">
                        <h3>Photograph</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/techology_article_list.php">
                        <img src="../../img/service-icon/tech.png" alt="Service Name">
                        <h3>Technology</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/film_article_list.php">
                        <img src="../../img/service-icon/film.png" alt="Service Name">
                        <h3>Film</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/publishing_article_list.php">
                        <img src="../../img/service-icon/ruler.png" alt="Service Name">
                        <h3>Publishing</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/design_article_list.php">
                        <img src="../../img/service-icon/design.png" alt="Service Name">
                        <h3>Design</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-wrapper"><a href="../discover/game_article_list.php">
                        <img src="../../img/service-icon/game.png" alt="Service Name">
                        <h3>game</h3>
						</a>
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