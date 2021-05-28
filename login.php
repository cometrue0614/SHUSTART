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
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/icon.png" />
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

    <?php include_once 'menu.php'?>

    <div class="main">
        <div class="homepage-slider">
            <div class="container">
                <table width="500" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr valign="top">
                        <td class="tdrline">
                            <h2>
                                <font color="#FF2400"><center><strong>Login</strong></center></font>
                            </h2>
                            <form method="POST" name="login_form" id="login_form">
                                <div class="form-group" id="un">
                                    <label for="username">帳號</label>
                                    <input type="text" class="form-control" id="m_username" name="m_username" placeholder="請輸入帳號" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input type="password" class="form-control" id="m_password" name="m_password" placeholder="請輸入密碼" required>
                                </div>
                                <button type="submit" class="btn btn-default"><center><b>登入</b></center></button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>

        $(document).on("ready", function () {
            $('#login_form').find("#m_username").focus()

            $("#login_form").on("submit", function () {

                $.ajax({
                    type: "POST",
                    url: "php/verify_user.php", 
                    data: {
                        'un': $('#login_form').find("#m_username").val(), //使用者帳號
                        'pw': $('#login_form').find("#m_password").val()  //使用者密碼
                    },
                    dataType: 'html' 
                }).done(function (data) {

                    console.log(data);
                    if (data == "yes") {
                        window.location.href = "admin/index.php"; 
                    }
                    else {
                        alert("登入失敗，請確認帳號密碼");
                    }

                }).fail(function (jqXHR, textStatus, errorThrown) {

                    alert("有錯誤產生，請看 console log");
                    console.log(jqXHR.responseText);
                });
                return false;
            });
        });
    </script>

    <!-- 頁底 -->
    <?php include_once 'footer.php';?>

    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  <!--1-->
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> <!--2-->
    <script src="js/bootstrap.min.js"></script> <!--3-->
    <script src="js/jquery.fitvids.js"></script> <!--4-->
    <script src="js/jquery.sequence-min.js"></script> <!--5-->
    <script src="js/jquery.bxslider.js"></script> <!--6-->
    <script src="js/main-menu.js"></script> <!--7-->
    <script src="js/template.js"></script> <!--8-->
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> <!--9-->
</body>
</html>
