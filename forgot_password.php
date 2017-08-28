<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title># | Forgot Password</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body class="login-blue">

        <div class="passwordBox animated fadeInDown">
            <div class="row">

                <div class="col-md-12">
                    <div class="ibox-content">

                        <h2 class="font-bold">Forgot password</h2>

                        <p>
                            Enter your email address and your password will be reset and emailed to you.
                        </p>

                        <div class="row">

                            <div class="col-lg-12">
                                <form class="m-t" role="form" id="formResetPassword">
                                    <input type="hidden" class="form-control" name="action" value="resetPassword"> 
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email address" required="" name="email">
                                    </div>

                                    <button type="submit" id="submit" class="btn btn-primary block full-width m-b">Send new password</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Inspired &copy; <a href="http://solution4u.pe.hu/" target="_blank">Solution4u</a>
                </div>
                <div class="col-md-6 text-right">
                    <small>© 2014-<?php echo date("Y") ?></small>
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.redirect.js"></script>
        <script src="plugin/bootbox/bootbox.min.js"></script>
    </body>

</html>
<script type="text/javascript">
    $(function () {
        $(document).off('submit').on('submit', '#formResetPassword', function (e) {
            e.preventDefault();
            $(this).find(":submit").attr("data-loading-text", "<i class='fa fa-circle-o-notch fa-spin'></i> Resetting...").button('loading');
            $.post("ajax/ajax_login.php", $("#formResetPassword").serialize(), function (result) {
                if (result === "1") {
                    bootbox.alert("Successful. A new password had been email to you.", function () {
                        $.redirect("login.php");
                    });
                } else if (result === "0") {
                    bootbox.alert("Unsuccessful. Please try again later.");
                } else {
                    bootbox.alert(result);
                }
            });
        });
    });
</script>