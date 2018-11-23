<?php get_header(); ?>
<? $post_title = get_the_title($post); $post_ID = get_the_ID(); ?>
<main class="main">
    <div class="all-news__container gallery">
        <h1 class="page-title"><?echo $post_title;?></h1>
        <div class="gallery_catalog">
			<?if (have_rows('field_5ab9e4ce0936a') !=''):?>
				<? while ( have_rows('field_5ab9e4ce0936a') ) : the_row(); ?>
					<div class="gallery_item">
						<a href="<?the_sub_field('field_5ab9e4da0936b');?>" data-fancybox="images" style="background-image: url(<?the_sub_field('field_5ab9e4da0936b');?>);"><div><i class="fa fa-search" aria-hidden="true"></i></div></a>
						<div class="gallery_info">
							<h4><?the_sub_field('field_5b2e4b83fa571');?></h4>
							<p><?php echo get_the_date('d.m.Y'); ?></p>
							<div class="clr"></div>
						</div>
					</div>
				<? endwhile; ?>
			<?endif;?>
			<div class="clr"></div>
        </div>
    </div>
</main>
<?php get_footer(); ?> 