<?php include 'config/general_config.php'; ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title># | Pendaftaran</title>
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
        
        <!-- Ladda style -->
        <link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">

    </head>

    <body class="login-blue">

        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>

                    <h1 style="color: white" class="logo-name"><img width="150px" height="150px" src="img/logo.png" /></h1>

                </div>
                <h3>Daftar akaun</h3>
                <p>Daftar akaun untuk mulakan gaya hidup sihat</p>
                <form class="m-t" role="form" id="formRegister">
                    <input type="hidden" id="action" name="action" value="register">
                    <div class="form-group">
                        <input style="text-transform: uppercase" type="text" class="form-control" placeholder="nama" required id="apus_name" name="apus_name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="EMEL" required id="apus_email" name="apus_email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="KATA LALUAN" required id="apus_password" name="apus_password">
                        <div class="pwstrength_viewport_verdict"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NO. TELEFON BIMBIT" required id="apus_phone_no" name="apus_phone_no">
                    </div>
                    <div class="form-group">
                        <input style="text-transform: uppercase" type="text" class="form-control" placeholder="ALAMAT" required id="apus_address" name="apus_address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="POSKOD" required id="apus_postcode" name="apus_postcode">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="apus_state" name="apus_state" required>
                            <option value="">NEGERI</option>
                            <?php
                            $queryState = "select * from apms_malaysia_state order by apms_state_name";
                            $resState = mysqli_query($conn, $queryState);
                            while ($state = mysqli_fetch_assoc($resState)) {
                                ?>
                                <option value="<?php echo $state['apms_code'] ?>"><?php echo $state['apms_state_name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" id="submit" class="ladda-button btn btn-primary block full-width m-b" data-style="expand-right">Daftar</button>

                    <p class="text-muted text-center"><small>Sudah ada akauan?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="login.php">Log Masuk</a>
                </form>
                <p class="m-t"> <small>Inspired &copy; <a href="http://tsolution4u.com" target="_blank">theSolution4u</a> 2017</small> </p>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.redirect.js"></script>
        <script src="plugin/bootbox/bootbox.min.js"></script>
        
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <!-- Select2 -->
        <script src="js/plugins/select2/select2.full.min.js"></script>

        <!-- Password meter -->
        <script src="js/plugins/pwstrength/pwstrength-bootstrap.min.js"></script>

        <!-- Jquery Validate -->
        <script src="js/plugins/validate/jquery.validate.min.js"></script>
        
        <!-- Ladda -->
        <script src="js/plugins/ladda/spin.min.js"></script>
        <script src="js/plugins/ladda/ladda.min.js"></script>
        <script src="js/plugins/ladda/ladda.jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });

                $("#formRegister").validate({
                    rules: {
                        apus_password: {
                            required: true,
                            minlength: 5
                        },
                        apus_postcode: {
                         required: true,
                         number: true
                        },
                        apus_phone_no: {
                         required: true,
                         number: true
                        }
                    }
                });

                var options2 = {};
                options2.ui = {
                    container: "#pwd-container2",
                    showStatus: true,
                    showProgressBar: false,
                    viewports: {
                        verdict: ".pwstrength_viewport_verdict"
                    }
                };
                $('#apus_password').pwstrength(options2);

                $(function () {
                    $(document).off('submit').on('submit', '#formRegister', function (e) {
                        var l = $('#submit').ladda();
                        e.preventDefault();
                        l.ladda('start');
                        $.post("ajax/ajax_login.php", $("#formRegister").serialize(), function (result) {
                            l.ladda('stop');
                            if (result === "1") {
                                bootbox.alert("Pendaftaran Berjaya.", function () {
                                    $.redirect("login.php");
                                });
                            } else if (result === "0") {
                                bootbox.alert("Pendaftaran Tidak Berjaya.");
                            } else {
                                bootbox.alert(result);
                            }
                        });
                    });
                });
            });

        </script>
    </body>

</html>
