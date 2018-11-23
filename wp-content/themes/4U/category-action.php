<?php get_header(); ?>
<main class="main">
	<div class="all-news__container news">
		<h1 class="page-title"><?single_cat_title()?></h1>
		<?php /*<div class="other_category">
			<span><?php echo __('Категория 1'); ?></span>
			<a href="/diary/"><?php echo __('Категория 2'); ?></a>
			<a href="/smi/"><?php echo __('Категория 3'); ?></a>
		</div>*/?>
		<div class="clr"></div>
		<div class="all_news">
			<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<div class="all_news_item">
				<a href="<?php the_permalink(); ?>" style="background:url(<?the_field('field_5ab89de8fa342');?>);" class="all_news_img"></a>
				<a href="<?php the_permalink(); ?>"><h3 class="all_news_title"><?php the_title(); ?></h3></a>
				<div class="all_news_b">
					<p><?echo get_the_date('j.n.Y'); ?></p>
					<a href="<?php the_permalink(); ?>"><?php _e('[:ru]Читать[:ua]Читати[:]', 'rayon2'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?> 