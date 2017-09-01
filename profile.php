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

<!--breadcrumb-->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Profile</h2>
        <ol class="breadcrumb">
            <li class="active">
                <a href="index.php"><i class="fa fa-home"></i></a>
            </li>
            <li>
                <a>Profile</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<!--content-->
<div class="wrapper wrapper-content animated fadeInDown">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox-title">
                <h5><i class="fa fa-user"></i>&nbsp;Profile</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
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
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <strong></strong> 
                            </td>
                            <td>
                                <button data-toggle="modal" href="#modal-form" class="btn btn-sm btn-primary pull-left m-t-n-xs" id="update"><strong>Update Profile</strong></button>
                                &nbsp;
                                <button class="btn btn-sm btn-danger  m-t-n-xs" id="change" onclick="change()"><i class='fa fa-key'>&nbsp;Change</i></button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox-title">
                <h5><i class="fa fa-truck"></i> Shipment Address</h5>
                <div class="ibox-tools">
                    <a onclick="addAddress()">
                        <i class="fa fa-plus-square"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <table class="table table-striped" width="100%">
                        <thead>
                            <tr>
                                <td width="5%">

                                </td>
                                <td width="10%">
                                    <strong>Bil</strong>
                                </td>
                                <td width="25%">
                                    <strong>Name</strong>
                                </td>
                                <td width="20%">
                                    <strong>Contact No.</strong>
                                </td>
                                <td>
                                    <strong>Address</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <tr>
                                    <td>
                                        <input class="i-checks" type="radio" value="<?php echo $i ?>" id="checkAddress" name="checkAddress">
                                    </td>
                                    <td>
                                        <?php echo $i + 1; ?>
                                    </td>
                                    <td style="vertical-align: top">
                                        Asyraf Sumail
                                    </td>
                                    <td style="vertical-align: top">
                                        +6017-7484636
                                    </td>
                                    <td style="vertical-align: top">
                                        1 Jln Legenda 6, Taman Legenda<br>85300 Segamat, Johor
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!--modal-->
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Update Profile</h3>

                        <form id="formUpdate">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Name</label> 
                                <div class="col-sm-9">
                                    <input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_name" name="apus_name" value="<?php echo $name ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Email</label> 
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="apus_email" name="apus_email" value="<?php echo $email ?>">
                                    <!--<span class="help-block m-b-none">abc@example.com</span>-->
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Phone No.</label> 
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="apus_phone_no" name="apus_phone_no" value="<?php echo $phone ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Address</label> 
                                <div class="col-sm-9">
                                    <input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_address" name="apus_address" value="<?php echo $address ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Postcode</label> 
                                <div class="col-sm-4">
                                    <input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_postcode" name="apus_postcode" value="<?php echo $postcode ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">State</label> 
                                <div class="col-sm-9">
                                    <!--<input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_state" name="apus_state">-->
                                    <select class="form-control" id="apus_state">
                                        <?php
                                        $queryState = "select * from apms_malaysia_state order by apms_state_name";
                                        $resState = mysqli_query($conn, $queryState);
                                        while ($state = mysqli_fetch_assoc($resState)) {
                                            if ($stateCode == $state['apms_code']) {
                                                ?> 
                                                <option selected="selected" value="<?php echo $state['apms_code'] ?>"><?php echo $state['apms_state_name'] ?></option>
                                            <?php } else {
                                                ?>
                                                <option value="<?php echo $state['apms_code'] ?>"><?php echo $state['apms_state_name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label"></label> 
                                <div class="col-sm-9">
                                    <button class="btn btn-sm btn-white m-t-n-xs" type="button" data-dismiss="modal" ><strong><i class="fa fa-times"></i>&nbsp;Cancel</strong></button>
                                    <button class="btn btn-sm btn-primary m-t-n-xs" type="button" onclick="updateProfile()"><strong><i class="fa fa-save"></i>&nbsp;Update</strong></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    function change() {
        bootbox.confirm("Change Password ?", function (result) {
            if (result == true) {
                alert("change password");
            }
        });
    }

    function updateProfile() {
        $.post("ajax/ajax_profile.php", $("#formUpdate").serialize(), function (result) {
            if (result === "1") {
                bootbox.alert("Profie Update Successful.", function () {
//                    $.redirect("index.php");
                });
            } else if (result === "0") {
                bootbox.alert("Profie Update Unsuccessful.");
            } else {
                bootbox.alert(result);
            }
        });
    }

    function addAddress() {
        bootbox.alert("Add Shipment Address");
    }

    $(function () {
        $('.i-checks').click(function () {
            if ($(this).is(':checked'))
            {
                var idAddress = $(this).val();
                //update selected shipment address
                $.post("ajax/ajax_profile.php", {action : "updateAddress", id : idAddress }, function (result) {
//                    bootbox.alert(result);
                });
            }
        });
    });


</script>