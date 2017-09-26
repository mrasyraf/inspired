
<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/jquery.redirect.js"></script>


<!-- Toastr -->
<script src="js/plugins/toastr/toastr.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="plugin/bootbox/bootbox.min.js"></script>

<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>

<!--slick-->
<script type="text/javascript" src="plugin/slick/slick.min.js"></script>

<!-- Idle Timer plugin -->
<script src="js/plugins/idle-timer/idle-timer.min.js"></script>

<script src="js/component.js"></script>
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            setTimeout(function () {
                $("div").removeClass("animationload");
            }, 1300);
        });
    })(jQuery);
</script>

<script>


    $(document).ready(function () {

        // Set idle time
        $(document).idleTimer(900000);

    });

    $(document).on("idle.idleTimer", function (event, elem, obj) {
        event.preventDefault(); 
        event.stopPropagation(); 
        
        bootbox.confirm("Sesi anda telah tamat. Anda ingin sambung sesi ini?",function(result){
            if(!result) {
                $.redirect("logout.php");
            } 
        });
    });

    $(document).on("active.idleTimer", function (event, elem, obj, triggerevent) {
        // function you want to fire when the user becomes active again
        toastr.clear();
        $('.custom-alert').fadeOut();
        toastr.success('Great that you decided to move a mouse.', 'You are back. ');



    });
</script>