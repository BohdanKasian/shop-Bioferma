jQuery(document).ready(function () {
    jQuery("#button-popup-form-right").click(function () {
        jQuery("#shadow-popup-form-right").addClass("b24-widget-button-show");
        jQuery("#button-popup-form-right").addClass("b24-widget-button-disable");
        jQuery("#bx24_form_container_14").addClass("open-sidebar");
    });

});
function popupRightClose() {
    document.getElementById('bx24_form_container_14').classList.remove( 'open-sidebar');
    jQuery("#shadow-popup-form-right").removeClass("b24-widget-button-show");
    jQuery("#button-popup-form-right").removeClass("b24-widget-button-disable");
}
jQuery(function($){
    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $("#bx24_form_container_14"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            popupRightClose();
        }
    });
});
