<?php get_header(); ?>
<main class="main">
	<div class="about about__content-wrapper">
		<div class="about__text-wrapper">
            <h1 class="page-title"><span style="margin:0 10px 10px 0;"></span><?php the_title(); ?><span style="margin:0 0 10px 10px;"></span></h1>
			<div class="about_1">
				<div class="about_1_l">
					<div class="about_1_quote"><?the_field('field_5ac45e94b23f6', 159);?></div>
					<div class="about_1_text"><?the_field('field_5ac45ea2b23f7', 159);?></div>
				</div>
				<div class="about_1_r">
					<div id="slides" class="about_1_img">
						<img class="slide showing" src="<?the_field('field_5b2fc7bf442f6')?>" />
						<? while ( have_rows('field_5b37bc0753263', 159) ) : the_row(); ?>
						<img class="slide" src="<?the_sub_field('field_5b37bc4153264')?>" />
						<? endwhile; ?> 
						<p><i id="next" class="fa fa-angle-right"></i></p>
					</div>
				</div>
				<div class="clr"></div>
			</div>
			
			<div class="about_2">
				<script>
					(function($) {
						$(function() {
							$('ol.tabs__caption').on('click', 'li:not(.active)', function() {
								$(this)
								.addClass('active').siblings().removeClass('active')
								.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
							});
						});
					})(jQuery);
					</script>
				<div class="tabs">
					<div class="tabs__content active">
						<img src="<?the_field('field_5b2e3001d68b1', 159);?>">
						<p><i id="prev1" class="fa fa-angle-left"></i><span class="space"></span><i id="next1" class="fa fa-angle-right"></i></p>
					</div>
					<? $id_prev=2; $id_next=2; while ( have_rows('field_5b2e3581748e3', 159) ) : the_row(); ?>
						<div class="tabs__content">
							<img src="<?the_sub_field('field_5b2e35a3748e4');?>">
							<p>
                                <i id="prev<?echo $id_prev++;?>" class="fa fa-angle-left"></i>
                                <span class="space"></span>
                                <i id="next<?echo $id_next++;?>" class="fa fa-angle-right"></i>
                            </p>
						</div>
					<? endwhile; ?> 	
					<div class="tabs__right">
						<h3><?the_field('field_5ac464896cbfd', 159);?></h3>
						<ol class="tabs__caption">
							<li id="li_1" class="active"><?the_field('field_5b2e3041d68b2', 159);?></li>
							<? $id_li=2; while ( have_rows('field_5b2e3581748e3', 159) ) : the_row(); ?>
							<li id="li_<?echo $id_li++;?>"><?the_sub_field('field_5b2e35af748e5');?></li>
							<? endwhile; ?> 
						</ol>
					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="about_3">
				<h3><?the_field('field_5ac4697ec92dc', 159);?></h3>
				<div class="about_3_tech">
					<? while ( have_rows('field_5b2e3b5bdf7fd', 159) ) : the_row(); ?>
						<div class="about_3_tech_item">
							<h4><?the_sub_field('field_5b2e3b76df7fe');?></h4>
							<span><?the_sub_field('field_5b2e3b87df7ff');?></span>
							<p><?the_sub_field('field_5b2e3b8ddf800');?></p>
							<div class="clr"></div>
						</div>
					<? endwhile; ?>
					<div class="clr"></div>
				</div>
			</div>
			<div class="about_4">
				<div class="sroom_question">
					<div class="sroom_question_l">
						<p class="sroom_question_l_title"><?php _e('[:ru]Остались вопросы?[:ua]Залишилися питання?[:]', 'rayon2'); ?></p>
						<p class="sroom_question_l_subtitle"><?php _e('[:ru]Задайте их нашему менеджеру[:ua]Задайте іх нашому менеджеру[:]', 'rayon2'); ?></p>
					</div>
					<div class="sroom_question_r"><?php if(qtrans_getLanguage() == "ua") {echo do_shortcode('[contact-form-7 id="818" title="Залишилися питання?"]');} else {echo do_shortcode('[contact-form-7 id="703" title="Остались вопросы?"]');} ?></div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 