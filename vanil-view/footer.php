		<footer role="contentinfo">
			<div class="footer-wrapper">
				<div class="c-nfo">
					<? if(!empty($seo_full['title'] && !empty($seo_full['text'])) ): ?>
					<div class="c-nfo-about">
						<div class="c-nfo-about-content">
							<?if(!empty($seo_full['title'])):?>
							<div class="c-nfo-about__col c-nfo-about__col--headers">
								<span class="c-nfo-about-header"><? echo $seo_full['title']; ?></span>
								<?if(!empty($seo_full['subtitle'])):?>
								<span class="c-nfo-about-header c-nfo-about-header--l2"><? echo $seo_full['subtitle']; ?></span>
								<?endif;?>
							</div>
							<?endif;?>
							<?
							if(!empty($seo_full['text'])):
								$seoTextDivided = preg_split("/\\n/", $seo_full['text'], -1, PREG_SPLIT_NO_EMPTY);
								$i = 0;
								$c = ceil(count($seoTextDivided) / 2);
							?>
								<div class="c-nfo-about__col">
									<? foreach($seoTextDivided as $seoText): ?>
									<p class="c-nfo-about-text">
										<? echo $seoText; ?>
									</p>
									<?
										$i++;
										if($i == $c):
										?>
											</div>
											<div class="c-nfo-about__col">
										<?
										endif;
									?>
									<? endforeach; ?>
								</div>
							<?endif;?>
						</div>
						<!-- <a href="#" class="c-nfo-about__more"><?= __('Подробнее') ?></a> -->
					</div>
					<? endif; ?>
					<div class="c-nfo-subscribe">
						<div class="c-nfo-subscribe-header"><?= __('Subscribe to news') ?></div>
						<div class="c-nfo-subscribe-header c-nfo-subscribe-header--l2"><?= __('Receive our newsletter and get&nbsp;weekly updates') ?></div>
						<form class="c-nfo-subscribe-form" accept-charset="utf-8" data-validate="true" novalidate="novalidate">
							<div class="input-holder input-holder--subscribe">
								<input class="subscribe-email" id="subscribe-email" type="email" name="email" placeholder="<?= __('Enter your e-mail address') ?>">
								<label for="subscribe-email" class="input-placeholder input-placeholder--error"><?= __('example') ?>: mail@mail.com</label>
							</div>
							<button class="button dark subscribe-button" type="submit"><?= __('subscribe') ?></button>
						</form>
					</div>
				</div>
				<div class="footer">
					<div class="footer-content">
						<div class="footer-c footer-c--contact">
							<a href="#appointment-dialog" class="modals-btn-link button dark filled footer-c-appointment" data-spreader="open" role="button"><?= __('make an appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
							<div class="cnt-wrp">
								<a href="tel:+74956219687" class="cnt cnt--ph">+7 495 621-96-87</a>
							</div>
							<div class="cnt-wrp">
								<a href="tel:+79035429893" class="cnt cnt--whatsup">+7 903 542-98-93</a>
							</div>
						</div>
						<div class="footer-c footer-c--nav" role="navigation">
							<ul class="footer-nav-list">
								<li class="footer-nav-item footer-subheader"><?= __('Catalog') ?></li>
								<li class="footer-nav-item"><a href="/dresses" class="footer-nav-link"><?= __('Bridal dresses') ?></a></li>
								<li class="footer-nav-item"><a href="/accessories" class="footer-nav-link"><?= __('Accessories') ?></a></li>
							</ul>
							<ul class="footer-nav-list">
								<li class="footer-nav-item footer-subheader"><?= __('Reviews') ?></li>
								<li class="footer-nav-item"><a href="#feedback-dialog" class="modals-btn-link footer-nav-link" data-spreader="open"><?= __('Ask us a question') ?></a></li>
								<li class="footer-nav-item"><a href="#review-dialog" class="modals-btn-link footer-nav-link" data-spreader="open"><?= __('Write a review') ?></a></li>
							</ul>
							<ul class="footer-nav-list">
								<li class="footer-nav-item footer-subheader"><?= __('Boutique') ?></li>
								<li class="footer-nav-item"><a href="/boutique/" class="footer-nav-link"><?= __('About') ?></a></li>
								<li class="footer-nav-item"><a href="/articles/rabota-mechty/" class="footer-nav-link"><?= __('Vacancies') ?></a></li>
								<li class="footer-nav-item"><a href="/contacts/" class="footer-nav-link"><?= __('Contacts') ?></a></li>
							</ul>
						</div>
						<div class="footer-c footer-c--search">
							<div class="footer-subheader"><?= __('Search') ?></div>
							<form class="footer-search-form" accept-charset="utf-8">
								<div class="input-holder input-holder--search">
									<input class="footer-search" id="footer-search" type="search" name="search" placeholder="<?= __('Search by name') ?>">
									<button class="button return-type footer-search-submit" type="submit"></button>
								</div>
							</form>
						</div>
						<div class="footer-c footer-c--social">
							<div class="footer-subheader"><?= __('Social networks') ?></div>
							<ul class="footer-social-list">
								<li class="footer-social-item"><a href="https://www.instagram.com/Vanilastudio/" class="footer-social-link" target="_blank"><img src="/media/img/ic/ig.svg" class="footer-social-ic footer-social-ic--ig" alt="Ваниль instagram"/></a></li>
								<li class="footer-social-item"><a href="https://vk.com/vanilastudio" class="footer-social-link" target="_blank"><img src="/media/images/icons/svg_vk.svg" class="footer-social-ic footer-social-ic--tw" alt="Ваниль vkontakte"/></a></li>
								<li class="footer-social-item"><a href="https://www.facebook.com/vanilastudio" class="footer-social-link" target="_blank"><img src="/media/img/ic/fb.svg" class="footer-social-ic footer-social-ic--fb" alt="Ваниль facebook"/></a></li>
								<li class="footer-social-item"><a href="https://twitter.com/vanila_wedding" class="footer-social-link" target="_blank"><img src="/media/img/ic/tw.svg" class="footer-social-ic footer-social-ic--ig" alt="Ваниль twitter"/></a></li>
							</ul>
						</div>
					</div>
					<div class="footer-copyrights">
						<div class="footer-copyrights-c footer-copyrights-c--l"><span class="owners">&copy; Cвадебный салон ВАНИЛЬ</span></div>
						<div class="footer-copyrights-c footer-copyrights-c--r"><span class="developers">Создано в <a href="http://come-on-design.ru" target="_blank" class="developers__link lined">Come on Design</a></span></div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- modal dialogs content -->
<div id="feedback-dialog" class="modal-content feedback-dialog">
	<div class="modal-content__heading"><?= __('Ask us a question') ?></div>
	<form id="feedback-form" class="form form--regular feedback-form" data-validate="true" accept-charset="utf-8" novalidate="novalidate">
		<input type="hidden" name="FormType" value="Feedback"/>
		<div class="input-holder">
			<label for="feedback__name" class="input-label"><?= __('Name') ?></label>
			<input class="input" id="feedback__name" name="name" placeholder="<?= __('Enter your name') ?>" type="text">
			<label for="feedback__name" class="input-placeholder input-placeholder--error"><?= __('example') ?>: Tania Kostic</label>
		</div>
		<div class="input-holder input-holder--multiple input-holder--multiple-or">
			<div class="input-holder__row">
				<label for="feedback__email" class="input-label"><?= __('E-mail') ?></label>
				<input class="input" id="feedback__email" name="email" placeholder="<?= __('Enter your e-mail address') ?>" type="email" data-optional-id="_mof">
				<label for="feedback__email" class="input-placeholder input-placeholder--error"><?= __('example') ?>: mail@mail.com</label>
			</div>
			<div class="input-holder__row input-holder__row--divide"><?= __('or') ?></div>
			<div class="input-holder__row">
				<label for="feedback__phone" class="input-label"><?= __('Phone number') ?></label>
				<input class="input" id="feedback__phone" name="phone" placeholder="<?= __('Enter your phone number') ?>" type="tel" data-inputmask="'alias': 'phone'" data-optional-id="_mof">
				<label for="feedback__phone" class="input-placeholder input-placeholder--error"><?= __('example') ?>: +7(999)999-99-99</label>
			</div>
		</div>
		<div class="input-holder">
			<label for="feedback__question" class="input-label"><?= __('Question') ?></label>
			<textarea class="textarea-regular" id="feedback__question" name="question"></textarea>
		</div>
		<div class="input-holder">
			<button type="submit" class="button dark filled submit feedback__submit"><?= __('Send') ?></button>
		</div>
	</form>
</div>
<div id="appointment-dialog" class="modal-content appointment-dialog">
	<div class="modal-content__heading"><?= __('Make an appointment') ?></div>
	<form id="appointment-form" class="form form--regular form--request appointment-form" data-validate="true" accept-charset="utf-8" novalidate="novalidate">
		<input type="hidden" name="FormType" value="Appointment"/>
		<div class="input-holder">
			<label for="appointment__name" class="input-label"><?= __('Name') ?></label>
			<input class="input" id="appointment__name" name="name" placeholder="<?= __('Enter your name') ?>" type="text">
			<label for="appointment__name" class="input-placeholder input-placeholder--error"><?= __('example') ?>: Tania Kostic</label>
		</div>
		<div class="input-holder input-holder--multiple">
			<div class="input-holder__row">
				<label for="appointment__email" class="input-label"><?= __('E-mail') ?></label>
				<input class="input" id="appointment__email" name="email" placeholder="<?= __('Enter your e-mail address') ?>" type="email">
				<label for="appointment__email" class="input-placeholder input-placeholder--error"><?= __('example') ?>: mail@mail.com</label>
			</div>
			<div class="input-holder__row">
				<label for="appointment__phone" class="input-label"><?= __('Phone number') ?></label>
				<input class="input" id="appointment__phone" name="phone" placeholder="<?= __('Enter your phone number') ?>" type="tel" data-inputmask="'alias': 'phone'">
				<label for="appointment__phone" class="input-placeholder input-placeholder--error"><?= __('example') ?>: +7 (999) 999-99-99</label>
			</div>
		</div>
		<div class="input-holder input-holder--multiple input-holder--multiple-date-time">
			<div class="input-holder__row">
				<label for="appointment__meet-date" class="input-label"><?= __('When Will We Meet') ?></label>
				<input class="input flatpickr" id="appointment__meet-date" name="meet-date" type="text" data-type="date" autocomplete="off" placeholder="дд . мм . гггг">
				<div class="drop-down appointment__meet-time-wrapper">
					<input class="drop-down-input" type="hidden" name="meet-time" value="12:30">
					<span class="drop-down-current" id="appointment__meet-time" data-value="12:30">12:30</span>
					<div class="drop-down-list appointment__meet-time-list">
						<ul>
							<li class="drop-down-item" data-value="10:00">10:00</li>
							<li class="drop-down-item" data-value="10:30">10:30</li>
							<li class="drop-down-item" data-value="11:00">11:00</li>
							<li class="drop-down-item" data-value="11:30">11:30</li>
							<li class="drop-down-item" data-value="12:00">12:00</li>
							<li class="drop-down-item drop-down-item--active" data-value="12:30">12:30</li>
							<li class="drop-down-item" data-value="13:00">13:00</li>
							<li class="drop-down-item" data-value="13:30">13:30</li>
							<li class="drop-down-item" data-value="14:00">14:00</li>
							<li class="drop-down-item" data-value="14:30">14:30</li>
							<li class="drop-down-item" data-value="15:00">15:00</li>
							<li class="drop-down-item" data-value="15:30">15:30</li>
							<li class="drop-down-item" data-value="16:00">16:00</li>
							<li class="drop-down-item" data-value="16:30">16:30</li>
							<li class="drop-down-item" data-value="17:00">17:00</li>
							<li class="drop-down-item" data-value="17:30">17:30</li>
							<li class="drop-down-item" data-value="18:00">18:00</li>
							<li class="drop-down-item" data-value="18:30">18:30</li>
							<li class="drop-down-item" data-value="19:00">19:00</li>
							<li class="drop-down-item" data-value="19:30">19:30</li>
							<li class="drop-down-item" data-value="20:00">20:00</li>
						</ul>
					</div>
				</div>
				<label for="appointment__meet-date" class="input-placeholder input-placeholder--error"><?= __('Please enter date') ?></label>
			</div>
			<div class="input-holder__row">
				<label for="appointment__meet-date" class="input-label"><?= __('Event Date') ?></label>
				<input class="input" id="appointment__event-date" name="event-date" type="text" data-type="date" autocomplete="off" placeholder="дд . мм . гггг">
				<label for="appointment__meet-date" class="input-placeholder input-placeholder--error"><?= __('Please enter date') ?></label>
			</div>
		</div>
		<div class="input-holder">
			<label for="appointment__comment" class="input-label"><?= __('Comments') ?></label>
			<textarea class="textarea-regular" id="appointment__comment" name="comment" data-novalidate="true"></textarea>
		</div>
		<div class="input-holder">
			<button type="submit" class="button dark filled submit appointment__submit"><?= __('Send') ?></button>
		</div>
	</form>
</div>
<div id="wishlist-dialog" class="modal-content wishlist-dialog">
	<div class="modal-content__heading"><?= __('Send your wishlist') ?></div>
	<div class="modal-content__descr"><?= __('To your arrival, we will prepare your chosen dress') ?></div>
	<form id="wishlist-form" class="form form--regular form--request wishlist-form" data-validate="true" accept-charset="utf-8" novalidate="novalidate">
		<input type="hidden" name="FormType" value="Wishlist"/>
		<div class="input-holder">
			<label for="wishlist__name" class="input-label"><?= __('Name') ?></label>
			<input class="input" id="wishlist__name" name="name" placeholder="<?= __('Enter your name') ?>" type="text">
			<label for="wishlist__name" class="input-placeholder input-placeholder--error"><?= __('example') ?>: Tania Kostic</label>
		</div>
		<div class="input-holder input-holder--multiple">
			<div class="input-holder__row">
				<label for="wishlist__phone" class="input-label"><?= __('Phone number') ?></label>
				<input class="input" id="wishlist__phone" name="phone" placeholder="<?= __('Enter your phone number') ?>" type="tel" data-inputmask="'alias': 'phone'">
				<label for="wishlist__phone" class="input-placeholder input-placeholder--error"><?= __('example') ?>: +7 (999) 999-99-99</label>
			</div>
			<div class="input-holder__row">
				<label for="wishlist__email" class="input-label"><?= __('E-mail (optional)') ?></label>
				<input class="input" id="wishlist__email" name="email" placeholder="<?= __('Enter your e-mail address') ?>" type="email" data-novalidate="true">
				<label for="wishlist__email" class="input-placeholder input-placeholder--error"><?= __('example') ?>: mail@mail.com</label>
			</div>
		</div>
		<div class="input-holder input-holder--multiple input-holder--multiple-date-time">
			<div class="input-holder__row">
				<label for="wishlist__meet-date" class="input-label"><?= __('When Will We Meet') ?></label>
				<input class="input flatpickr" id="wishlist__meet-date" name="meet-date" type="text" data-type="date" autocomplete="off" placeholder="дд . мм . гггг">
				<div class="drop-down wishlist__meet-time-wrapper">
					<span class="drop-down-current" id="wishlist__meet-time" data-value="12:30">12:30</span>
					<div class="drop-down-list wishlist__meet-time-list">
						<ul>
							<li class="drop-down-item" data-value="08:00">08:00</li>
							<li class="drop-down-item" data-value="08:30">08:30</li>
							<li class="drop-down-item" data-value="09:00">09:00</li>
							<li class="drop-down-item" data-value="09:30">09:30</li>
							<li class="drop-down-item" data-value="10:00">10:00</li>
							<li class="drop-down-item" data-value="10:30">10:30</li>
							<li class="drop-down-item" data-value="11:00">11:00</li>
							<li class="drop-down-item" data-value="11:30">11:30</li>
							<li class="drop-down-item" data-value="12:00">12:00</li>
							<li class="drop-down-item drop-down-item--active" data-value="12:30">12:30</li>
							<li class="drop-down-item" data-value="13:00">13:00</li>
							<li class="drop-down-item" data-value="13:30">13:30</li>
							<li class="drop-down-item" data-value="14:00">14:00</li>
							<li class="drop-down-item" data-value="14:30">14:30</li>
							<li class="drop-down-item" data-value="15:00">15:00</li>
							<li class="drop-down-item" data-value="15:30">15:30</li>
							<li class="drop-down-item" data-value="16:00">16:00</li>
							<li class="drop-down-item" data-value="16:30">16:30</li>
							<li class="drop-down-item" data-value="17:00">17:00</li>
							<li class="drop-down-item" data-value="17:30">17:30</li>
							<li class="drop-down-item" data-value="18:00">18:00</li>
							<li class="drop-down-item" data-value="18:30">18:30</li>
							<li class="drop-down-item" data-value="19:00">19:00</li>
							<li class="drop-down-item" data-value="19:30">19:30</li>
							<li class="drop-down-item" data-value="20:00">20:00</li>
						</ul>
					</div>
				</div>
				<label for="wishlist__meet-date" class="input-placeholder input-placeholder--error"><?= __('Please enter date') ?></label>
			</div>
			<div class="input-holder__row">
				<label for="wishlist__meet-date" class="input-label"><?= __('Event Date') ?></label>
				<input class="input" id="wishlist__event-date" name="event-date" type="text" data-type="date" autocomplete="off" placeholder="дд . мм . гггг">
				<label for="wishlist__meet-date" class="input-placeholder input-placeholder--error"><?= __('Please enter date') ?></label>
			</div>
		</div>
		<div class="input-holder">
			<label for="wishlist__comment" class="input-label"><?= __('Comments') ?></label>
			<textarea class="textarea-regular" id="wishlist__comment" name="comment" data-novalidate="true"></textarea>
		</div>
		<div class="input-holder">
			<button type="submit" class="button dark filled submit wishlist__submit"><?= __('Send') ?></button>
		</div>
		<?
//			$str = implode(', ', $wishlistItems);
			$str = '';
			foreach($wishlistItems as $item)
			{
				$str .= $item->name . ', ';
			}
		?>
		<input id="wishlist-items" name="wishlist-items" value="<? echo $str; ?>" type="hidden">
	</form>
</div>
<div id="review-dialog" class="modal-content review-dialog">
	<div class="modal-content__heading"><?= __('Write a review') ?></div>
	<form id="review-form" class="form form--regular review-form" data-validate="true" accept-charset="utf-8" novalidate="novalidate">
		<input type="hidden" name="FormType" value="Review"/>
		<div class="input-holder">
			<label for="review__name" class="input-label"><?= __('Name') ?></label>
			<input class="input" id="review__name" name="name" placeholder="<?= __('Enter your name') ?>" type="text" value="">
			<label for="review__name" class="input-placeholder input-placeholder--error"><?= __('example') ?>: Tania Kostic</label>
		</div>
		<div class="input-holder">
			<label for="review__email" class="input-label"><?= __('E-mail') ?></label>
			<input class="input" id="review__email" name="email" placeholder="<?= __('Enter your e-mail address') ?>" type="email" value="">
			<label for="review__email" class="input-placeholder input-placeholder--error"><?= __('example') ?>: mail@mail.com</label>
		</div>
		<div class="input-holder">
			<label for="review__question" class="input-label"><?= __('Review') ?></label>
			<textarea class="textarea-regular" id="review__text" name="review"></textarea>
		</div>
		<div class="input-holder">
			<button type="submit" class="button dark filled submit review__submit"><?= __('Send') ?></button>
		</div>
	</form>
</div>
<!-- success results -->
<div id="dialog-common-success" class="modal-content dialog-common-success">
	<span class="success-icon"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon request-success"><use xlink:href="#request-success-icon"></use></svg></span>
	<div class="modal-content__heading"><?= __('Thank you') ?></div>
</div>
<div id="review-success" class="modal-content review-success-dialog">
	<span class="success-icon"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon request-success"><use xlink:href="#request-success-icon"></use></svg></span>
	<div class="modal-content__heading"><?= __('Thank you') ?></div>
	<div class="modal-content__descr"><?= __('We appreciate any feedback is important to us') ?></div>
</div>
<div id="request-success" class="modal-content request-success-dialog">
	<span class="success-icon"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon request-success"><use xlink:href="#request-success-icon"></use></svg></span>
	<div class="modal-content__heading"><?= __('Thank you') ?></div>
	<div class="modal-content__descr"><?= __('We will contact you soon to confirm your appointment.') ?></div>
</div>
	<script src="/media/js_vanilla/libs/jquery-2.2.3.min.js"></script>
	<script src="/media/js_vanilla/libs/swiper.jquery.min.js"></script>
	<script src="/media/js_vanilla/main.js?v=<?=rand();?>"></script>
	<script src="/media/js/category_filter.js?v=1.0"></script>
	<script src="/media/js/favorites.js?v=1.0"></script>
	<? if(isset($_REQUEST['popup_open']) && $_REQUEST['popup_open'] == 1) :?>
<script>
$(document).ready(function(){

	$('.appointment-btn:visible').trigger('click');

});
</script>
<? endif;?>

	<script src="/media/js/seo.js?v=1.0"></script>
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(9412237, "init", { id:9412237, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/9412237" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>