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
                    <h1>U - start</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="portfolio-image">
                    <img src="../img/ustart_home.jpg" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                </div>
                <br>
                <div class="col-sm-6">
                    <p>
                        <b><h4>什麼是「U-start大專畢業生創業服務計畫」？</h4></b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;教育部青年發展署「大專畢業生創業服務計畫」鼓勵近五學年度畢業之大專生發揮自己的創意及所學，組成創業團隊，由政府提供創新創業的實驗場域，以激發創業熱情並實踐年輕學子之理想；另透過本計畫之創業團隊績優評選，引導大專校院重視創新創業課程及活動之開設，進而培育我國創新創業人才，同時，適時利用微型企業的彈性及創新育成單位之協助，蘊育未來經濟發展能量，以形塑大專校院創新創業風氣及落實建立我國成為創新創業之社會。
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本計畫並獲得100年度「各機關建立參與及建議制度績優建議案」創新經濟與科技發展類組「特等獎」之殊榮，顯見各界對本計畫之重視及認同。
                        透過產學合作進行青年微型創業及育成協助，一方面提升校園的創意文化，另方面也建立大專校院與企業合作平臺之連結，藉此拓展學校研究能量，也培育業界需求、增進就業機會，提升學用合一、有效人力資本之目的。藉補助各創業團隊基本開辦費，並鼓勵接受大專校院育成單位創業輔導達6個月以上，推動大專畢業生延續學習，並提供畢業生有機會獲得創業之實務經驗；由本計畫成效追蹤觀之，參與此次創業計畫之人員，認為最大收穫為「獲得創業的實務經驗」、其次則是「汲取創業知識、提升專業」，與本計畫推動之教育精神相當符合。
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;各校亦自發性推廣此計畫，舉辦校內之創業競賽，作為參加本計畫創業競賽的暖身及訓練，本計畫已成功形塑大專校院校園的創業氣氛，提高大專畢業生創業夢實現的機會。
						<br>
						<a href="http://ustart.yda.gov.tw/">http://ustart.yda.gov.tw/</a>
					</p>
                </div>
                <div class="col-sm-6">
                    <div class="portfolio-image">
                        <a href="http://ustart.yda.gov.tw/"><img src="../img/ustart.jpg" width="500" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-sm-12">
				<p>
                    <b><h4>如何參加「U-start大專畢業生創業服務計畫」？</h4></b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首先創業團隊應由各大專校院畢業生「至少 3 人」組成，其中應有三分之二以上成員為「近 5 學年度」畢業生，再與設有育成單位之公私立大專校院結合，每校所提申請計畫以10案為限，由各校院育成單位檢具「創業團隊營運計畫書」及「育成輔導計畫書」，提出申請。依創業計畫完整評比，由教育部青年發展署補助學校育成輔導費及創業團隊創業基本開辦費。獲補助基本開辦費之團隊，經參與第2階段創業績優團隊評選且成績績優者，可再獲補助「 25 萬元至 100 萬元」創業開辦費。
                </p>
				</div>
				<br>
				<br>
				<div class="row add_btn_area">
                    <div class="col-sm-12">
					<p>
                        <center><a href="member/ustart_add.php" class="btn btn-primary">我要投稿</a></center>
                    </p>
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