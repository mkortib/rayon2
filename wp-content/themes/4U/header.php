<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
 
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
    <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/4U/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/4U/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/4U/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/4U/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/4U/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/4U/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/4U/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/4U/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/4U/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/4U/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/4U/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/4U/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/4U/img/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/4U/img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/wp-content/themes/4U/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
   <?/* <link rel="manifest" href="/wp-content/themes/4U/fav/manifest.json">*/?>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KM6TWSD');</script>
    <!-- End Google Tag Manager -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script defer src="/wp-content/themes/4U/jscripts/jquery.scrollTo.min.js"></script>
    <script defer src="/wp-content/themes/4U/jscripts/jquery.fancybox.min.js"></script>
<!--    <script defer src="/wp-content/themes/4U/jscripts/perfect-scrollbar.jquery.min.js"></script>-->
    <script defer src="/wp-content/themes/4U/jscripts/slick.min.js"></script>
    <script defer src="/wp-content/themes/4U/jscripts/ion.rangeSlider.min.js"></script>

    <script defer src="/wp-content/themes/4U/jscripts/jquery.countdown.js"></script>
    <script defer src="/wp-content/themes/4U/jscripts/jquery.circliful.min.js"></script>

    <script defer src="/wp-content/themes/4U/jscripts/jquery.maskedinput.min.js"></script>
    <script defer src="/wp-content/themes/4U/jscripts/formCheck.js"></script>

    <script defer src="/wp-content/themes/4U/jscripts/main.js"></script>

    <script defer src="/wp-content/themes/4U/jscripts/jquery.maskedinput.min.js"></script>
    <script defer src="/wp-content/themes/4U/jscripts/formCheck.js"></script>

	<?php if(is_page(10)): ?>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOtvTcJBaReo6aYkmP2f5p13KotQGZREU&callback=contactMap" type="text/javascript"></script>
        <script defer src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/markerwithlabel/src/markerwithlabel.js"></script>
        <script defer src="/wp-content/themes/4U/jscripts/infr_map.js"></script>
        <script defer src="/wp-content/themes/4U/jscripts/contact.js"></script>

	<?php endif; ?>

	<?php if(is_page(825)): ?>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOtvTcJBaReo6aYkmP2f5p13KotQGZREU&callback=infrMapall" type="text/javascript"></script>
        <script defer src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/markerwithlabel/src/markerwithlabel.js"></script>
        <script defer src="/wp-content/themes/4U/jscripts/infr_map.js"></script>
	<?php endif; ?>

    <link rel="stylesheet" type="text/css" href="/wp-content/themes/4U/css/animate.css" />
    <script defer src="/wp-content/themes/4U/jscripts/jquery.viewportchecker.js"></script>

    <script defer src="/wp-content/themes/4U/jscripts/functions_add.js"></script>
 
	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127997045-1"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127997045-1');
</script>

	
</head>
<body id="post-<?php the_ID(); ?>"> 
<header class="header">
	<a href="/" class="logo__link"><img src="/wp-content/uploads/2018/06/logo1.svg" alt="Логотип ЖК Район-2" class="logo__img"></a>
	<?php wp_nav_menu( array(
		'container_class' => '1111',
		'theme_location' => 'header_menu',
		'container' => 'ul',
		'menu_class'=> 'menu menu--closed'
	) ); ?>
	<div class="language"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
	<div class="header_callback callback__container">
        <a href="tel:<?the_field('field_5ab3555cb6f1c', 6);?>" class="callback__phone nord-roistat-phone495"><span><?the_field('field_5ab3555cb6f1c', 6);?></span><i class="fa fa-phone" aria-hidden="true"></i></a>
        <span class="callback__button order_a_call"><?php _e('[:ru]Заказать звонок[:ua]Замовити дзвінок[:]', 'rayon2'); ?></span>
    </div>
	<ul class="socs">
	<? while ( have_rows('field_5ab355abc05b2', 6) ) : the_row(); ?>
		<li><a href="<?the_sub_field('field_5ab355c9c05b4');?>" target="_blank"><img class="socs-img" src="<?the_sub_field('field_5ab355b8c05b3');?>" title="<?the_sub_field('field_5b2a4ebe8c227');?>" alt="<?the_sub_field('field_5b2a4ebe8c227');?>"><span><?the_sub_field('field_5b2a4ebe8c227');?></span></a></li>
	<? endwhile; ?>	 
	</ul>
    <div class="dev">
        <span>by</span>
        <a href="https://wsf.com.ua/" rel="nofollow" target="_blank">
            <img src="/wp-content/themes/4U/pic/design/wsff.svg" alt="Logo WSF">
        </a>
    </div>
</header>