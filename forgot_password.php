<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title># | Lupa Kata Laluan</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Ladda style -->
        <link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">

    </head>

    <body class="login-blue">

        <div class="passwordBox animated fadeInDown">
            <div class="row">

                <div class="col-md-12">
                    <div class="ibox-content">

                        <h2 class="font-bold">Lupa Kata Laluan</h2>

                        <p>
                            Sila masukkan emel anda dan kata laluan baru akan di emelkan kepada anda.
                        </p>

                        <div class="row">

                            <div class="col-lg-12">
                                <form class="m-t" role="form" id="formResetPassword">
                                    <input type="hidden" class="form-control" name="action" value="resetPassword"> 
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="EMEL" required id="apus_email" name="apus_email">
                                    </div>

                                    <button type="submit" id="submit" class="ladda-button btn btn-primary block full-width m-b" data-style="expand-right">Hantar kata laluan baru</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Inspired &copy; <a href="http://tsolution.com/" target="_blank">theSolution4u</a>
                </div>
                <div class="col-md-6 text-right">
                    <small>© 2017-<?php echo date("Y") ?></small>
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.redirect.js"></script>
        <script src="plugin/bootbox/bootbox.min.js"></script>

        <!-- Ladda -->
        <script src="js/plugins/ladda/spin.min.js"></script>
        <script src="js/plugins/ladda/ladda.min.js"></script>
        <script src="js/plugins/ladda/ladda.jquery.min.js"></script>
        
        <!-- Jquery Validate -->
        <script src="js/plugins/validate/jquery.validate.min.js"></script>
    </body>

</html>
<script type="text/javascript">
    
    $("#formResetPassword").validate({});
    $(function () {
        $(document).off('submit').on('submit', '#formResetPassword', function (e) {
            var l = $('#submit').ladda();
            e.preventDefault();
            l.ladda('start');
            $.post("ajax/ajax_login.php", $("#formResetPassword").serialize(), function (result) {
                l.ladda('stop');
                if (result === "1") {
                    bootbox.alert("Kata laluan telah diubah. Sila semak emel anda untuk kata laluan baru.", function () {
                        $.redirect("login.php");
                    });
                } else if (result === "0") {
                    bootbox.alert("Tidak berjaya. Sila cuba lagi.");
                } else if (result === "999") {
                    bootbox.alert("Emel tidak wujud.");
                } else {
                    bootbox.alert(result);
                }
            });
        });
    });
</script>