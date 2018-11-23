var newsSize = function() {
	//All news container one height
	var newsContainerHeight = 0;

	$('.all-news__one-news-container').each(function() {
		var height = $(this).find('.all-news__one-news-content').height();

		if (height > newsContainerHeight) {
			newsContainerHeight = height + 50;
		}
	});

	$('.all-news__one-news-container').height(newsContainerHeight);

	//All news images
	$('.all-news__one-news-container').each(function() {
		var containerHeight = $(this).height();
		var innerImageWrapper = $(this).children('.all-news__one-news-image');
		var innerImage = $(this).find('.all-news__one-news-image > img').attr('src');

		$(innerImageWrapper).height(containerHeight);
		$(innerImageWrapper).css({'background-image' : 'url(\'' + innerImage + '\')'});
	});

	// //One news side image full height/width
	// $('.one-news__image').each(function() {
	// 	var containerImage = $(this).find('img').attr('src');

	// 	$(this).css({'background-image' : 'url(\'' + containerImage + '\')'});
	// });

	// //Tablet news image
	// $('.one-news__image').each(function() {
	// 	var containerImage = $(this).find('img').attr('src');

	// 	$('.one-news__tablet-image').css({'background-image' : 'url(\'' + containerImage + '\')'});
	// });
}

//One height for mortgage containers
function sameHeight(elem) {
	var height = 0;

	$(elem).each(function() {
		var eachHeight = $(this).height();

		if (eachHeight > height) {
			height = eachHeight;
		}
	})

	$(elem).height(height);
}

//Table header size 
function tableHeaderSize(elem) {

  var tdSize = $('.fix-table__th');

  for (var i = 0; i < tdSize.length; i++) {
    $(elem).eq(i).css('width', tdSize[i].offsetWidth);
  }
}

//Mortgage page scrollbar function

function mortgageScroll() {
	var windowHeight = $(window).height();
	var summaryHeight = $('.page-title').height() + $('.fix-table__wrapper').height() + $('.mortgage-table__wrapper').height() + $('.mortgage__section-wrapper').height() + $('.mortgage__section-wrapper--trade').height() + $('.mortgage__callback').height();

	if (windowHeight < summaryHeight) {
		$('.mortgage__content-wrapper').perfectScrollbar();
	}
}

