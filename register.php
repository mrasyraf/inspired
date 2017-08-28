<?php include 'config/general_config.php'; ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title># | Register</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plugins/select2/select2.min.css" rel="stylesheet">

    </head>

    <body class="login-blue">

        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">#</h1>

                </div>
                <h3>Register to get healthy</h3>
                <p>Create account to take an action.</p>
                <form class="m-t" role="form" action="login.php">
                    <div class="form-group">
                        <input style="text-transform: uppercase" type="text" class="form-control" placeholder="Name" required="" id="apus_name" name="apus_name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="EMAIL" required="" id="apus_name" name="apus_name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="PASSWORD" required="" id="apus_password" name="apus_password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="PHONE NO." required="" id="apus_phone_no" name="apus_phone_no">
                    </div>
                    <div class="form-group">
                        <input style="text-transform: uppercase" type="text" class="form-control" placeholder="Address" required="" id="apus_address" name="apus_address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="POSTCODE" required="" id="apus_postcode" name="apus_postcode">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="apus_state" name="apus_state">
                            <option value="">State</option>
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
                    <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                    <p class="text-muted text-center"><small>Already have an account?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
                </form>
                <p class="m-t"> <small>Inspired &copy; <a href="http://solution4u.pe.hu/" target="_blank">Solution4u</a> 2017</small> </p>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <!-- Select2 -->
        <script src="js/plugins/select2/select2.full.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    </body>

</html>
