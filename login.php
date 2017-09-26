<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title># | Log Masuk</title>
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Ladda style -->
        <link href="css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body class="login-blue">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h1 style="color: white" class="logo-name"><img width="150px" height="150px" src="img/logo.png" /></h1>
                </div>
                <h3>Selamat datang ke healthylife4u</h3>
                <p>Stokis produk kesihatan yang boleh dipercayai.
                </p>
                <p>Log Masuk. Untuk mulakan amalan gaya hidup sihat.</p>
                <form class="m-t" role="form" id="formLogin">
                    <input type="hidden" class="form-control" name="action" value="login"> 
                    <div class="form-group">
                        <div class="input-group m-b">
                            <span class="input-group-addon">
                                <i class='fa fa-envelope-o'></i>
                            </span> 
                            <input type="text" class="form-control" placeholder="Emel" name="email" id="email"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group m-b">
                            <span class="input-group-addon">
                                <i class='fa fa-key'></i>
                            </span> 
                            <input type="password" class="form-control" placeholder="Kata laluan" name="password" id="password">
                        </div>
                    </div>
                    <button type="submit" id="submit" class="ladda-button btn btn-primary block full-width m-b" data-style="expand-right">Log Masuk</button>
                    <a style="color: whitesmoke" class="btn btn-sm btn-danger btn-block" href="forgot_password.php">Lupa Kata laluan?</a>
                    <a style="color: black" class="btn btn-sm btn-white btn-block" href="register.php">Belum ada akaun? Daftar akaun baru</a>
                </form>
                <p class="m-t"> <small>Inspired &copy; <a href="http://tsolution.com/" target="_blank">theSolution4u</a> 2017</small> </p>
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

    </body>

</html>
<script type="text/javascript">

    $(function () {
        $(document).off('submit').on('submit', '#formLogin', function (e) {
            var l = $('#submit').ladda();
            e.preventDefault();
            l.ladda('start');
            $.post("ajax/ajax_login.php", $("#formLogin").serialize(), function (result) {
                l.ladda('stop');
                if (result === "1") {
                    bootbox.alert("Log masuk berjaya.", function () {
                        $.redirect("index.php");
                    });
                } else if (result === "0") {
                    bootbox.alert("Log masuk tidak berjaya. Kata laluan tidak sama.");
                } else if (result === "999") {
                    bootbox.alert("Pengguna tidak wujud.")
                } else {
                    bootbox.alert(result);
                }
            });
        });
    });
</script>
