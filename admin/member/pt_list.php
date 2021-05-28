<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';
require_once '../../php/pt.php';


if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}
$datass = get_user();
$datas = get_all_pt();
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
                    <h1>尖兵資料管理</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section">
            <div class="container">
                <div class="row add_btn_area">
                    <div class="col-xs-12">
                        <a href="pt_add.php" class="btn btn-primary">新增資料</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-hover" id="list">
                            <tr>
                                <th>標題</th>
                                <th>分類</th>
								<th>專長</th>
								<th>時薪</th>
                                <th>是否發佈</th>
                                <th>發佈時間</th>
                                <th>管理動作</th>
                            </tr>
                            <?php if(!empty($datas)):?>
                            <?php foreach($datas as $a_data):?>
                            <tr>
                                <td><?php echo $a_data['title'];?></td>
                                <td><?php echo $a_data['category'];?></td>
								<td><?php echo $a_data['specialty'];?></td>
								<td><?php echo $a_data['price'];?></td>
                                <td><?php echo ($a_data['publish'])?'發佈中':'未發佈';?></td>
                                <td><?php echo $a_data['create_date'];?></td>
                                <td>
                                    <a href="pt_edit.php?i=<?php echo $a_data['id'];?>" class="btn btn-green">編輯</a>
                                    <a href="javascript:void(0);" class="btn btn-orange del_pt" data-id="<?php echo $a_data['id'];?>">刪除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php else:?>
                            <tr>
                                <td colspan="7">
                                    <center>查無資料</center>
                                </td>
                            </tr>
                            <?php endif;?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php'?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).on("ready", function () {

            $("a.del_pt").on("click", function () {
                var c = confirm("您確定要刪除嗎？");
                this_tr = $(this).parent().parent();

                if (c) {
                    $.ajax({
                        type: "POST",
                        url: "../../php/del_pt.php",
                        data: {
                            'id': $(this).attr("data-id")
                        },
                        dataType: 'html'
                    }).done(function (data) {

                        if (data == "yes") {
                            alert("刪除成功，點擊確認移除資料");
                            this_tr.fadeOut();
                            window.location.href = "pt_list.php";
                        }
                        else {
                            alert("刪除失敗");
                        }

                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        alert("有錯誤產生，請看 console log");
                        console.log(jqXHR.responseText);
                    });
                }
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