<?php get_header(); ?>
<?
	$post_title = get_the_title( $post );
	$post_ID = get_the_ID();
	?>

<main class="main snews">
	<h1 class="page-title_m"><?php _e('[:ru]Акции[:ua]Акції[:]', 'rayon2');?></h1>
	<div class="single_news_prev"><?php previous_post_link('%link', '<i class="fa fa-angle-left" aria-hidden="true"></i> ' . __('[:ru]Предыдущая акция[:ua]Попередня акція[:]', 'rayon2'), true); ?></div>
	<div class="content__wrapper single_news" style="background:none;">
		<div style="background:#fff;">
			<div class="single_news_t">
				<p><?echo get_the_date('j.n.Y'); ?></p>
				<script type="text/javascript">(function() {
				  if (window.pluso)if (typeof window.pluso.start == "function") return;
				  if (window.ifpluso==undefined) { window.ifpluso = 1;
					var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
					s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
					s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
					var h=d[g]('body')[0];
					h.appendChild(s);
				  }})();</script>
				<div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>			
			</div>
			<h1 class="page-title"><?echo $post_title;?></h1>
			<div style="background:url(<?the_field('field_5ab89de8fa342');?>);" class="single_news_img"></div>
			<div class="single_news_text">
				<?php if( have_posts() ): while( have_posts() ): the_post();?><?php the_content();?><?php endwhile; endif;?>		
			</div>
		</div>
		<div class="sroom_question saction_question">
			<div class="sroom_question_l">
				<p class="sroom_question_l_title"><?php _e('[:ru]Остались вопросы?[:ua]Залишилися питання?[:]', 'rayon2');?></p>
				<p class="sroom_question_l_subtitle"><?php _e('[:ru]Задайте их нашему менеджеру[:ua]Задайте іх нашому менеджеру[:]', 'rayon2');?></p>
			</div>
			<div class="sroom_question_r">
				<?php if(qtrans_getLanguage() == "ua") {
					echo do_shortcode('[contact-form-7 id="823" title="Залишились питання? Акції"]');
				} else {
					echo do_shortcode('[contact-form-7 id="804" title="Остались вопросы? Акции"]');
				} ?>
			</div>
			<div class="clr"></div>
		</div>
	</div>
	<div class="single_news_next"><?php next_post_link('%link', __('[:ru]Следующая акция[:ua]Наступна акція[:]', 'rayon2') . ' <i class="fa fa-angle-right" aria-hidden="true"></i>', true); ?></div>
</main>

 

<?php get_footer(); ?> 