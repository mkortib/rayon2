
( function( $ ) {

    $(document).ready(function () {

        $(".close").on('click', function() {
            $('.popup_overlay').fadeOut();
        });
		
		$(".order_a_call").on('click', function() {
            $(".popup_order_a_call").fadeIn();
            $(".popup_overlay_order_a_call").fadeIn();
        });
		
		$(".write_to_view").on('click', function() {
            var name = "Планировка \"" + $(this).parent().attr('id') +"\"";
            $("input[name='layout-name']").attr("value", name);
            $(".popup_write_to_view").fadeIn();
            $(".popup_overlay_write_to_view").fadeIn();
        });

        $(".find_out_the_price").on('click', function() {
            var name = "Планировка \"" + $(this).parent().attr('id') +"\"";
            $("input[name='layout-name']").attr("value", name);
            $(".popup_find_out_the_price").fadeIn();
            $(".popup_overlay_find_out_the_price").fadeIn();
        });


       $('.popup_overlay').mousedown(function(e) {
            var clicked = $(e.target);
            if (clicked.is('.popup_write_to_view, .popup_find_out_the_price, .popup_order_a_call') ||
                clicked.parents().is('.popup_write_to_view, .popup_find_out_the_price, .popup_order_a_call')) {
                return;
            } else {
                $('.popup_overlay').fadeOut();
                $('.popup_write_to_view, .popup_find_out_the_price, .popup_order_a_call').fadeOut();
            }
        });

        $.when(
            $.getScript( "/wp-content/themes/4U/jscripts/jquery.viewportchecker.js" ),

        ).done(function(){
            $('.toanim').addClass("hidden")
                .viewportChecker({
                classToAdd: 'visible animated flipInX',
                offset: 0
            });

        });

        $('.flat-page').scroll(function(){
            console.log("hello");
            $('.toanim').viewportChecker({
                classToAdd: 'visible animated flipInX',
                offset: 70
            });
        });

        iter = 0;
        $('.slide-of-slider').each(function(){
            console.log(iter + '')
            $(this).attr('id', iter + '');
            iter++;
        });

        scrolled = 0;
        $(".right-slider-click").on('click', function() {
            scrolled += $('.slide-of-slider').width() + 90;
            var str = scrolled + 'px';
            $('.layouts-slider').scrollTo(str, 100, {axis:'x'});
        });

        $(".left-slider-click").on('click', function() {
            scrolled -= $('.slide-of-slider').width() + 90;
            var str = scrolled + 'px'
            $('.layouts-slider').scrollTo(str, 100, {axis:'x'});
        });

        $("#viber-choose").on('click', function() {
            $("input[value='viber']").prop("checked", true);
            /*allBackgroundClear();
            $(this).css('background-color', '#b9393f');*/
            $(".active-choose").removeClass("active-choose");
            $(this).addClass("active-choose");

        });

        $("#phone-choose").on('click', function() {
            $("input[value='phone']").prop("checked", true);
            /*allBackgroundClear();
            $(this).css('background-color', '#b9393f');*/
            $(".active-choose").removeClass("active-choose");
            $(this).addClass("active-choose");

        });

        $("#email-choose").on('click', function() {
            $("input[value='email']").prop("checked", true);
            /*allBackgroundClear();
            $(this).css('background-color', '#b9393f');*/
            $(".active-choose").removeClass("active-choose");
            $(this).addClass("active-choose");
        });

        function allBackgroundClear() {
            $("input[value='email']").css('background-color', "transparent");
            $("input[value='phone']").css('background-color', "transparent");
            $("input[value='viber']").css('background-color', "transparent");
        }

            /* Filter */
           /* docs.owlFilter(filter_data, function(_owl) {
                $(_owl).find('.item');
            });*/
        });


    $('#preloader').addClass('active');

    $(window).load(function () {
        $('#preloader').remove();
    });

} )( jQuery );


