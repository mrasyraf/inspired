<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Hashtag | Login</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body class="login-blue">

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>

                    <h1 style="color: white" class="logo-name">#</h1>

                </div>
                <h3>Welcome to Hashtag</h3>
                <p>Your trusted seller for healthcare product.
                </p>
                <p>Login in. To enter the journey of healthy life.</p>
                <form class="m-t" role="form" id="formLogin">
                    <div class="form-group">
                        <div class="input-group m-b">
                            <span class="input-group-addon">
                                <i class='fa fa-envelope-o'></i>
                            </span> 
                            <input type="email" class="form-control" placeholder="E-mail" required=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group m-b">
                            <span class="input-group-addon">
                                <i class='fa fa-key'></i>
                            </span> 
                            <input type="password" class="form-control" placeholder="Password" required="">
                        </div>
                    </div>
                    <button type="submit" id="submit" class="btn btn-success block full-width m-b">Login</button>

                    <a style="color: black" href="#"><small>Forgot password?</small></a>
                    <p style="color: black" class="text-muted text-center"><small>Do not have an account?</small></p>
                    <a style="color: black" class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                </form>
                <p class="m-t"> <small>Inspired &copy; <a href="http://solution4u.pe.hu/" target="_blank">Solution4u</a> 2017</small> </p>
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
        $(document).off('submit').on('submit', '#formLogin', function (e) {
            e.preventDefault();
            $(this).find(":submit").attr("data-loading-text", "<i class='fa fa-circle-o-notch fa-spin'></i>Analyzing your health...").button('loading');
            $.post("ajax/ajax_login.php", $("#formLogin").serialize(), function (result) {
                if (result === "1") {
                    bootbox.alert("Login Successful.", function () {
                        $.redirect("index.php");
                    });
                } else if (result === "0") {
                    bootbox.alert("Login Unsuccessful.");
                } else {
                    bootbox.alert(result);
                }
            });
        });
    });
</script>
