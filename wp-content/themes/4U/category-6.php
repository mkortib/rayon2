<?php
     
get_header(); ?>



<!-- Main content container start -->
<main class="main">
	<div class="content__wrapper about__content-wrapper">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="about__text-wrapper">
		
<div id="layouts">
    <div class="w">
        <section class="top flex">
            <div class="sb flex flex-sa">
                <span class="ad_saver_phone tel">+38 (044) 228-38-98</span>
                <a class="scrolling">Вниз</a>
            </div>
            <div class="types cnt flex">
                <div class="type rooms-1">
                    <p class="range">
                       от
                        26,2 м<sup>2</sup>
                        до
                        67,5 м<sup>2</sup>
                    </p>
                    <h2>1 - комнатные</h2>
                    <p class="add">24 типа</p>
                    <a href="/layouts/one-room/" class="hidden_bl">
                        <span>
                            Смотреть все
                        </span>
                    </a>
                </div>
                <div class="type rooms-2">
                    <p class="range">
                        от
                        55,2 м<sup>2</sup>
                       до
                        107,8 м<sup>2</sup>
                    </p>
                    <h2>2 - комнатные</h2>
                    <p class="add">24 типа</p>
                    <a href="/layouts/two-room/" class="hidden_bl">
                        <span>
                            Смотреть все
                        </span>
                    </a>
                </div>
                <div class="type rooms-3">
                    <p class="range">
                       от
                        69,3 м<sup>2</sup>
                       до
                        178,1 м<sup>2</sup>
                    </p>
                    <h2>3 - комнатные</h2>
                    <p class="add">24 типа</p>
                    <a href="/layouts/three-room/" class="hidden_bl">
                        <span>
                          Смотреть все
                        </span>
                    </a>
                </div>
                <form>
                    <h2>
						Заказать подбор квартиры
                    </h2>
                    <div class="flex flex-sb">
                        <div class="rb flex flex-sb">
                            <p>Хочу</p>
                            <p>
                                <input name="type" id="1-room" class="radio" type="radio" value="Однокомнатная">
                                <label for="1-room">
                                   Одно
                                </label>
                            </p>
                            <p>
                                <input name="type" id="2-room" type="radio" class="radio" value="Двухкомнатная">
                                <label for="2-room">
                                   Двух
                                </label>
                            </p>
                            <p>
                                <input name="type" id="3-room" type="radio" class="radio" value="Трехкомнатная">
                                <label for="3-room">
                                   Трёх
                                </label>
                            </p>
                            <p>
                               Комнатную квартиру
                            </p>
                        </div>
                        <div class="square flex flex-sb">
                            <p>
                                <label for="min_square">
                                   Метраж от
                                </label>
                                <input name="min_square" type="number" id="min_square"  placeholder="26,2 м">
                            </p>
                            <p>
                                <label for="max_square">
                                 до
                                </label>
                                <input name="max_square" type="number" id="max_square" placeholder="178,1 м">
                            </p>
                        </div>
                        <div class="budget">
                            <p>
                                <label for="money">
									Бюджет до
                                </label>
                                <input name="money" type="number" id="money" placeholder="$ 130 000">
                            </p>
                        </div>
                        <div class="send">
                            <p>
                                <label for="num">
                                  Ваш телефон
                                </label>
                                <input name="phone" class="phone" type="text" id="num" required placeholder="+3 80 (--) --- -- --">
                            </p>
                            <div class="btn_w_line btn_w">
                                <input name="type" class="btn" type="submit"
                                       value="Заказать">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

	</div>
</div>


		</div>
	</div>
</main>
<!-- Main content container end -->

<?php get_footer(); ?>