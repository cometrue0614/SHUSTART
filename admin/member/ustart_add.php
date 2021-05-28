<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}

$datass = get_user();
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
                    <h1>U - start 投稿</h1>
                </div>
            </div>
        </div>
    </div>
	<div class="main">
		<div class="section">
			<div class="container">
				<table width="500" border="0" align="center" cellpadding="4" cellspacing="0">
					<tr valign="top">
						<td class="tdrline">
							<form class="form-horizontal" role="form" method="post" action="http://toolkit.url.com.tw/qform/qform.php?servername=shumis.url.tw&serverid=106274">
									<?php foreach($datass as $a_data):?>
									<div class="form-group">
										<label for="stdid" class="col-sm-3 control-label"><b>學號</b></label>
										<div class="col-sm-9">
											<input class="form-control" id="id" type="text" placeholder="請輸入您的學號" value="<?php echo $a_data['m_stdid'];?>" >
										</div>
									</div>
									<div class="form-group">
										<label for="Name" class="col-sm-3 control-label"><b>姓名</b></label>
										<div class="col-sm-9">
											<input class="form-control" id="Name" type="text" placeholder="請輸入您的姓名" value="<?php echo $a_data['m_last_name'];?><?php echo $a_data['m_first_name'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="contact-email" class="col-sm-3 control-label"><b>手機號碼</b></label>
										<div class="col-sm-9">
											<input class="form-control" id="contact-email" type="text" placeholder="請輸入您的手機號碼" value="<?php echo $a_data['m_phone'];?>" >
										</div>
									</div>
									<div class="form-group">
										<label for="contact-email" class="col-sm-3 control-label"><b>信箱</b></label>
										<div class="col-sm-9">
											<input class="form-control" id="contact-email" type="text" placeholder="請輸入您的信箱" value="<?php echo $a_data['m_email'];?>">
										</div>
									</div>
									<?php endforeach;?>
									<div class="form-group">
										<label for="contact-email" class="col-sm-3 control-label"><b>系級</b></label>
										<div class="col-sm-9">
											<input class="form-control" id="contact-email" type="text" placeholder="請輸入您的系所與班級（Ex：資管四乙）">
										</div>
									</div>
									<div class="form-group">
										<label for="contact-message" class="col-sm-3 control-label"><b>備註</b></label>
										<div class="col-sm-9">
											<textarea class="form-control" rows="3" id="contact-message"></textarea>
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
						</td>
					</tr>
				</table>
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