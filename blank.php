<?php
include 'config/general_config.php';
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
//    header('Location: login.php');
}
$username = $_SESSION['username'];
?>
<?php include 'header.php'; ?>

<!--breadcrumb-->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Blank</h2>
        <ol class="breadcrumb">
            <li class="active">
                <a href="index.php">Home</a>
            </li>
            <li>
                <a>Blank</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<!--content-->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-title">
                <h5>Blank Page</h5>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

<script type="text/javascript">
    
</script>