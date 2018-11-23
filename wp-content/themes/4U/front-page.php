<?php get_header(); ?>
<main class="main">
    <div class="main-slider__wrapper">
		<? while ( have_rows('field_5ab35463f48c1', 6) ) : the_row(); ?>
			<div class="main-slider__item" data-image="<?the_sub_field('field_5ab35474f48c2');?>"> </div>

		<? endwhile; ?>
    </div> 
	<div class="bg_opacity_slider"></div>
	<div class="home_callback callback__button order_a_call"><?php _e( '[:ru]Заказать звонок[:ua]Замовити дзвінок[:]', 'rayon2'); ?></div>
	<div class="clr"></div>
	<div class="home_info">
		<h2 class="home_title"><?the_field('field_5b2fba6912741');?></h2>
		<div class="home_room">
			<? while ( have_rows('field_5b2fb785ce5c3') ) : the_row(); ?>
			<div class="home_room_item">
				<a href="<?the_sub_field('field_5b2fb8dede321');?>">
					<h3><?the_sub_field('field_5b2fb7c3ce5c4');?></h3>
					<div></div>
					<p><?the_sub_field('field_5b2fb7d8ce5c5');?> <span><?php _e( '[:ru]предложений[:ua]пропозицій[:]', 'rayon2'); ?></span></p>
				</a>
			</div>
			<? endwhile; ?>
		</div>
		<div class="home_actions">
			<div class="home_actions_l"><span><?php _e( '[:ru]Акция[:ua]Акція[:]', 'rayon2' ); ?></span></div>
			<div class="home_actions_r"><?the_field('field_5b2fbb68c308a');?></div>
			<div class="clr"></div>
		</div>
	</div>
	<div class="usp-slider__wrapper">
		<? while ( have_rows('field_5ab35463f48c1', 6) ) : the_row(); ?>
			<a href="<?the_sub_field('field_5ab354b1f48c6');?>" class="usp-slider__item">
           
			</a>
		<? endwhile; ?>
        <div class="usp-slider__controls">
            <span class="usp-slider__next-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <div class="usp-slider__dots-container"></div>
			<div class="usp-slider__allslide">/<? while ( have_rows('field_5ab35463f48c1', 6) ) : the_row(); $i++; endwhile; echo $i; ?></div>
            <span class="usp-slider__prev-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        </div>
    </div>
</main>
<?php get_footer(); ?> 