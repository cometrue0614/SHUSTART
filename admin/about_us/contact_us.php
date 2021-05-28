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
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div id="contact-us-detail">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.33682065474!2d121.54178965063156!3d24.988668446182512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa077249f59b%3A0xfb5860fd7348f354!2z5LiW5paw5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1474267337251" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p class="contact-us-details">
                        <b>Address:</b> 台北市文山區木柵路一段17巷1號
                        <br />
                        <b>Phone:</b> +886 2 22368225
                        <br />
                        <b>Email:</b>
                        <a href="mailto:strights@cc.shu.edu.tw">strights＠cc.shu.edu.tw</a>
                    </p>
                </div>
                <div class="col-sm-5">
                    <h3>Send Us a Message</h3>
                    <div class="contact-form-wrapper">
                        <form class="form-horizontal" role="form" method="post" action="http://toolkit.url.com.tw/qform/qform.php?servername=shumis.url.tw&serverid=106274">
                            <div class="form-group">
                                <label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="Name" type="text" placeholder="請輸入您的姓名">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-3 control-label"><b>Your Phone</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="contact-email" type="text" placeholder="請輸入您的手機號碼">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="contact-email" type="text" placeholder="請輸入您的信箱">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="col-sm-3 control-label"><b>Select Topic</b></label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="prependedInput">
                                        <option>Please select topic...</option>
                                        <option>General</option>
                                        <option>Services</option>
                                        <option>Orders</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" id="contact-message" placeholder="請輸入您想反應的狀況、建議或諮詢事項"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input name="backurl" value="http://www.shumis.url.tw" type="hidden">
                                    <br />
                                    <input name="lang" value="zh-TW" type="hidden">
                                    <br />
                                    <input name="submit" class="btn pull-right" value="送出" type="submit">
                                    <br />
                                </div>
                            </div>
                        </form>
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