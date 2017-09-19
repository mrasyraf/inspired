<?php
include 'config/general_config.php';
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
    header('Location: login.php');
}
$username = $_SESSION['username'];
?>
<?php include 'header.php'; ?>
<style>
    .style_prevu_kit
    {
        display:inline-block;
        border:0;
        width:196px;
        height:210px;
        position: relative;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1); 
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1); 
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1);
        transition: all 200ms ease-in;
        transform: scale(1);   

    }
    .style_prevu_kit:hover
    {
        box-shadow: 0px 0px 150px #000000;
        z-index: 2;
        -webkit-transition: all 200ms ease-in;
        -webkit-transform: scale(1.5);
        -ms-transition: all 200ms ease-in;
        -ms-transform: scale(1.5);   
        -moz-transition: all 200ms ease-in;
        -moz-transform: scale(1.5);
        transition: all 200ms ease-in;
        transform: scale(1.5);
    }
</style>
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
                <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>

                <div align="center">
                    <div style="width:1000px;">

                        <div class="style_prevu_kit" style="background-color:#cb2025;"></div>
                        <div class="style_prevu_kit" style="background-color:#f8b334;"></div>
                        <div class="style_prevu_kit" style="background-color:#97bf0d;"></div>
                        <div class="style_prevu_kit" style="background-color:#00a096;"></div>
                        <div class="style_prevu_kit" style="background-color:#93a6a8;"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

<script type="text/javascript">

</script>