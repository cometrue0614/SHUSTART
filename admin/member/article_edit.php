<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/article.php';


if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}
$datass = get_user();
$data = get_edit_article($_GET['i']);
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
                    <h1>點評編輯</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row add_btn_area">
                    <div class="col-xs-12">
                        <form id="edit_article_form">
                            <input type="hidden" id="id" value="<?php echo $data['id'];?>">
                            <div class="form-group">
                                <label for="title">標題</label>
                                <input type="text" class="form-control" id="title" placeholder="請輸入標題" value="<?php echo $data['title'];?>">
                            </div>
                            <div class="form-group">
                                <label for="category">分類</label>
                                <select id="category" class="form-control" required>
									<option value="推！" <?php echo ($data['category'] == "推！")?'selected':'';?>>推！</option>
                                    <option value="新聞" <?php echo ($data['category'] == "新聞")?'selected':'';?>>新聞</option>
                                    <option value="心得" <?php echo ($data['category'] == "心得")?'selected':'';?>>心得</option>
									<option value="評論" <?php echo ($data['category'] == "評論")?'selected':'';?>>評論</option>
									<option value="交流" <?php echo ($data['category'] == "交流")?'selected':'';?>>交流</option>
									<option value="噓！" <?php echo ($data['category'] == "噓！")?'selected':'';?>>噓！</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="field">領域</label>
                                <select id="field" class="form-control" required>
                                    <option value="1" <?php echo ($data['field'] == 1)?'selected':'';?>>Art</option>
                                    <option value="2" <?php echo ($data['field'] == 2)?'selected':'';?>>Music</option>
                                    <option value="3" <?php echo ($data['field'] == 3)?'selected':'';?>>Design</option>
                                    <option value="4" <?php echo ($data['field'] == 4)?'selected':'';?>>Game</option>
                                    <option value="5" <?php echo ($data['field'] == 5)?'selected':'';?>>Film</option>
                                    <option value="6" <?php echo ($data['field'] == 6)?'selected':'';?>>Photograph</option>
                                    <option value="7" <?php echo ($data['field'] == 7)?'selected':'';?>>Publishing</option>
                                    <option value="8" <?php echo ($data['field'] == 8)?'selected':'';?>>Technology</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="content">內容</label>
                                <textarea type="input" class="form-control" id="content" rows="10"><?php echo $data['content'];?></textarea>
                            </div>
							<div class="form-group">
                                <input type="hidden" id="image_path" value="<?php echo (!is_null($data['image_path']))?$data['image_path']:'';?>">
									<br>
									<div class="show_image">
									<?php if(!is_null($data['image_path'])):?>
										<img src='<?php echo $data['image_path'];?>'>
									<?php endif;?>
									</div>			
								</div>
								<div class="form-group">
                                <label for="video_path">影片網址</label>
                                <input class="form-control" id="video_path" vlaue="<?php echo $data['video_path'];?>">
								<br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/khUki6IPjfk" frameborder="0" allowfullscreen></iframe>
								</div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="publish" value="1" <?php echo ($data['publish'] == 1)?'checked':'';?>> 發佈
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="publish" value="0" <?php echo ($data['publish'] == 0)?'checked':'';?>> 不發佈
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">儲存</button>
                            <div class="loading text-center"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php'?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).on("ready", function () {
            $("#edit_article_form").on("submit", function () {
                $("div.loading").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

                if ($("#title").val() == '' || $("#content").val() == '') {
                    alert("請填入標題或內文");
                }
                else {
                    $.ajax({
                        type: "POST",
                        url: "../../php/update_article.php",
                        data: {
                            'id': $("#id").val(),
                            'title': $("#title").val(),
                            'category': $("#category").val(),
                            'field': $("#field").val(),
                            'content': $("#content").val(),
							'image_path': $("#image_path").val(),
							'video_path': $("#video_path").val(),
                            'publish': $("input[name='publish']:checked").val()
                        },
                        dataType: 'html'
                    }).done(function (data) {

                        if (data == "yes") {
                            alert("更新成功，點擊確認回列表");
                            window.location.href = "article_list.php";
                        }
                        else {
                            alert("更新失敗" + data);
                        }

                    }).fail(function (jqXHR, textStatus, errorThrown) {
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