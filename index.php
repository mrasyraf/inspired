<?php
include 'config/general_config.php';
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
    header('Location: login.php');
}
$username = $_SESSION['username'];
?>
<?php include 'header.php'; ?>

<!--content-->


<?php include 'script.php'; ?>

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