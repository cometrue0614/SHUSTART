<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/pt.php';


if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}
$datass = get_user();
$data = get_edit_pt($_GET['i']);
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
                    <h1>尖兵資料編輯</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row add_btn_area">
                    <div class="col-xs-12">
                        <form id="edit_pt_form">
						<input type="hidden" id="id" value="<?php echo $data['id'];?>">
                            <input type="hidden" id="id" value="<?php echo $data['id'];?>">
                            <div class="form-group">
                                <label for="title">標題 </label>
                                <input type="input" class="form-control" id="title" placeholder="請輸入標題" value="<?php echo $data['title'];?>">
                            </div>
                            <div class="form-group">
                                <label for="category">分類</label>
                                <select id="category" class="form-control" required>
                                    <option value="運動" <?php echo ($data['category'] == "運動")?'selected':'';?>>運動</option>
                                    <option value="休閒" <?php echo ($data['category'] == "休閒")?'selected':'';?>>休閒</option>
                                    <option value="音樂" <?php echo ($data['category'] == "音樂")?'selected':'';?>>音樂</option>
                                    <option value="表演" <?php echo ($data['category'] == "表演")?'selected':'';?>>表演</option>
                                    <option value="美術" <?php echo ($data['category'] == "美術")?'selected':'';?>>美術</option>
                                    <option value="電影" <?php echo ($data['category'] == "電影")?'selected':'';?>>電影</option>
                                    <option value="學術" <?php echo ($data['category'] == "學術")?'selected':'';?>>學術</option>
                                    <option value="諮詢" <?php echo ($data['category'] == "諮詢")?'selected':'';?>>諮詢</option>
                                </select>
                            </div>
							 <div class="form-group">
                                <label for="name">姓名</label>
                                <input class="form-control" id="ptname" placeholder="請輸入姓名" value="<?php echo $data['ptname'];?>" required>
                            </div>
                           <div class="form-group">
                                <label for="specialty">專長</label>
                                <input class="form-control" id="specialty" placeholder="請輸入專長" maxlength="4" value="<?php echo $data['specialty'];?>" required>
								<span class="smalltext">＊請以 4 個字以內簡述您的專長　Ex：唱歌、打籃球、旅遊規劃等等⋯</span>
                            </div>
							 <div class="form-group">
                                <label for="price">時薪</label>
                                <input class="form-control" id="price" placeholder="請輸入您每小時的價格" value="<?php echo $data['price'];?>" required>
                            </div>
							 <div class="form-group">
                                <label for="intro">個人簡介</label>
                                <textarea type="input" class="form-control" id="intro" rows="10" required><?php echo $data['intro'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">內容介紹</label>
                                <textarea type="input" class="form-control" id="content" rows="10" required><?php echo $data['content'];?></textarea>
                            </div>
							<div class="form-group">
                                <input type="hidden" id="image_path" value="<?php echo (!is_null($data['image_path']))?$data['image_path']:'';?>">
								<br>
                                <div class="show_image">
								<?php if(!is_null($data['image_path'])):?>
										<img src="../<?php echo $data['image_path'];?>">
								<?php endif;?>
								</div>
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
            $("#edit_pt_form").on("submit", function () {

                if ($("#title").val() == '' || $("#content").val() == '') {
                    alert("請填入標題或內文");
                }
                else {
                    $.ajax({
                        type: "POST",
                        url: "../../php/update_pt.php",
                        data: {
                            'id': $("#id").val(),
                            'title': $("#title").val(),
                            'category': $("#category").val(),
							'ptname': $("#ptname").val(),
							'specialty': $("#specialty").val(),
                            'intro': $("#intro").val(),
                            'content': $("#content").val(),
							'price': $("#price").val(),
                            'image_path': $("#image_path").val(),
                            'publish': $("input[name='publish']:checked").val()
                        },
                        dataType: 'html'
                    }).done(function (data) {
                        if (data == "yes") {
                            alert("更新成功，點擊確認回列表");
                            window.location.href = "pt_list.php";
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