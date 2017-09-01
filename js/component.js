
var showProgressAjax = true;

var _loadingLogo = -1;
function ajaxindicatorstart(text) {
    if (!showProgressAjax)
        return;
    if (jQuery('body').find('#resultLoading').attr('id') !== 'resultLoading') {
        jQuery('body').append('<div id="resultLoading" style="display:none"><div><img id="loadingLogo" width="100px" src="/inspired/css/images/loading-2.gif"><br><span style="color: black"><strong>'+text+'</strong></span></div><div class="bg"></div></div>');
    }

    jQuery('#resultLoading').css({
        'width': '100%',
        'height': '100%',
        'position': 'fixed',
        'z-index': '10000000',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto'
    });
    jQuery('#resultLoading .bg').css({
//        'background': '#000000', //black
        'background': '#FFFFFF', //white
        'opacity': '0.7',
        'width': '100%',
        'height': '100%',
        'position': 'absolute',
        'top': '0'
    });
    jQuery('#resultLoading>div:first').css({
        'width': '250px',
        'height': '75px',
        'text-align': 'center',
        'position': 'fixed',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto',
        'font-size': '16px',
        'z-index': '10',
        'color': '#ffffff'
    });
    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
    _loadingLogo = 0.0;
//    setTimer();
}

var ubah = 0;
function setTimer() {
    setTimeout(function() {
        if(_loadingLogo == -1) {
            return false;
        }
        _loadingLogo += ubah;
        if(_loadingLogo >= 1.0) {
            ubah = -0.1;
        }
        if(_loadingLogo <= 0.0) {
            ubah = 0.1;
        }
        $("#loadingLogo").css("opacity",_loadingLogo);
        setTimer();
    }, 50);
}



function ajaxindicatorstop() {
    _loadingLogo = -1;
    if (!showProgressAjax)
        return;
    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
