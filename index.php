<?php
include 'config/general_config.php';
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
//    header('Location: login.php');
}
$username = $_SESSION['username'];

$name = "MUHAMMAD ASYRAF BIN SUMAIL";
$email = "mrdanielasyraf@gmail.com";
$phone = "+60177484636";
$address = "1, JLN LEGENDA 6, TMN LEGENDA,";
$postcode = "85300";
$state = "JOHOR";
$stateCode = 1;
$lastvisit = date("d/m/Y h:i:s A");
?>
<?php include 'header.php'; ?>

<div class="row  border-bottom white-bg dashboard-header">
    <div class="col-md-4">
        <h2>Welcome</h2>
        <table class="table profile-table" width="100%">
            <tr>
                <td width="30%">
                    <strong>Name</strong>
                </td>
                <td  width="1%">
                    <strong>:</strong> 
                </td>
                <td>
                    <?php echo $name ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Home Address</strong>
                </td>
                <td>
                    <strong>:</strong> 
                </td>
                <td>
                    <?php echo $address ?><br><?php echo $postcode . " " . $state ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>E-mail</strong>
                </td>
                <td>
                    <strong>:</strong> 
                </td>
                <td>
                    <?php echo $email ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Phone No.</strong>
                </td>
                <td>
                    <strong>:</strong> 
                </td>
                <td>
                    <?php echo $phone ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Last Visit</strong>
                </td>
                <td>
                    <strong>:</strong> 
                </td>
                <td>
                    <?php echo $lastvisit ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Password</strong>
                </td>
                <td>
                    <strong>:</strong> 
                </td>
                <td>
                    <table>
                        <tr>
                            <td width="55%">*********** </td>
                            <td style="text-align: right">
                                <a href="#" class="btn btn-xs btn-danger btn-block"><i class='fa fa-key'>&nbsp;Change</i></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-7">
        <div class="statistic-box">
            <h4>
                Latest Purchased
            </h4>
            <div class="col-md-4">
                <div class="row text-left">
                    <img alt="image" width="150" height="150" class="img-circle" src="img/products/headphones.jpg" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="row text-left">
                    <small>
                        <table class="table table-striped" width="100%">
                            <tr>
                                <td  width="30%">
                                    <strong>Order ID</strong> 
                                </td>
                                <td  width="1%">
                                    <strong>:</strong> 
                                </td>
                                <td>
                                    #JSE9084
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Product</strong> 
                                </td>
                                <td>
                                    <strong>:</strong> 
                                </td>
                                <td>
                                    Mineral Coffe
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Quantity</strong> 
                                </td>
                                <td>
                                    <strong>:</strong> 
                                </td>
                                <td>
                                    2
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Status</strong> 
                                </td>
                                <td>
                                    <strong>:</strong> 
                                </td>
                                <td>
                                    Processing
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tracking No.</strong> 
                                </td>
                                <td>
                                    <strong>:</strong> 
                                </td>
                                <td>

                                </td>
                            </tr>
                        </table>
                    </small>
                </div>
            </div>
            <div class="col-md-2">

            </div>

        </div>
    </div>

</div>

<!--content-->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="contact-box center-version">

                <a href="profile.html">

                    <img alt="image" width="150" height="150" class="img-circle" src="img/products/headphones.jpg" />


                    <h3 class="m-b-xs"><strong>Body Shampoo</strong></h3>

                    <div class="font-bold">RM 25.00</div>
                    <address class="m-t-md">
                        <strong>Product Description</strong><br>
                        Description
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3">
            <div class="contact-box center-version">

                <a href="profile.html">

                    <img alt="image" width="150" height="150" class="img-circle" src="img/products/headphones.jpg" />


                    <h3 class="m-b-xs"><strong>Hair Shampoo</strong></h3>

                    <div class="font-bold">RM 23.00</div>
                    <address class="m-t-md">
                        <strong>Product Description</strong><br>
                        Description
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3">
            <div class="contact-box center-version">

                <a href="profile.html">

                    <img alt="image" width="150" height="150" class="img-circle" src="img/products/headphones.jpg" />


                    <h3 class="m-b-xs"><strong>Marine Soap</strong></h3>

                    <div class="font-bold">RM 45.00</div>
                    <address class="m-t-md">
                        <strong>Product Description</strong><br>
                        Description
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3">
            <div class="contact-box center-version">

                <a href="profile.html">

                    <img alt="image" class="img-circle" src="img/products/headphones.jpg" />


                    <h3 class="m-b-xs"><strong>Mineral Coffee</strong></h3>

                    <div class="font-bold">RM 18.00</div>
                    <address class="m-t-md">
                        <strong>Product Description</strong><br>
                        Description
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Your #1 Store', 'Welcome to #');
        }, 1300);
    });
</script>