$(document).ready(function() {

if($('.countDays').length>0 && $('.countHours').length>0 && $('.countMinutes').length>0  )
{
        var days = $('.countDays').html().replace(/<[^>]*>/g, "").replace(/\s+/g, '');
        var hours = $('.countHours').html().replace(/<[^>]*>/g, "").replace(/\s+/g, '');
        var minutes = $('.countMinutes').html().replace(/<[^>]*>/g, "").replace(/\s+/g, '');

        //$('.count__circle-container').eq(0).find('.count__circle-number').text(days);
        //$('.count__circle-container').eq(1).find('.count__circle-number').text(hours);
        //$('.count__circle-container').eq(2).find('.count__circle-number').text(minutes);

        var m_pers = 100/60;
        var h_pers = 100/24;
        var d_pers = 100-(days*100/15);	//100/50;

        $('.circlestat:eq(0)').attr('data-text', days*1);
        $('.circlestat:eq(1)').attr('data-text', hours*1);
        $('.circlestat:eq(2)').attr('data-text', minutes*1);

        $('.circlestat:eq(2)').attr('data-percent',m_pers*minutes);
        $('.circlestat:eq(0)').attr('data-percent',d_pers);
        $('.circlestat:eq(1)').attr('data-percent',h_pers*hours);

 $('.circlestat').circliful();


setInterval(function()
    {
        $('.circlestat').empty();
        var minutes = $('.circlestat:eq(2)').attr('data-text');
        var m_pers = 100/60;
        var hours   = $('.circlestat:eq(1)').attr('data-text');
        var h_pers = 100/24;
        var days    = $('.circlestat:eq(0)').attr('data-text');
        var d_pers = 100-(days*100/15);	//100/50;


            minutes = parseInt(minutes);
            hours   = parseInt(hours);
            days    = parseInt(days);

        minutes -= 1;
        if(minutes < 0)
            {
                minutes = 59;
                hours -= 1;
            }
        if(minutes < 10)
        {
            minutes = '0'+minutes;
        }
        $('.circlestat:eq(2)').attr('data-text',minutes);
        $('.circlestat:eq(2)').attr('data-percent',m_pers*minutes);

        if(hours < 0)
            {
                hours = 23;
                days -= 1;
            }
        $('.circlestat:eq(1)').attr('data-text',hours);
        $('.circlestat:eq(1)').attr('data-percent',h_pers*hours);
        $('.circlestat:eq(0)').attr('data-text',days);
        $('.circlestat:eq(0)').attr('data-percent',d_pers);


       $('.circlestat').circliful();
    },60000);

}
	/*sameHeight('.mortgage__section-wrapper--trade .mortgage__section-item');
	sameHeight('.mortgage__section-wrapper--time .mortgage__section-item');*/

	var windowWidth = $(window).width();

	var imageInit = function(elem) {
		$(elem).each(function() {
			var image = $(this).data('image');
			$(this).css({'background-image' : 'url(' + image + ')'});
		});
		return;
	}

	imageInit('.main-slider__item');
	imageInit('.content__slide-item');

	//Menu show-hide
    //$('.menu').toggleClass('menu--closed');
	$('.menu').click(function() {
		$(this).toggleClass('menu--closed');
	});

	//Main page news slider
	if($('.news__slider').length>0)
	{
	$('.news__slider').slick({
		autoplay: true,
		autoplaySpeed: 7200,
		draggable: false,
		arrows: true,
		dots: false,
		prevArrow: '.news__prev-arrow',
		nextArrow: '.news__next-arrow'
	});
}

      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
		 adaptiveHeight:true,
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 3000,
      });
 
 
	
	if($('.main-slider__wrapper').length>0)
	{
	//Main page bg slider
	$('.main-slider__wrapper').slick({
		slide: '.main-slider__item',
		autoplay: true,
		autoplaySpeed: 7200,
		draggable: false,
		arrows: false,
		dots: false,
		pauseOnHover: false,
		pauseOnFocus: false
	});
}
if($('.usp-slider__wrapper').length>0)
{
	//Main page USP slider
	$('.usp-slider__wrapper').slick({
		slide: '.usp-slider__item',
		autoplay: true,
		autoplaySpeed: 7200,
		draggable: false,
		arrows: true,
		prevArrow: '.usp-slider__next-arrow',
		nextArrow: '.usp-slider__prev-arrow',
		pauseOnHover: false,
		pauseOnFocus: false,
		dots: true,
		appendDots: '.usp-slider__dots-container',
		dotsClass: 'usp-slider__dot',
		asNavFor: '.main-slider__wrapper'
	});
}
	//About page slider
	$('.content__side-slider').slick({
    slide: '.content__slide-item',
    autoplay: true,
    autoplaySpeed: 7200,
		draggable: false,
		arrows: true,
		prevArrow: '.content__slider-next-arrow',
		nextArrow: '.content__slider-prev-arrow',
		pauseOnHover: false,
		pauseOnFocus: false
	});

	//Custom scroll 4 about page
	/*$('.about__text-wrapper').perfectScrollbar();

	//Custom scroll 4 mortgage page 
	$('.mortgage-table__wrapper').perfectScrollbar();

	//Custom scroll 4 all news page
	$('.all-news__scroll-wrapper').perfectScrollbar();

	//Custom scroll 4 all news page
	$('.flats__table-scroll-wrapper').perfectScrollbar();

	//Custom scroll 4 documents page
	$('.documents__scroll-wrapper').perfectScrollbar();

	//Scrollbar destroy 4 all-news
	if (windowWidth < 1024) {
		$('.all-news__scroll-wrapper').perfectScrollbar('destroy');
	}*/

	//Mortgage programm switcher
	$('.mortgage__switch-item').click(function() {
		var table = $(this).data('table');

		$('.mortgage__switch-item').removeClass('mortgage__switch-item--active');
		$(this).addClass('mortgage__switch-item--active');

		$('.mortgage-table').removeClass('mortgage-table--active');
		$('.mortgage-table--' + table).addClass('mortgage-table--active');
	});

	//Apartments filter switcher
	$('.apartments__filter-item').click(function() {
		$('.apartments__filter-item').removeClass('apartments__filter-item--active');
		$(this).addClass('apartments__filter-item--active');
	});

	//Location controls 
	$('.location__controls-item').click(function() {
		var active = 'location__controls-item--active';

		$('.location__controls-item').removeClass(active);
		$(this).addClass(active);
	});

	//Documents toggle 
	$('.documents__change-container-toggler').click(function() {
		var content = $(this).text();

		$(this).toggleClass('documents__change-container-toggler--active');

		if(content == 'Показать изменения') {
			$(this).text('Скрыть изменения');
		} else {
			$(this).text('Показать изменения');
		}

		$(this).siblings('.documents__change-container').toggle();
	});

	newsSize();

	//$("#space").ionRangeSlider({
    //type: "double",
    //min: 1,
    //max: 70,
    //from: 1,
    //to: 70,
    //hide_min_max: true,
    //hide_from_to: false,
    //grid: false
	//});
    //
	//$("#cost").ionRangeSlider({
    //type: "double",
    //min: 5,
    //max: 15,
    //from: 5,
    //to: 15,
    //hide_min_max: true,
    //hide_from_to: false,
    //grid: false
	//});

	mortgageScroll();

	if (windowWidth < 768) {
		$('.menu__link[href="/select-apart/"]').attr('href', '/saleall/');
	}

    if (windowWidth <= 414) {
		$('.block4-img').slick({
            autoplay: true,
            autoplaySpeed: 7200,
            draggable: false,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            pauseOnFocus: false
		});
	}


});

