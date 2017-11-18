<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; 2017 Your Company Name

                | Designed by <a rel="nofollow" href="https://github.com/PedroNisa/" target="_parent">Pedro Miranda Nisa</a></p>
        </div>
    </div>
</footer>
{{ HTML::script('js-front/jquery-1.11.2.min.js') }}     		<!-- jQuery -->
{{ HTML::script('js-front/moment.js') }}	<!-- moment.js-front -->
{{ HTML::script('js-front/bootstrap.min.js') }}				<!-- bootstrap js-front -->
{{ HTML::script('js-front/bootstrap-datetimepicker.min.js') }}<!-- bootstrap date time picker js-front, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
{{ HTML::script('js-front/jquery.flexslider-min.js') }}

{{ HTML::script('js-front/templatemo-script.js') }}
<script>
    // HTML document is loaded. DOM is ready.
    $(function() {

        $('#hotelCarTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

        $('.date').datetimepicker({
            format: 'MM/DD/YYYY'
        });
        $('.date-time').datetimepicker();

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
</script>


</body>
</html>