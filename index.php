<?php
include 'config/general_config.php';
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
    header('Location: shop.php');
}
$username = $_SESSION['username'];
$query = "select * from apus_user where apus_email = '" . $username . "' ";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

$qGetShippAdd = "select apsa_shipment_address.*, apus_name, apms_state_name as state from apsa_shipment_address 
inner join apus_user on apus_id = apsa_apus_id
inner join apms_malaysia_state on apms_id = apsa_state
where apsa_apus_id = '" . $data['apus_id'] . "'";
$resGetShippAdd = mysqli_query($conn, $qGetShippAdd);

$name = $data['apus_name'];
$email = $data['apus_email'];
$phone = $data['apus_phone_no'];
$address = $data['apus_address'];
$postcode = $data['apus_postcode'];
$state = getState($data['apus_state'], $conn);
$lastvisit = trim_tarikh_masa($data['apus_last_visit']);
$isPasswordDefault = $data['apus_is_default_password'];
?>
<?php include 'header.php'; ?>
<div class="alert alert-danger custom-alert" style="display: none">
    Your time is up. But you can move your mouse and get back to app.
</div>
<div class="row  border-bottom white-bg dashboard-header">

    <div class="col-md-4">
        <h2>Selamat Datang</h2>

        <table class="table profile-table" width="100%">
            <tr>
                <td width="30%">
                    <strong>Nama</strong>
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
                    <strong>Alamat Tetap</strong>
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
                    <strong>Emel</strong>
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
                    <strong>No. Telephone</strong>
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
                    <strong>Log Masuk Terakhir</strong>
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
                    <strong>Kata Laluan</strong>
                </td>
                <td>
                    <strong>:</strong> 
                </td>
                <td>*********** </td>
            <tr>
                <td>

                </td>
                <td>
                    <strong></strong> 
                </td>
                <td>
                    <button data-toggle="modal" href="#modal-form" class="btn btn-sm btn-primary pull-left m-t-n-xs" id="update"><strong>Kemaskini</strong></button>
                    &nbsp;
                    <button class="btn btn-sm btn-danger  m-t-n-xs" id="change" onclick="change()"><i class='fa fa-key'>&nbsp;Tukar</i></button>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-7">
        <div class="statistic-box">
            <h4>
                Pembelian Terakhir
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
                                    <strong>ID Pembelian</strong> 
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
                                    <strong>Produk</strong> 
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
                                    <strong>Kuantiti</strong> 
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
                                    <strong>No. Pengesanan</strong> 
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
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-truck"></i> Alamat Penghantaran</h5>
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
                                        <strong>Nama</strong>
                                    </td>
                                    <td width="20%">
                                        <strong>No. Telefon</strong>
                                    </td>
                                    <td>
                                        <strong>Alamat</strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                while ($shipAdd = mysqli_fetch_assoc($resGetShippAdd)) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td>
                                            <input class="i-checks" type="radio" value="<?php echo $shipAdd['apsa_id'] . "-" . $shipAdd['apsa_apus_id'] ?>" <?php if ($shipAdd['apsa_use_this'] == 1) { ?> checked="true" <?php } ?> id="checkAddress" name="checkAddress">
                                        </td>
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td style="vertical-align: top">
                                            <?php echo ucfirst($shipAdd['apsa_name']); ?>
                                        </td>
                                        <td style="vertical-align: top">
                                            <?php echo $shipAdd['apsa_phone_no']; ?>
                                        </td>
                                        <td style="vertical-align: top">
                                            <?php echo $shipAdd['apsa_address']; ?><br><?php echo $shipAdd['apsa_postcode'] . " " . $shipAdd['apsa_state']; ?>
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
</div>

<?php include 'footer.php'; ?>


<!--modal-->
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Kemaskini Profil</h3>

                        <form id="formUpdate">
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Nama</label> 
                                <div class="col-sm-9">
                                    <input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_name" name="apus_name" value="<?php echo $name ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Emel</label> 
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="apus_email" name="apus_email" value="<?php echo $email ?>">
                                    <!--<span class="help-block m-b-none">abc@example.com</span>-->
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">No. Telefon</label> 
                                <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" id="apus_phone_no" name="apus_phone_no" value="<?php echo $phone ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Alamat</label> 
                                <div class="col-sm-9">
                                    <input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_address" name="apus_address" value="<?php echo $address ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Poskod</label> 
                                <div class="col-sm-4">
                                    <input style="text-transform: uppercase" type="text" class="form-control input-sm" id="apus_postcode" name="apus_postcode" value="<?php echo $postcode ?>">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="col-sm-3 control-label">Negeri</label> 
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
                                    <button class="btn btn-sm btn-white m-t-n-xs" type="button" data-dismiss="modal" ><strong><i class="fa fa-times"></i>&nbsp;Batal</strong></button>
                                    <button class="btn btn-sm btn-primary m-t-n-xs" type="button" onclick="updateProfile()"><strong><i class="fa fa-save"></i>&nbsp;Simpan</strong></button>
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
    $(document).ready(function () {
        var password = "<?php echo $isPasswordDefault ?>";

        setTimeout(function () {
            ajaxindicatorstart("Please Wait...");
            alertDefaultPassword(password);
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Stokis pilihan ramai', 'Selamat Datang ke Healthylife4u');

        }, 1300);

        setTimeout(function () {
            ajaxindicatorstop();
        }, 1400);

        $('.auto-slide').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });

        $('.i-checks').click(function () {
            if ($(this).is(':checked'))
            {
                var idAddress = $(this).val();
                //update selected shipment address
                $.post("ajax/ajax_profile.php", {action: "updateAddress", id: idAddress}, function (result) {
                    console.log(result);
                });
            }
        });
    });

    function alertDefaultPassword(val) {
        if (val === 1 || val === '1') {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "progressBar": true,
                "preventDuplicates": false,
                "positionClass": "toast-top-right",
                "showDuration": "15000",
                "hideDuration": "15000",
                "timeOut": "15000",
                "extendedTimeOut": "15000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.options.onclick = function () {
                bootbox.confirm("Anda pasti untuk ubah kata laluan anda?", function (result) {
                    if (result) {
                        $.redirect("changePassword.php");
                    }
                });
            };
            toastr.error('Sila ubah kata laluan anda.');

        }
    }

    function change() {
        bootbox.confirm("Anda pasti untuk ubah kata laluan anda?", function (result) {
            if (result) {
                $.redirect("changePassword.php");
            }
        });
    }
    
    function addAddress() {
        bootbox.alert("Add Shipment Address");
    

</script>