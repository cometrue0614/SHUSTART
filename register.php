<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SHUSTART</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/icon.png" />
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <?php include_once 'menu.php'?>

    <div class="homepage-slider">
        <div class="container">
            <table width="500" border="0" align="center" cellpadding="4" cellspacing="0">
                <tr valign="top">
                    <td class="tdrline">
                        <form method="POST" name="register_form" id="register_form">
                            <h2>
                                <font color="#FF2400"><center><strong>Register</strong></center></font>
                            </h2>
                            <h3>
                                <font color="#004D99" face="微軟正黑體"><b>帳戶資料</b></font>
                            </h3>
                            <div class="form-group" id="un">
                                <label for="username"><b>帳號</b></label>
                                <input type="text" class="form-control" id="m_username" name="m_username" placeholder="請輸入帳號" minlength="8" maxlength="20" required>
                                <span class="smalltext">  請填入 8 ~ 20 個字元以內的英文字母、數字、以及各種符號組合。</span>
                            </div>
                            <div class="form-group" id="pw">
                                <label for="password"><b>密碼</b></label>
                                <input type="password" class="form-control" id="m_password" name="m_password" placeholder="請輸入密碼" minlength="8" maxlength="20" required>
                                <span class="smalltext">  請填入 8 ~ 20 個字元以內的英文字母、數字、以及各種符號組合。</span>
                            </div>
                            <div class="form-group" id="cpw">
                                <label for="confirm_password"><b>確認密碼</b></label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="請再次輸入密碼" minlength="8" maxlength="20" required>
                            </div>
                            <hr size="1">
                            <h3>
                                <font color="#004D99" face="微軟正黑體"><b>會員資料</b></font>
                            </h3>
                            <div class="form-group">
                                <label for="last_name"><b>姓氏</b></label>
                                <input type="text" class="form-control" id="m_last_name" name="m_last_name" placeholder="請輸入您的姓氏" required>
                            </div>
                            <div class="form-group">
                                <label for="first_name"><b>名字</b></label>
                                <input type="text" class="form-control" id="m_first_name" name="m_first_name" placeholder="請輸入您的名字" required>
                            </div>
                            <div class="form-group">
                                <label for="stdid"><b>學號</b></label>
                                <input type="text" class="form-control" id="m_stdid" name="m_stdid" placeholder="請輸入您的學號" maxlength="10" required>
                            </div>
                            <div class="form-group">
                                <label for="subject"><b>系所</b></label>
                                <select name="m_subject" id="m_subject" required>
                                    <option value="">請選擇</option>
                                    <option value="1">廣電系</option>
                                    <option value="2">新聞系</option>
                                    <option value="3">公廣系</option>
                                    <option value="4">圖傳系</option>
                                    <option value="5">資傳系</option>
                                    <option value="6">口傳系</option>
                                    <option value="7">傳管系</option>
                                    <option value="8">數媒系</option>
                                    <option value="9">資管系</option>
                                    <option value="10">企管系</option>
                                    <option value="11">觀光系</option>
                                    <option value="12">英語系</option>
                                    <option value="13">日文系</option>
                                    <option value="14">行管系</option>
                                    <option value="15">社心系</option>
                                    <option value="16">法律系</option>
                                    <option value="17">財經系</option>
                                    <option value="18">經濟系</option>
                                    <option value="19">中文系</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthday"><b>生日</b></label>
                                <input type="date" class="form-control" id="m_birthday" name="m_birthday" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><b>信箱</b></label>
                                <input type="email" class="form-control" id="m_email" name="m_email" placeholder="請輸入您的信箱" required>
                                <span class="smalltext">  Ex：example＠gmail.com </span>
                            </div>
                            <div class="form-group">
                                <label for="phone"><b>電話</b></label>
                                <input type="tel" class="form-control" id="m_phone" name="m_phone" placeholder="請輸入您的電話號碼" required>
                            </div>
                            <span class="smalltext"><font color="#FF0000">* </font><b>  以上均為必填欄位，請填寫您的真實資料，以免影響會員權益  </b> <font color="#FF0000"> *</font></span>
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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).on("ready", function () {
            $("#m_username").focus();
            $("#m_username").on("keyup", function () {
                var keyin_value = $(this).val();
                if (keyin_value != '') {
                    $.ajax({
                        type: "POST",
                        url: "php/check_username.php", 
                        data: {
                            'n': $(this).val()
                        },
                        dataType: 'html'
                    }).done(function (data) {
                        //成功的時候
                        if (data == "yes") {
                            $("#un").removeClass("has-error").addClass("has-success");
                            $("#register_form button[type='submit']").attr('disabled', false);
                        }
                        else if (data == "no") {
                            alert("帳號有重複，不可以註冊");
                            $("#mun").removeClass("has-success").addClass("has-error");
                            $("#register_form button[type='submit']").attr('disabled', true);
                        }

                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        alert("有錯誤產生，請看 console log。");
                        console.log(jqXHR.responseText);
                    });
                }
                else {
                    $("#un").removeClass("has-success").removeClass("has-error");
                    $("#register_form button[type='submit']").attr('disabled', false);
                }
            });
            $("#register_form").on("submit", function () {
                if ($("#m_password").val() != $("#confirm_password").val()) {
                    $("#pw").addClass("has-error"); $("#cpw").addClass("has-error");
                    alert("兩次密碼輸入不一樣，請確認");
                }
                else {
                    $.ajax({
                        type: "POST",
                        url: "php/add_user.php",
                        traditional: true,
                        data: {
                            'un': $("#m_username").val(), //使用者帳號
                            'pw': $("#m_password").val(), //使用者密碼
                            'last': $("#m_last_name").val(), //姓氏
                            'first': $("#m_first_name").val(), //名字
                            'id': $("#m_stdid").val(), //學號
                            'sub': $("#m_subject").val(), //系所
                            'bir': $("#m_birthday").val(), //生日
                            'email': $("#m_email").val(), //信箱
                            'phone': $("#m_phone").val() //電話
                        },
                        dataType: 'html'
                    }).done(function (data) {
                        //成功的時候
                        console.log(data);
                        if (data == 'yes') {
                            alert("註冊成功，歡迎成為SHUSTART的一員！");
                            window.location.href = "admin/index.php";
                        }
                        else if (data == "no") {
                            alert("註冊失敗，請確認網路連線或與系統人員聯繫！");
                        }
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        //失敗的時候
                        alert("有錯誤產生，請看 console log");
                        console.log(jqXHR.responseText);
                    });
                }
                return false;
            });
        });

    </script>
    <?php include_once 'footer.php'?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.sequence-min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/main-menu.js"></script>
    <script src="js/template.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
</body>
</html>
