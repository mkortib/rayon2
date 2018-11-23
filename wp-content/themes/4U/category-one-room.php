<?php get_header(); ?>


<!-- Main content container start -->
<main class="main">
    <div class="about__text-wrapper">
        <section class="layouts-content-top">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
            <div class="filters">
                <div class="layouts-menu">
                    <?php
                    wp_nav_menu( array(
                        'container'      => false,
                        'echo'           => true,
                        'depth'          => 0,
                        'items_wrap'     => '%3$s',
                        'menu'           => 'layouts'
                    ) );
                    ?>
                </div>
                <div class="layouts-squere">
                     <h2><?php _e('[:ru]Площадь, м[:ua]Площа, м[:]', 'rayon2'); ?><sup>2</sup></h2>
                    <form>
                        <input type="number" name="min_square" placeholder="<?php _e('[:ru]от[:ua]від[:]', 'rayon2'); ?>" value="<?php if (isset($_GET['min_square'])) { echo $_GET['min_square']; } ?>">
                        <input type="number" name="max_square" placeholder="<?php _e('[:ru]до[:ua]до[:]', 'rayon2'); ?>" value="<?php if (isset($_GET['max_square'])) { echo $_GET['max_square']; } ?>">
                        <div class="layouts-squere_buttons">
                            <a href="/category/layouts/" class="reset">
                                <?php echo __('&#1057;&#1073;&#1088;&#1086;&#1089;&#1080;&#1090;&#1100; &#1092;&#1080;&#1083;&#1100;&#1090;&#1088;'); ?>
                            </a>
                            <div class="layouts-submit">
                                <input type="submit" value="<?php _e('[:ru]Применить[:ua]Застосувати[:]', 'rayon2'); ?>" class="btn">
                            </div>
                        </div>
                    </form>
                </div>
				<div class="clr"></div>
            </div>
			<div class="clr"></div>
        </section>
		
		<div class="content__wrapper about__content-wrapper">
			<div class="layouts-content">
				<section class="layouts_border">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$flats = new WP_Query( array (
						'cat'            => 7,
						'posts_per_page' => -1,
						'paged'          => $paged,
						'order'          => 'ASC',
						'orderby'        => 'date'
					) );
					function status()  {
						echo (get_field('status') == 'true') ? ('sold') : null;
					}
					?>
						<?php
						if ($_GET && !empty($_GET)) : go_filter(); endif;
						if ( have_posts() ) :
							while ( $flats->have_posts() ) :
								$flats->the_post(); ?>
						
							   <div class="single-layout">
											<a href="<?php echo get_permalink(); ?>" class="img_w flex <?php status(); ?>"><div class="single-layout-img-min"><img src="<?php $img = get_field('img_preview'); echo $img['url']; ?>"></div></a>
											<a href="<?php echo get_permalink(); ?>" ><h3><?php echo esc_html( get_the_title()); ?></h3></a>
                                            <div class="info">
                                       <p><?php echo _e('[:ru]Общая[:ua]Загальна[:]', 'rayon2') .': '
									                 . get_field('total_area') .' '; ?>м<sup>2</sup>
                                           - <?php echo _e('[:ru]Жилая[:ua]Житлова[:] ', 'rayon2') .': '
										                . get_field('dwelling_place') .' '; ?>м<sup>2</sup></p>
                                       <p><?php echo get_field('section') . ' ' . __('[:ru]секция[:ua]секція[:]'); ?>
                                           - <?php echo get_field('floors') . ' ' . __('[:ru]этаж[:ua]поверх[:]'); ?></p>
                                   </div>
											<a href="<?php echo get_permalink(); ?>" class="single-layout_btn_inner">
												<?php _e('[:ru]Подробнее[:ua]Докладніше[:]', 'rayon2'); ?>
											</a>
										</div>
							<?php endwhile;
						else : ?>
							<p class="e_message"><?php _e('[:ru]Извините, таких планировок нет[:ua]Вибачте, таких планувань немає[:]', 'rayon2'); ?></p>
						<?php endif;
						if ( function_exists( 'wp_pagenavi' ) ) : wp_pagenavi(array('query' => $flats));
						endif;
						wp_reset_postdata();?>
				</section>
			</div>
			
		</div>
	</div>
</main>
<!-- Main content container end -->


<?php get_footer(); ?> 