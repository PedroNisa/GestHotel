/**
 * Created by miran on 11/11/2017.
 */


// HTML document is loaded. DOM is ready.
$(function() {

    $('#hotelCarTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })




    //formato y lenguaje español datapicker entrada
    $('.date-in').datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'es',
        minDate: moment(),

    });
    //extraemos la fecha de entrada y la convertimos en un objeto Date
    function mdate(){
        var from = $("#fechaEntrada").val().split("/");
        var f = new Date(from[2], from[1] - 1, parseInt(from[0])+1);
        return f;
    }

    //formato y lenguaje español datapicker salida
    $('.date-out').datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'es',
        minDate:mdate(),
    });



    // https://css-tricks.com/snippets/jquery/smooth-scrolling/
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

// Load Flexslider when everything is loaded.
$(window).load(function() {
    $('.flexslider').flexslider({
        controlNav: false
    });


});