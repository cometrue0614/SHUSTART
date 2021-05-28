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
                    <h1>SHU 畢業展</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/rtf_works_list.php"><img src="../img/portfolio1.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">RTF 廣電系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於廣電系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/rtf_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/news_works_list.php"><img src="../img/portfolio2.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">NEWS 新聞系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於新聞系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/news_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/pc_works_list.php"><img src="../img/portfolio3.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">PC 公廣系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於公廣系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/pc_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/gcdp_works_list.php"><img src="../img/portfolio4.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">GCDP 圖傳系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於圖傳系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/gcdp_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/ic_works_list.php"><img src="../img/portfolio5.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">IC 資傳系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於資傳系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/ic_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/speech_works_list.php"><img src="../img/portfolio1.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">SPEECH 口傳系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於口傳系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/speech_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/cm_works_list.php"><img src="../img/portfolio6.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">CM 傳管系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於傳管系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/cm_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/dma_works_list.php"><img src="../img/portfolio1.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">DMA 數媒系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於數枚系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/dma_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/im_works_list.php"><img src="../img/portfolio3.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">IM 資管系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於資管系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/im_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/ba_works_list.php"><img src="../img/portfolio4.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">BA 企管系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於企管系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/ba_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/tourism_works_list.php"><img src="../img/portfolio6.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">TOURISM 觀光系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於觀光系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/tourism_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/eng_works_list.php"><img src="../img/portfolio1.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">ENG 英語系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於英語系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/eng_works_list.php" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="graduation/jpn_works_list.php"><img src="../img/portfolio2.jpg" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info">
                            <ul>
                                <li class="portfolio-project-name">JPN 日文系</li>
                                <li>
                                    <a herf='#'>最新資訊</a>
                                </li>
                                <li>屬於日文系畢業展的小空間</li>
                                <li class="read-more">
                                    <a href="graduation/jpn_works_list.php" class="btn">Read more</a>
                                </li>
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
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.fitvids.js"></script>
    <script src="../js/jquery.sequence-min.js"></script>
    <script src="../js/jquery.bxslider.js"></script>
    <script src="../js/main-menu.js"></script>
    <script src="../js/template.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
</body>
</html>