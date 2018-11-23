<?php get_header(); ?>


<!-- Main content container start -->
<main class="main">

		<!---<h1 class="page-title"><?php the_title(); ?></h1>-->
        <div class="about__text-wrapper">
            <section class="single-top" style="font-size:18px;">
				<h2 class="sroom_cat"><?php _e('[:ru]Планировки[:ua]Планування[:]', 'rayon2');?></h2>
				<div class="sroom_nav">
					<?php
                        if (in_category('7')) : $hideCat = '8 and 9 and 1 and 4 and 5 and 3 and 14';
                        elseif (in_category('8')) : $hideCat = '7 and 9 and 1 and 4 and 5 and 3 and 14';
                        elseif (in_category('9')) : $hideCat = '7 and 8 and 1 and 4 and 5 and 3 and 14';
                        elseif (in_category('14')) : $hideCat = '7 and 8 and 1 and 4 and 5 and 3 and 9';
                        endif;
                        $prev_title = '<i class="fa fa-angle-left" aria-hidden="true"></i><span>' . __('[:ru]Предыдущая квартира[:ua]Попередня квартира[:]', 'rayon2') . '</span>';
                        $next_title = '<span>' . __('[:ru]Следующая квартира[:ua]Наступна квартира[:]', 'rayon2') . '</span><i class="fa fa-angle-right" aria-hidden="true"></i>';
                        /*previous_post_link('%link', $prev_title, 1, $hideCat);
                        next_post_link('%link', $next_title, 1, $hideCat);*/

                        $prev = get_previous_post_link( '%link', $prev_title, 1, $hideCat );
                        echo '<div class="sroom_nav_l">' . str_replace( '<a ', '<a class="prev-layout" ', $prev ) . '</div>';
						echo '<div class="sroom_nav_c">'; echo get_field('section') . ' ' . __('[:ru]секция[:ua]секція[:]', 'rayon2') . ' - ' . get_field('floors') . ' ' . __('[:ru]этаж[:ua]поверх[:]', 'rayon2');  echo '</div>';
                        $next = get_next_post_link('%link', $next_title, 1, $hideCat);
                        echo '<div class="sroom_nav_r">' . str_replace( '<a ', '<a class="next-layout" ', $next ) . '</div>';
                    ?>
				</div>
            </section>
            <div class="content__wrapper about__content-wrapper sroom_content">
				<div class="layouts-content">
					<?php
					if( current_user_can('editor') || current_user_can('administrator') ) :
						edit_post_link( __( 'Редактировать планировку &#9997;', 'wsf' ), '<span class="edit-link">', '</span>' );
					endif; ?>
					<section>
						<div class="sroom_content_l">
							<script>
								(function($) {
									$(function() {
										$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
											$(this)
											.addClass('active').siblings().removeClass('active')
											.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
										});
									});
								})(jQuery);
							</script>
							<div class="tabs  vertical">
								<div class="sroom_compas"><img src="/wp-content/themes/4U/pic/design/compas.png" alt="Компас"></div>
								<ul class="tabs__caption">
									<li class="active"><?php _e('2D', 'rayon2');?></li>
									<li class=""><?php _e('3D', 'rayon2');?></li>
								</ul>
								<div class="tabs__content active">
									<div class="layout-img">
										<div></div>
										<?php $img = get_field('img'); $img_full = get_field('img_full'); ?>
										<a href="<?php echo $img_full['url']; ?>" data-fancybox="group_11" class="<?php status(); ?>"><img class="layout-img" src="<?php echo $img['url']; ?>" alt="<?php _e('2D Схема планировки', 'rayon2');?>"></a>
									</div>
								</div>
								<div class="tabs__content">
									<div class="layout-img">
										<div></div>
										<a href="<?the_field('field_5b309452d6eaf');?>" data-fancybox="group_11" class="<?php status(); ?>"><img class="layout-img" src="<?the_field('field_5b309452d6eaf');?>" alt="<?php _e('[:ru]3D Схема планировки[:ua]3D Схема планування[:]' , 'rayon2');?>"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="sroom_content_r">
							<h1>
								<?php echo esc_html( get_the_title() ); ?>
							</h1>
							<div class="sroom_total_area"><?php echo the_field('total_area'); echo ' '. _e('м', 'rayon2'); ?><sup>2</sup></div>
							<div class="sroom_basic_total">
								<p><?php _e('[:ru]Жилая площадь[:ua]Житлова площа[:]', 'rayon2'); ?>
									<span><?php the_field('dwelling_place');
										echo ' ' . _e(' м', 'rayon2'); ?><sup>2</sup>
									</span>
								</p>
								<p><?php _e('[:ru]Общая квадратура[:ua]Загальна квадратура[:]','rayon2'); ?>
									<span><?php the_field('total_area');
										echo ' ' . _e(' м'); ?><sup>2</sup>
									</span>
								</p>
							</div>
							<div class="sroom_info">
                                <?php if ( get_field('hallway') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Прихожая[:ua]Передпокій[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('hallway'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('dressing_room') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Гардеробная[:ua]Вбиральня[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('dressing_room'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('bathroom_1') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Ванная комната[:ua]Ванна кімната[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('bathroom_1'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('bathroom_2') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Ванная комната[:ua]Ванна кімната[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('bathroom_2'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('wc') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Санузел[:ua]Санвузол[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('wc'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('kitchen') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Кухня[:ua]Кухня[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('kitchen'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('larder') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Кладовая[:ua]Комора[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('larder'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('hall') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Холл[:ua]Хол[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('hall'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('l_room-1') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Жилая комната[:ua]Житлова кімната[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('l_room-1'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('l_room-2') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Жилая комната[:ua]Житлова кімната[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('l_room-2'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('l_room-3') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Гостинная[:ua]Вітальня[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('l_room-3'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('studio_room') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Кухня-гостинная[:ua]Кухня-вітальня[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('studio_room'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('balcony') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Балкон[:ua]Балкон[:]', 'rayon2'); ?></p>
                                        <p><?php the_field('balcony'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('terrace') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Терраса[:ua]Тераса[:]', 'rayon2') . ' '; ?></p>
                                        <p><?php the_field('terrace'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
                                <?php if ( get_field('loggia') ): ?>
                                    <div class="sroom_info_item">
                                        <p><?php _e('[:ru]Лоджия[:ua]Лоджія[:]', 'rayon2');?></p>
                                        <p><?php the_field('loggia'); echo ' '. __('м'); ?><sup>2</sup></p>
                                    </div>
                                <?php endif; ?>
							</div>
							<div class="sroom_button">
								<button class="write_to_view"><a><?php _e('[:ru]Записаться на просмотр[:ua]Записатись на перегляд[:]', 'rayon2');?></a></button>
								<button class="find_out_the_price"><a><?php _e('[:ru]Узнать цену[:ua]Дізнатись ціну[:]', 'rayon2');?></a></button>
							</div>
						</div>
						<div class="clr"></div>
						<?php function status()  {
							echo (get_field('status') == 'true') ? ('sold') : null;
						} ?>
					</section>
				</div>
			</div>
			<div class="sroom_question">
				<div class="sroom_question_l">
					<p class="sroom_question_l_title"><?php _e('[:ru]Остались вопросы?[:ua]Залишилися питання?[:]', 'rayon2');?></p>
					<p class="sroom_question_l_subtitle"><?php _e('[:ru]Задайте их нашему менеджеру[:ua]Задайте іх нашому менеджеру[:]', 'rayon2');?></p>
				</div>
				<div class="sroom_question_r"><?php if(qtrans_getLanguage() == "ua") {echo do_shortcode('[contact-form-7 id="818" title="Залишились питання?"]');} else {echo do_shortcode('[contact-form-7 id="703" title="Остались вопросы?"]');} ?></div>
				<div class="clr"></div>
			</div>
			<div class="sroom_gallery">
				<?php $images = get_field('field_5b2cd22b3bff2'); if( $images ): ?>
				<div class="b-carousel">
					<div class="b-carousel-button-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
					<div class="b-carousel-button-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
					<div class="h-carousel-wrapper">
						<div class="h-carousel-items">
							<?php foreach( $images as $image ): 
								$content = '<div class="b-carousel-block">';
									$content .= '<a href="'. $image['url'] .'" data-fancybox="group_11" class="a-carousel-image-link">';
										 $content .= '<img src="'. $image['sizes']['large'] .'" alt="'. $image['alt'] .'" />';
									$content .= '</a>';
								$content .= '</div>';
								if ( function_exists('slb_activate') ){
									$content = slb_activate($content);
								}
								echo $content;?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<script>
					$(document).ready(function(){
						$(".b-carousel-button-right").click(function(){ // при клике на правую кнопку запускаем следующую функцию:
							$(".h-carousel-items").animate({left: "-222px"}, 200); // производим анимацию: блок с набором картинок уедет влево на 222 пикселя (это ширина одного прокручиваемого элемента) за 200 милисекунд.
							setTimeout(function () { // устанавливаем задержку времени перед выполнением следующих функций. Задержка нужна, т.к. эти ффункции должны запуститься только после завершения анимации.
								$(".h-carousel-items .b-carousel-block").eq(0).clone().appendTo(".h-carousel-items"); // выбираем первый элемент, создаём его копию и помещаем в конец карусели
								$(".h-carousel-items .b-carousel-block").eq(0).remove(); // удаляем первый элемент карусели		
								$(".h-carousel-items").css({"left":"0px"}); // возвращаем исходное смещение набора набора элементов карусели
							}, 300);
						});
						$(".b-carousel-button-left").click(function(){ // при клике на левую кнопку выполняем следующую функцию:		
							$(".h-carousel-items .b-carousel-block").eq(-1).clone().prependTo(".h-carousel-items"); // выбираем последний элемент набора, создаём его копию и помещаем в начало набора	
							$(".h-carousel-items").css({"left":"-222px"}); // устанавливаем смещение набора -222px		
							$(".h-carousel-items").animate({left: "0px"}, 200); // за 200 милисекунд набор элементов плавно переместится в исходную нулевую точку
							$(".h-carousel-items .b-carousel-block").eq(-1).remove(); // выбираем последний элемент карусели и удаляем его
						});
					});
				</script>
			<div>
		<div>

</main>
<!-- Main content container end -->


<?php get_footer(); ?> 