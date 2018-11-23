<?/*<!-- Modal window start -->
<div id="callback" class="callback-modal__container">
    <p class="callback-modal__title">Отправить заявку</p>
    <div class="callback-modal__form">
        <input type="text" class="callback-modal__input clientName1" placeholder="Ваше имя *" required>
        <input type="tel" class="callback-modal__input clientTel1" placeholder="Ваш телефон *" required>
        <input type="email" class="callback-modal__input clientMail1" placeholder="Ваш email" required>
        <input type="text" class="callback-modal__input clientInfo1" placeholder="Комментарий">
				<span class="cfirst">
				<input id="cfirst" type="checkbox" name="first" checked="" hidden="">
       			<label for="cfirst">Отправляя форму,<br/>принимаю <a href="/flib/pdf/useragreement.php" target="_blank">пользовательское
                    соглашение</a></label>
				</span>
        <button class="callback-modal__button button_send1" onClick="checkSubmitForm(1);">Отправить</button>
    </div>
    <div class="modal__close-button " onClick="  $.fancybox.close(all)"></div>
</div>
<!-- Modal window end -->*/?>

<!-- Заказать звонок -->
<div class="popup_overlay_order_a_call popup_overlay">
	<div class="popup popup_order_a_call">
        <div class="close"><?php _e('[:ru]Закрыть[:ua]Закрити[:]', 'rayon2');?></div>
        <div class="wrap">
            <div class="caption"><?php _e('[:ru]Заказать звонок[:ua]Замовти дзвінок[:]', 'rayon2');?></div>
			<?php if(qtrans_getLanguage() == "ua") {
				echo do_shortcode('[contact-form-7 id="890" title="Замовити дзвінок"]');
			} else {
				echo do_shortcode('[contact-form-7 id="889" title="Заказать звонок"]');
			} ?>
        </div>
    </div>
</div>

<!-- Записатся на просмотр -->
<div class="popup_overlay_write_to_view popup_overlay">
	<div class="popup popup_write_to_view">
        <div class="close"><?php _e('[:ru]Закрыть[:ua]Закрити[:]', 'rayon2');?></div>
        <div class="wrap">
            <div class="caption"><?php _e('[:ru]Записатся на просмотр[:ua]Записатись на перегляд[:]', 'rayon2');?></div>
			<?php if(qtrans_getLanguage() == "ua") {
				echo do_shortcode('[contact-form-7 id="886" title="Записатись на перегляд"]');
			} else {
				echo do_shortcode('[contact-form-7 id="914" title="Записатся на просмотр"]');
			} ?>
        </div>
    </div>
</div>

<!-- Узнать цену -->
<div class="popup_overlay_find_out_the_price popup_overlay">
	<div class="popup popup_find_out_the_price">
        <div class="close"><?php _e('[:ru]Закрыть[:ua]Закрити[:]', 'rayon2');?></div>
        <div class="wrap">
            <div class="caption"><?php _e('[:ru]Узнать цену[:ua]Дізнатись ціну[:]', 'rayon2');?></div>
			<?php if(qtrans_getLanguage() == "ua") {
				echo do_shortcode('[contact-form-7 id="888" title="Дізнатись ціну"]');
			} else {
				echo do_shortcode('[contact-form-7 id="887" title="Узнать цену"]');
			} ?>
        </div>
    </div>
</div>
 
<?php wp_footer(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM6TWSD"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript">
  (function(d, w, s) {
	var widgetHash = 'ru5zavnkg0xdi22kr4dy', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
	gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
	var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script>
<script type="text/javascript">
    (function(d, w, s) {
        var widgetHash = '2evf12wzxauvp01j63uc', ctw = d.createElement(s);
        ctw.type = 'text/javascript'; ctw.async = true;
        ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
    })(document, window, 'script');
</script>

</body>
</html>

 	  