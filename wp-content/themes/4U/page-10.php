<?php get_header(); ?>
<main class="main">
	<div id="contact_map"><?the_field('field_5b30c86280de9');?></div>
	<div class="contact_time">
		<div class="contact_time_main">
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			<p><?php _e('[:ru]График работы отдела продаж:[:ua]Графік роботи відділу продажів:[:]', 'rayon2'); ?></p>
			<div class="clr"></div>
		</div>
		<? while ( have_rows('field_5b30ac656a068') ) : the_row(); ?>
		<div class="contact_time_other">
			<span><?the_sub_field('field_5b30ac826a069');?></span>
			<p><?the_sub_field('field_5b30ac8e6a06a');?></p>
		</div>
		<? endwhile; ?> 
		<div class="clr"></div>
	</div>
	<div class="home_callback contact_callback callback__button order_a_call"><?php _e('[:ru]Заказать звонок[:ua]Замовити дзвінок[:]', 'rayon2');?></div>
	<div class="contact_container">
		<div class="contact_address"><?the_field('field_5ab3c79cef9f4');?></div>
		<div class="contact_info">
			<div class="contact_info_l">
				<div>
					<span><?php _e('[:ru]Звоните[:ua]Дзвоніть[:]', 'rayon2'); ?></span>
					<p><a href="tel:<?the_field('field_5ab3c7e7ef9f6');?>"><?the_field('field_5ab3c7e7ef9f6');?></a></p>
					<p><a href="tel:<?the_field('field_5ab3d4855f18a');?>"><?the_field('field_5ab3d4855f18a');?></a></p>
				</div>
				<div>
					<span></span>
					<p><a href="tel:<?the_field('field_5ab3d4895f18b');?>"><?the_field('field_5ab3d4895f18b');?></a></p>
					<p><a href="tel:<?the_field('field_5b30bbe5642f6');?>"><?the_field('field_5b30bbe5642f6');?></a></p>
				</div>
			</div>
			<div class="contact_info_r">
				<span><?php _e('[:ru]или пишите[:ua]або пишіть[:]', 'rayon2'); ?></span>
				<p><a href="mailto:<?the_field('field_5b30bbf1642f7');?>"><?the_field('field_5b30bbf1642f7');?></a></p>
			</div>
			<div class="clr"></div>
		</div>
		<div class="sroom_question">
			<div class="sroom_question_l">
				<p class="sroom_question_l_title"><?php _e('[:ru]Остались вопросы?[:ua]Залишилися питання?[:]', 'rayon2'); ?></p>
				<p class="sroom_question_l_subtitle"><?php _e('[:ru]Задайте их нашему менеджеру[:ua]Задайте іх нашому менеджеру[:]', 'rayon2'); ?></p>
			</div>
			<div class="sroom_question_r"><?php if(qtrans_getLanguage() == "ua") {echo do_shortcode('[contact-form-7 id="818" title="Залишилися питання?"]');} else {echo do_shortcode('[contact-form-7 id="703" title="Остались вопросы?"]');} ?></div>
			<div class="clr"></div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 