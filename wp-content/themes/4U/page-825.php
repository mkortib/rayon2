<?php get_header(); ?>
<main class="main infrastructur">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div class="content-wrapper">
		<div class="infr_text"><?php the_content();?></div>
		<script>
			(function($) {
				$(function() {
					$('ul.infr_tabs__caption').on('click', 'li:not(.active)', function() {
						$(this)
						.addClass('active').siblings().removeClass('active')
						.closest('div.infr_tabs').find('div.infr_tabs__content').removeClass('active').eq($(this).index()).addClass('active');
					});
				});
			})(jQuery);
		</script>
		<div class="infr_tabs">
			<ul class="infr_tabs__caption">
				<li class="active"><?php _e('Все', 'rayon2');?></li>
				<li><img src="/wp-content/themes/4U/img/infr_icon_1.png" alt=""><?php _e('[:ru]Магазины[:ua]Магазини[:]', 'rayon2');?></li>
				<li><img src="/wp-content/themes/4U/img/infr_icon_2.png" alt=""><?php _e('[:ru]Остановки[:ua]Зупинки[:]', 'rayon2');?></li>
				<li><img src="/wp-content/themes/4U/img/infr_icon_3.png" alt=""><?php _e('[:ru]Парки[:ua]Парки[:]', 'rayon2');?></li>
				<li><img src="/wp-content/themes/4U/img/infr_icon_4.png" alt=""><?php _e('[:ru]Школы[:ua]Школи[:]', 'rayon2');?></li>
				<li><img src="/wp-content/themes/4U/img/infr_icon_5.png" alt=""><?php _e('[:ru]Детские садики[:ua]Дитячі садки[:]', 'rayon2');?></li>
			</ul>
			<div class="infr_tabs__content  active"><div id="infr_map_all"></div></div>
			<div class="infr_tabs__content"><div id="infr_map_shop"></div></div>
			<div class="infr_tabs__content"><div id="infr_map_halt"></div></div>
			<div class="infr_tabs__content"><div id="infr_map_park"></div></div>
			<div class="infr_tabs__content"><div id="infr_map_school"></div></div>
			<div class="infr_tabs__content"><div id="infr_map_child"></div></div>
		</div>
		
		
		

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?/*<div class="tabs">
				<div class="tabs__content active">
					<img src="<?the_field('field_5b2e3001d68b1', 159);?>">
				</div>
				<? while ( have_rows('field_5b2e3581748e3', 159) ) : the_row(); ?>
					<div class="tabs__content">
						<img src="<?the_sub_field('field_5b2e35a3748e4');?>">
					</div>
				<? endwhile; ?> 
				<div class="tabs__right">
					<h3><?the_field('field_5ac464896cbfd', 159);?></h3>
					<ol class="tabs__caption">
						<li class="active"><?the_field('field_5b2e3041d68b2', 159);?></li>
						<? while ( have_rows('field_5b2e3581748e3', 159) ) : the_row(); ?>
						<li><?the_sub_field('field_5b2e35af748e5');?></li>
						<? endwhile; ?> 
					</ol>
				</div>
				<div class="clr"></div>
			</div>*/?>
	</div>
</main>
<?php get_footer(); ?> 