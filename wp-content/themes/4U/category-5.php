<?php get_header(); ?>
<main class="main">
    <div class="all-news__container gallery">
        <h1 class="page-title"><?php _e('[:ru]Галерея[:ua]Галерея[:]', 'rayon2');?></h1>
        <div class="gallery_catalog">
			<?php
				global $post;
				$args = array('category' => 5, 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page' => '-1');
				$myposts = get_posts( $args );
			?>
			<?php
			foreach( $myposts as $post ){setup_postdata($post);?>
				<div class="gallery_item">
					<a href="<? the_permalink() ?>" style="background-image: url(<?the_field('field_5ab9e4b909369');?>);"></a>
					<div class="gallery_info">
						<h4><?php the_title(); ?></h4>
						<p><?php echo get_the_date('d.m.Y'); ?></p>
						<div class="clr"></div>
					</div>
				</div>
			<? } wp_reset_postdata(); ?>
		</div>
    </div>
</main>
<?php get_footer(); ?>   