// setTimeout($('.one-news__image').each(function() {
// 	var containerImage = $(this).find('img').attr('src');

// 	$(this).css({'background-image' : 'url(\'' + containerImage + '\')'});
// }), 3600);

// setTimeout($('.one-news__image').each(function() {
// 	var containerImage = $(this).find('img').attr('src');

// 	$('.one-news__tablet-image').css({'background-image' : 'url(\'' + containerImage + '\')'});
// }), 3600);

//4 mobile and tablet versions
$(window).resize(function() {

	var windowWidth = $(window).width();

	if (windowWidth < 1400 && windowWidth > 767) {
		$('.participants__wrapper').perfectScrollbar();
	} else {
		$('.participants__wrapper').perfectScrollbar('destroy');
	}

	if (windowWidth < 767) {
		$('.flats__table-scroll-wrapper').perfectScrollbar('destroy');
	} else {
		$('.flats__table-scroll-wrapper').perfectScrollbar('enable');
	}

	if (windowWidth < 1024) {
		var image = $('.content__image-wrapper img').attr('src');
		$('.one-news__image-mobile').css({'background-image' : 'url(\'' + image + '\')'})
	} else {
		$('.one-news__image-mobile img').css({'display' : 'none'});
	}

	newsSize();

	tableHeaderSize('.flats__choose-table tbody tr td');
    tableHeaderSize('.mortgage-table tbody tr td');

  sameHeight('.mortgage__section-wrapper--trade .mortgage__section-item');
	sameHeight('.mortgage__section-wrapper--time .mortgage__section-item');

	mortgageScroll();
});

setTimeout(function() {
	tableHeaderSize('.flats__choose-table tbody tr td');
  tableHeaderSize('.mortgage-table tbody tr td');
}, 600);

//Setting attributes to svg on floor
var setAttr = function() {
	var image = $('.floor__image-container > svg');
	console.log(image);

	image.attr('width','100%');
}

//slider start

$('#next1').on('slides', function(){
$('#li_2').trigger('click'); 
});
$('#next2').on('slides', function(){
$('#li_3').trigger('click'); 
});
$('#next3').on('slides', function(){
$('#li_4').trigger('click'); 
});
$('#next4').on('slides', function(){
$('#li_5').trigger('click'); 
});
$('#next5').on('slides', function(){
$('#li_6').trigger('click'); 
});
$('#next6').on('click', function(){
$('#li_7').trigger('click'); 
});
$('#next7').on('click', function(){
$('#li_1').trigger('click'); 
});
$('#prev1').on('click', function(){
$('#li_7').trigger('click'); 
});
$('#prev2').on('click', function(){
$('#li_1').trigger('click'); 
});
$('#prev3').on('click', function(){
$('#li_2').trigger('click'); 
});
$('#prev4').on('click', function(){
$('#li_3').trigger('click'); 
});
$('#prev5').on('click', function(){
$('#li_4').trigger('click'); 
});
$('#prev6').on('click', function(){
$('#li_5').trigger('click'); 
});
$('#prev7').on('click', function(){
$('#li_6').trigger('click'); 
});

var slides = $('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,5000);
var next = $('#next');

function nextSlide() {
 goToSlide(currentSlide+1);
}

function goToSlide(n) {
 slides[currentSlide].className = 'slide';
 currentSlide = (n+slides.length)%slides.length;
 slides[currentSlide].className = 'slide showing';
}

next.on('click', function() {
 nextSlide();
});

//slider end