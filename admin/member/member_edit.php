<?php
require_once '../../php/db.php';
require_once '../../php/functions.php';

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	header("Location: ../../login.php");
}
$datass = get_user();
$data = get_edit_user($_GET['i']);
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
                    <h1>會員編輯</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="homepage-slider">
        <div class="container">
            <table width="500" border="0" align="center" cellpadding="4" cellspacing="0">
                <tr valign="top">
                    <td class="tdrline">
                        <form method="POST" name="edit_member_form" id="edit_member_form">
                            <input type="hidden" id="m_id" value="<?php echo $data['m_id'];?>">
                            <h3>
                                <font color="#004D99" face="微軟正黑體"><b>帳戶資料</b></font>
                            </h3>
                            <div class="form-group" id="un">
                                <label for="username"><b>帳號</b></label>
                                <input type="text" class="form-control" id="m_username" name="m_username" minlength="8" maxlength="20" placeholder="請輸入新的帳號（如不更動請重新整理）" required value="<?php echo $data['m_username'];?>">
                                <span class="smalltext">  請填入 8 ~ 20 個字元以內的英文字母、數字、以及各種符號組合。</span>
                            </div>
                            <div class="form-group" id="pw">
                                <label for="password"><b>密碼</b></label>
                                <input type="password" class="form-control" id="m_password" name="m_password" minlength="8" maxlength="20" placeholder="請輸入新的密碼（如不更動請留白）">
                                <span class="smalltext">  請填入 8 ~ 20 個字元以內的英文字母、數字、以及各種符號組合。</span>
                            </div>
                            <hr size="1">
                            <h3>
                                <font color="#004D99" face="微軟正黑體"><b>會員資料</b></font>
                            </h3>
                            <div class="form-group">
                                <label for="last_name"><b>姓氏</b></label>
                                <input type="text" class="form-control" id="m_last_name" name="m_last_name" placeholder="請輸入新的姓氏" required value="<?php echo $data['m_last_name'];?>">
                            </div>
                            <div class="form-group">
                                <label for="first_name"><b>名字</b></label>
                                <input type="text" class="form-control" id="m_first_name" name="m_first_name" placeholder="請輸入新的名字" required value="<?php echo $data['m_first_name'];?>">
                            </div>
                            <div class="form-group">
                                <label for="subject"><b>系所</b></label>
                                <select name="m_subject" id="m_subject" required>
                                    <option value="1" <?php echo ($data['m_subject'] == 1)?'selected':'';?>>廣電系</option>
                                    <option value="2" <?php echo ($data['m_subject'] == 2)?'selected':'';?>>新聞系</option>
                                    <option value="3" <?php echo ($data['m_subject'] == 3)?'selected':'';?>>公廣系</option>
                                    <option value="4" <?php echo ($data['m_subject'] == 4)?'selected':'';?>>圖傳系</option>
                                    <option value="5" <?php echo ($data['m_subject'] == 5)?'selected':'';?>>資傳系</option>
                                    <option value="6" <?php echo ($data['m_subject'] == 6)?'selected':'';?>>口傳系</option>
                                    <option value="7" <?php echo ($data['m_subject'] == 7)?'selected':'';?>>傳管系</option>
                                    <option value="8" <?php echo ($data['m_subject'] == 8)?'selected':'';?>>數媒系</option>
                                    <option value="9" <?php echo ($data['m_subject'] == 9)?'selected':'';?>>資管系</option>
                                    <option value="10" <?php echo ($data['m_subject'] == 10)?'selected':'';?>>財金系</option>
                                    <option value="11" <?php echo ($data['m_subject'] == 11)?'selected':'';?>>企管系</option>
                                    <option value="12" <?php echo ($data['m_subject'] == 12)?'selected':'';?>>經濟系</option>
                                    <option value="13" <?php echo ($data['m_subject'] == 13)?'selected':'';?>>觀光系</option>
                                    <option value="14" <?php echo ($data['m_subject'] == 14)?'selected':'';?>>行管系</option>
                                    <option value="15" <?php echo ($data['m_subject'] == 15)?'selected':'';?>>社心系</option>
                                    <option value="16" <?php echo ($data['m_subject'] == 16)?'selected':'';?>>法律系</option>
                                    <option value="17" <?php echo ($data['m_subject'] == 17)?'selected':'';?>>英文系</option>
                                    <option value="18" <?php echo ($data['m_subject'] == 18)?'selected':'';?>>日文系</option>
                                    <option value="19" <?php echo ($data['m_subject'] == 19)?'selected':'';?>>中文系</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email"><b>信箱</b></label>
                                <input type="email" class="form-control" id="m_email" name="m_email" placeholder="請輸入新的信箱" required value="<?php echo $data['m_email'];?>">
                            </div>
                            <div class="form-group">
                                <label for="phone"><b>電話</b></label>
                                <input type="tel" class="form-control" id="m_phone" name="m_phone" placeholder="請輸入新的電話號碼" required value="<?php echo $data['m_phone'];?>">
                            </div>
                            <hr size="1">
                            <div align="center">
                                <button type="button" class="btn btn-default" name="b1" onClick="window.history.back()">回上一頁</button>&nbsp;&nbsp;
                                <button type="reset" class="btn btn-default" name="b2">重設資料</button>&nbsp;&nbsp;
                                <button type="submit" class="btn btn-default" name="b3"><b>送出申請</b></button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php include_once 'footer.php'?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).on("ready", function () {
            $("#m_username").focus();
            $("#m_username").on("keyup", function () {
                var keyin_value = $(this).val();
                if (keyin_value != '') {
                    $.ajax({
                        type: "POST",
                        url: "../../php/check_username.php", 
                        data: {
                            'n': $(this).val()	
                        },
                        dataType: 'html' 
                    }).done(function (data) {
                        //成功的時候
                        if (data == "yes") {
                            $("#un").removeClass("has-error").addClass("has-success");
                            $("#edit_member_form button[type='submit']").attr('disabled', false);
                        }
                        else if (data == "no") {
                            alert("帳號有重複，不可以註冊");
                            $("#mun").removeClass("has-success").addClass("has-error");
                            $("#edit_member_form button[type='submit']").attr('disabled', true);
                        }

                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        alert("有錯誤產生，請看 console log。");
                        console.log(jqXHR.responseText);
                    });
                }
                else {
                    $("#un").removeClass("has-success").removeClass("has-error");
                    $("#edit_member_form button[type='submit']").attr('disabled', false);
                }
            });
        

			$("#edit_member_form").on("submit", function () {
				$("div.loading").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

				$.ajax({
					type: "POST",
					url: "../../php/update_user.php", 
					data: {
						'id': $("#m_id").val(), //姓氏
						'un': $("#m_username").val(), //使用者帳號
						'pw': $("#m_password").val(), //使用者密碼
						'last': $("#m_last_name").val(), //姓氏
						'first': $("#m_first_name").val(), //名字
						'sub': $("#m_subject").val(), //系所
						'email': $("#m_email").val(), //信箱
						'phone': $("#m_phone").val() //電話
					},
					dataType: 'html' 
				}).done(function (data) {

					if (data == "yes") {
						alert("更新成功，點擊確認回列表");
						window.location.href = "member_list.php";
					}
					else {
						alert("更新失敗，請確認資料是否正確更動");
					}

				}).fail(function (jqXHR, textStatus, errorThrown) {
					alert("有錯誤產生，請看 console log");
					console.log(jqXHR.responseText);
				});
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