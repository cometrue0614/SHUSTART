<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/pt.php';


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
                <div class="col-md-12">
                    <h1>尖兵資料新增</h1>
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
                                <label for="title">標題</label>
                                <input class="form-control" id="title" placeholder="請輸入標題">
                            </div>
                            <div class="form-group">
                                <label for="category">分類</label>
                                <select id="category" class="form-control" required>
                                   <option value="">請選擇</option>
                                    <option value="運動">運動</option>
                                    <option value="休閒">休閒</option>
                                    <option value="音樂">音樂</option>
                                    <option value="表演">表演</option>
                                    <option value="美術">美術</option>
                                    <option value="電影">電影</option>
                                    <option value="學術">學術</option>
                                    <option value="諮詢">諮詢</option>
                                </select>
                            </div>
							 <div class="form-group">
                                <label for="name">姓名</label>
                                <input class="form-control" id="ptname" placeholder="請輸入姓名" required>
                            </div>
							<div class="form-group">
                                <label for="specialty">專長</label>
                                <input class="form-control" id="specialty" placeholder="請輸入專長" maxlength="4" required>
								<span class="smalltext">＊請以 4 個字以內簡述您的專長　Ex：唱歌、打籃球、旅遊規劃等等⋯</span>
                            </div>
							 <div class="form-group">
                                <label for="price">時薪</label>
                                <input class="form-control" id="price" placeholder="請輸入您每小時的價格" required>
                            </div>
							 <div class="form-group">
                                <label for="intro">個人簡介</label>
                                <textarea type="input" class="form-control" id="intro" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">內容介紹</label>
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
                                <label class="radio-inline">
                                    <input type="radio" name="publish" value="1" checked> 發佈
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="publish" value="0"> 不發佈
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">送出</button>
                            <div class="loading text-center"></div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php'?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).on("ready", function () {
            
            $("input[name='image_path']").on("change", function () {
                var file_data = new FormData(),
                    file_name = $(this)[0].files[0]['name'],
                    save_path = "files/images/";

                file_data.append("file", $(this)[0].files[0]);
                file_data.append("save_path", save_path);
                
                $.ajax({
                    type: 'POST',
                    url: '../../php/upload_file.php',
                    data: file_data,
                    cache: false, 
                    processData: false, 
                    contentType: false,
                    dataType: 'html'
                }).done(function (data) {
                    if (data == "yes") {
                        $("div.show_image").html("<img src='../../" + save_path + file_name + "'>");
                        $("#image_path").val("../" + save_path + file_name);
                    } else {
                        alert(data);
                    }
                }).fail(function (data) {
                    alert("有錯誤產生，請看 console log");
                    console.log(jqXHR.responseText);
                });
            });

            $("#add_article_form").on("submit", function () {

                if ($("#title").val() == '' || $("#content").val() == '') {
                    alert("請填入標題或內文");

                    $("div.loading").html('');
                } else {
                    $.ajax({
                        type: "POST",
                        url: "../../php/add_pt.php",
                        data: {
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
                            alert("新增成功，點擊確認回列表");
                            window.location.href = "pt_list.php";
                        }
                        else {
                            alert("新增錯誤");
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