<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/article.php';

if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
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
					<div class="col-md-12">
						<h1>點評新增</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="main">
			<div class="section">
				<div class="container">
					<div class="row add_btn_area">
						<div class="col-xs-12">
							<form id="add_article_form">
								<div class="form-group">
									<label for="title">標題 </label>
									<input class="form-control" id="title" placeholder="請輸入標題">
								</div>
								<div class="form-group">
									<label for="category">分類</label>
									<select id="category" class="form-control" required>
										<option value="">請選擇</option>
										<option value="推！">推！</option>
										<option value="新聞">新聞</option>
										<option value="心得">心得</option>
										<option value="評論">評論</option>
										<option value="交流">交流</option>
										<option value="噓！">噓！</option>
									</select>
								</div>
								<div class="form-group">
									<label for="field">領域</label>
									<select id="field" class="form-control" required>
										<option value="">請選擇</option>
										<option value="1">Art</option>
										<option value="2">Music</option>
										<option value="3">Design</option>
										<option value="4">Game</option>
										<option value="5">Film</option>
										<option value="6">Photograph</option>
										<option value="7">Publishing</option>
										<option value="8">Technology</option>
									</select>
								</div>
								<div class="form-group">
									<label for="content">內容</label>
									<textarea type="input" class="form-control" id="content" rows="10"></textarea>
								</div>
								<div class="form-group">
									<label for="category">圖片上傳</label>
									<input type="file" name="image_path" accept="image/gif, image/jpeg, image/png">
									<input type="hidden" id="image_path" value="">
									<br>
									<div class="show_image"></div>			
								</div>
								<div class="form-group">
                                <label for="video_path">影片網址</label>
                                <input class="form-control" id="video_path">
								<br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/khUki6IPjfk" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="form-group">
									<label class="radio-inline">
										<input type="radio" name="publish" value="1" checked>
										發佈 </label>
									<label class="radio-inline">
										<input type="radio" name="publish" value="0">
										不發佈 </label>
								</div>
								<button type="submit" class="btn btn-default">
									送出
								</button>
								<div class="loading text-center"></div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12"></div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'footer.php'?>

		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>
			$(document).on("ready", function() {

				$("input[name='image_path']").on("change", function() {
					var file_data = new FormData(),
					    file_name = $(this)[0].files[0]['name'],
					    save_path = "files/images/";

					$("div.show_image").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

					file_data.append("file", $(this)[0].files[0]);
					file_data.append("save_path", save_path);
					$.ajax({
						type : 'POST',
						url : '../../php/upload_file.php',
						data : file_data,
						cache : false,
						processData : false,
						contentType : false,
						dataType : 'html'
					}).done(function(data) {
						if (data == "yes") {
							$("div.show_image").html("<img src='../../" + save_path + file_name + "'>");
							$("#image_path").val("../../" + save_path + file_name);
						} else {
							alert(data);
						}
					}).fail(function(data) {
						alert("有錯誤產生，請看 console log");
						console.log(jqXHR.responseText);
					});
				});

				$("#add_article_form").on("submit", function() {
					$("div.loading").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

					if ($("#title").val() == '' || $("#content").val() == '') {
						alert("請填入標題或內文");

						$("div.loading").html('');
					} else {
						$.ajax({
							type : "POST",
							url : "../../php/add_article.php",
							data : {
								'title' : $("#title").val(),
								'category' : $("#category").val(),
								'field' : $("#field").val(),
								'content' : $("#content").val(),
								'image_path' : $("#image_path").val(),
								'video_path': $("#video_path").val(),
								'publish' : $("input[name='publish']:checked").val()
							},
							dataType : 'html'
						}).done(function(data) {
							if (data == "yes") {
								alert("新增成功，點擊確認回列表");
								window.location.href = "article_list.php";
							} else {
								alert("新增錯誤");
							}

						}).fail(function(jqXHR, textStatus, errorThrown) {
							alert("有錯誤產生，請看 console log");
							console.log(jqXHR.responseText);
						});
					}
					return false;
				});
			});
		</script>
		<!--JavaScript-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="../js/jquery-1.9.1.min.js"><\/script>')
		</script>
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/jquery.fitvids.js"></script>
		<script src="../../js/jquery.sequence-min.js"></script>
		<script src="../../js/jquery.bxslider.js"></script>
		<script src="../../js/main-menu.js"></script>
		<script src="../../js/template.js"></script>
		<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
	</body>
</html>