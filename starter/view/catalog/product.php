<? $images = explode(',', $content->eimage); ?>
<main role="main">
	<? if(isset($breadcrumb)) echo $breadcrumb; ?>
	<section class="section section--product">
		<div class="product">
			<div class="product-heading product-heading--mob"><? echo $content->name;?></div>
			<div class="product-view">
				<div class="product-visual">
					<div class="product-visual-container">
						<div class="product-visual-slider swiper-container">
							<div class="swiper-wrapper">
								<div class="product-visual-slide swiper-slide">
									<? $thumb = ThumbHelper::getThumb($content->image, 750, 2000); ?>
									<img src="/<? echo $thumb; ?>" class="product-visual-img" alt="vanilastudio"/>
								</div>

								<? foreach($images as $image): ?>
									<? $thumb = ThumbHelper::getThumb($image, 750, 2000);
										if(strlen($thumb) == 0) continue;

									?>
									<div class="product-visual-slide swiper-slide">
										<img src="/<? echo $thumb; ?>" class="product-visual-img" alt="vanilastudio"/>
									</div>
								<? endforeach; ?>
								<?
								$is_video = false;
								$is_3d = false;
								if(strlen($content->video_mp4) > 0 || strlen($content->video_webm) > 0)
									$is_video = true;

								if($content->panorama)
									$is_3d = true;

								if($is_video) {
								?>
									<div class="product-visual-slide swiper-slide swiper-slide-video">
										<video id="product-video">
										  <source src="/<?=$content->video_mp4;?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										  <source src="/<?=$content->video_webm;?>" type='video/webm; codecs="vp8, vorbis"'>
									  </video>
									</div>
								<? } ?>

								<? if($is_3d) :?>
									<div class="product-visual-slide swiper-slide swiper-slide-3d">

										<?
										$panorama = $content->panorama;
										$panorama = str_replace('<iframe', '<iframe id="slide-3d"', $panorama);
										$panorama = str_replace('style="', 'style="width:inherit;', $panorama);
										?>
										<?=$panorama;?>
									</div>
								<? endif; ?>
								<? if($is_video) :?>
									<div id="swiper-slide-video-mobile">
										<video id="product-video-mobile">
										  <source src="/<?=$content->video_mp4;?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
											 <source src="/<?=$content->video_webm;?>" type='video/webm; codecs="vp8, vorbis"'>
									  </video>
									</div>
								<? endif; ?>
							</div>
							<div class="product-visual-slider-pagination"></div>
						</div>
						<?
						if($is_video) {

						?>
						<div class="product-visual-slide-mobile">
							<img src="/markup/img/product/ic_play-min.svg" alt="vanilastudio" class="product-visual-thumb-icon">
							<p id="product-visual-play-video">VIDEO</p>
						</div>
						<? } ?>

					</div>
					<ul class="product-visual-thumbs">
						<? $thumb = ThumbHelper::getThumb($content->image, 100, 1000);
							if(strlen($thumb) != 0) {
						?>
						<li class="product-visual-thumb" data-full="/<? echo $content->image; ?>"><img src="/<? echo $thumb; ?>" class="product-visual-thumb__img" alt="vanilastudio"/></li>
						<? }?>
						<? foreach($images as $image): ?>
							<? $thumb = ThumbHelper::getThumb($image, 100, 1000);
								if(strlen($thumb) == 0) continue;
							?>
							<li class="product-visual-thumb" data-full="/<? echo $image; ?>"><img src="/<? echo $thumb; ?>" class="product-visual-thumb__img" alt="vanilastudio"/></li>
						<? endforeach; ?>

						<? if($is_video) :?>
							<li class="product-visual-thumb product-visual-thumb-video">
								<img src="/markup/img/product/ic_play-desktop.svg" alt="vanilastudio">
								<p class="product-thumb-desc">VIDEO</p>
							</li>
						<? endif; ?>
						<? if($is_3d) :?>
							<li class="product-visual-thumb product-visual-thumb-3d">
								<img src="/markup/img/product/ic_360.svg" alt="vanilastudio">
								<p class="product-thumb-desc">3D</p>
							</li>
						<? endif; ?>

						<?/*
						<li class="product-visual-thumb" data-full="../img/product/product-2--l.jpg"><img src="../img/product/product-2--s.jpg" class="product-visual-thumb__img" alt=""/></li>
						*/?>
					</ul>
					<div class="product-visual-fullscreen">
						<a href="#" class="product-visual-fullscreen__close js-close-fullscreen"></a>
					</div>
				</div>
				<div class="product-general">
					<div class="product-info">
						<div class="product-heading"><? echo $content->name; ?></div>

						<? if(is_numeric($content->price) && $content->price > 0) :?>
						<div class="product-price">
							<!-- <a href="#" class="product-price__show"><?= __('show the price $') ?></a> -->
							<span class="product-price__showed" style="display: inline;"><? echo number_format($content->price, 0, '', ' '); ?><? if(is_numeric($content->price)) :?> &#8381;<? endif; ?></span>
							<? if(is_numeric($content->old_price) && $content->old_price > 0) :?>
							<span class="product-price__showed product-old-price" style="display: inline;"><? echo number_format($content->old_price, 0, '', ' '); ?><? if(is_numeric($content->old_price)) :?> &#8381;<? endif; ?></span>
							<? endif; ?>
						</div>
						<? elseif(!is_numeric($content->price) && strlen($content->price) > 0) :?>
						<div class="product-price">
							<!-- <a href="#" class="product-price__show"><?= __('show the price $') ?></a> -->
							<span class="product-price__showed" style="display: inline;"><? echo $content->price; ?></span>
						</div>
						<? endif; ?>

<!--
						<div class="product-colors">
							<form class="product-colors__form" action="#">
								<div class="product-colors__current">
									Цвет: <span class="product-colors__current-name">Айвори</span>
								</div>
								<ul class="product-colors__list">
									<li class="product-colors__item">
										<label class="product-color-label">
											<input class="product-color-control" type="radio" value="color-value-01" name="product-color" checked="">
											<span class="product-color" style="color: #EFE4E4"></span>
											<span class="product-color-name">
												Айвори
											</span>
										</label>
									</li>
									<li class="product-colors__item">
										<label class="product-color-label">
											<input class="product-color-control" type="radio" value="color-value-02" name="product-color">
											<span class="product-color" style="color: #EDE0D1"></span>
											<span class="product-color-name">
												Кремовый
											</span>
										</label>
									</li>
									<li class="product-colors__item">
										<label class="product-color-label">
											<input class="product-color-control" type="radio" value="color-value-03" name="product-color">
											<span class="product-color" style="color: #FFEAEA"></span>
											<span class="product-color-name">
												Ванильный
											</span>
										</label>
									</li>
								</ul>
							</form>
						</div>
-->

						<? if(count($offers) > 0) :?>
						<div class="product-sizes">
							<div class="product-sizes__controls" data-sizes-control>
								<div class="drop-down product-sizes-control">
									<input class="drop-down-input" type="hidden" name="product-sizes" value="">
									<span class="drop-down-current" data-value="">Выберете размер</span>
									<div class="drop-down-list">
										<ul>
											<li class="drop-down-item drop-down-item--active" data-disabled="" data-value="" data-text="Выберете размер">Выберете размер</li>
											<? foreach($offers as $offer) :?>
											<li class="drop-down-item" data-avail="<?=$offer->available;?>" data-value="<?=$offer->size;?>" data-text="<?=$offer->size;?>"><?=$offer->size;?></li>
											<? endforeach;?>
<!-- 											<li class="drop-down-item" data-avail="1" data-value="Unavailibale" data-text="Unavailibale">Unavailibale example</li> -->

											<!-- <li class="drop-down-item" data-value="2" data-text="Size 2">Size 2</li> -->
											<!-- <li class="drop-down-item" data-value="3" data-text="Size 3">Size 3</li> -->

										</ul>
									</div>
								</div>
								<!-- <span class="product-sizes__invalid" style="display: none;">Необходимо выбрать размер</span> -->
								<div class="product-sizes-popover">
									<div class="product-sizes-popover__inner">
										<span class="product-sizes-popover__span">Данный размер отсутвует.</span>
										<span class="product-sizes-popover__span">Выберите приближенный размер из наличия, и наши мастера подгонят его индивидуально для вас.</span>
										<span class="product-sizes-popover__span">Подробности по телефону:<a class="product-sizes-popover__tel" href="tel:+74956219687">+7 495 621-96-87</a></span>
									</div>
									<a href="#" class="product-sizes-popover__close" role="button"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon"><use xlink:href="#close-modal"></use></svg></a>
								</div>
							</div>
							<div class="product-sizes__desc">
								<? if($content->is_child == 1) :?>
								<a href="#sizes-table-kids" class="product-sizes__table-link" data-spreader="open">Таблица детских размеров</a>
								<? else :?>
								<a href="#sizes-table" class="product-sizes__table-link" data-spreader="open">Таблица размеров</a>
								<? endif; ?>

								<span class="product-sizes__note">Платье можно подогнать</span>
							</div>
						</div>
						<? endif; ?>

						<div class="product-actions">
							<a href="#!" data-id="<?=$content->id;?>" data-size="" class="product-action__add-to-cart button<? if(count($offers) > 0) :?> has_sizes<? endif; ?> dark filled<?=$fav ? ' active' : '';?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon"><use xlink:href="#cart"></use></svg>
								<?=$fav ? 'перейти в корзину' : 'в корзину';?>
							</a>
							<a href="#appointment-dialog" class="modals-btn-link product-action__appointment" data-spreader="open">
								<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon location-ic"><use xlink:href="#location-ic"></use></svg>
								<span class="product-action__appointment--text"><?= __('Make an appointment') ?></span>
								<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arrow-1"></use></svg>
							</a>
						</div>
					</div>

					<div class="product-descriptions">
						<? if(strlen($content->text) > 0) :?>
							<? $rows = explode("\n", $content->text);?>
							<? foreach($rows as $row) :?>
							<p class="product-chapter"><? echo $row; ?></p>
							<? endforeach; ?>
						<? endif; ?>
						<div class="product-specifications">
							<? if(strlen($content->mat) > 0) :?>
						    <dl class="product-spec">
						        <dt class="product-spec__name"><span class="product-spec__cont"><?= __('Material') ?></span></dt>
						        <dd class="product-spec__value"><span class="product-spec__cont"><? echo $content->mat; ?></span></dd>
						    </dl>
						    <? endif; ?>
						    <? if(strlen($content->decor) > 0) :?>
						    <dl class="product-spec">
						        <dt class="product-spec__name"><span class="product-spec__cont"><?= __('Decoration') ?></span></dt>
						        <dd class="product-spec__value"><span class="product-spec__cont"><? echo $content->decor; ?></span></dd>
						    </dl>
						    <? endif; ?>
						    <? if(!empty($content->category->id)): ?>
						    <dl class="product-spec">
						        <dt class="product-spec__name"><span class="product-spec__cont"><?= __('Silhouette') ?></span></dt>
						        <dd class="product-spec__value"><span class="product-spec__cont"><a href="<? echo Route::url('productcategory', array('url' => $content->category->url)); ?>" class="lined"><? echo $content->category->name; ?></a></span></dd>
						    </dl>
							<? endif; ?>
						    <? if(strlen($content->color) > 0) :?>
						    <dl class="product-spec">
						        <dt class="product-spec__name"><span class="product-spec__cont"><?= __('Color') ?></span></dt>
						        <dd class="product-spec__value"><span class="product-spec__cont"><? echo $content->color; ?></span></dd>
						    </dl>
						    <? endif; ?>
						    <? if(!empty($content->designer->id) AND $content->designer->show_product == 1): ?>
						    <dl class="product-spec">
						        <dt class="product-spec__name"><span class="product-spec__cont"><?= __('Designer') ?></span></dt>
						        <dd class="product-spec__value"><span class="product-spec__cont"><a href="<? echo Route::url('productcategory', array('url' => $content->designer->url)); ?>" class="lined"><? echo $content->designer->name; ?></a></span></dd>
						    </dl>
						<? endif; ?>
						    <? if(isset($content->designer->image) AND $content->designer->show_product == 1): ?>
						    <? $thumb = ThumbHelper::getThumb($content->designer->image, 150, 1000); ?>
							<img src="/<? echo $thumb; ?>" class="product-designer-label" alt="<? echo $content->designer->name; ?>"/>
							<? endif; ?>


							<div class="product-tags">
								<?if(!empty($content->designer_id)):?>
									<a href="<?echo Route::url('productcategory', array('url' => $content->designer->url));?>" class="tag tag--product-view tag-<?echo $content->designer->id?>"><span class="tag__name tag__name--product-view"><?echo $content->designer->name;?></span></a>
								<?endif;?>
								<?if(!empty($content->category_id)):?>
									<a href="<?echo Route::url('productcategory', array('url' => $content->category->url));?>" class="tag tag--product-view tag-<?echo $content->category->id?>"><span class="tag__name tag__name--product-view"><?echo $content->category->name;?></span></a>
								<?endif;?>
								<?foreach($content->maintags->find_all() as $tag):?>
									<?
									if($content->prodtype == 'dress')
										$url = Route::url('productcategory', array('url' => $tag->url));
									else
										$url = Route::url('accessories', array('action' => 'Accessories')) . '?tag=' . $tag->id;
									?>
									<a href="<?=$url;?>" class="tag tag--product-view tag-<?echo $tag->id?>"><span class="tag__name tag__name--product-view"><?echo $tag->name;?></span></a>
								<?endforeach;?>
							</div>
							<div class="sharing-general">
								<a href="https://twitter.com/intent/tweet?url=https://<? echo $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]; ?>" class="sharing-general__item sharing-general__item--tw" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon sharing-general__item-ic"><use xlink:href="#share-twitter"></use></svg></a>
								<a href="http://vk.com/share.php?url=https://<? echo $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]; ?>" class="sharing-general__item sharing-general__item--tw" target="_blank"><img src="/media/images/icons/svg_vk.svg" class="svg-icon sharing-general__item-ic"></a>
								<a href="https://www.facebook.com/sharer/sharer.php?u=https://<? echo $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]; ?>" class="sharing-general__item sharing-general__item--fb" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon sharing-general__item-ic"><use xlink:href="#share-facebook"></use></svg></a>
							</div>
						</div>
					</div>

					<div class="product-footer">
						<a href="/articles/oplata-i-dostavka" class="product-delivery-info-link">О доставке и оплате</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? if(count($additionalProducts) > 0) :?>
	<section class="section section--follow-up-products">
		<div class="layout">
			<header class="section-header section-header--sub">Дополните образ</header>
		</div>
		<div class="gl gl--follow-up">

			<div class="gl-cont">
				<div class="gl-row">
					<?foreach($additionalProducts as $element):?>
						<?echo $element;?>
					<?endforeach;?>
<!--
					<div class="gl-col gl-col--slider">
						<a href="#" class="gl-col__a">
							<div class="gl-slider swiper-container">
								<div class="swiper-wrapper">
									<div class="gl-slide swiper-slide">
										<img src="/media/img/product/follow-up-1.jpg" class="gl-image js-of" alt=""/>
									</div>
									<div class="gl-slide swiper-slide">
										<img src="/media/img/product/follow-up-1.jpg" class="gl-image js-of" alt=""/>
									</div>
									<div class="gl-slide swiper-slide">
										<img src="/media/img/product/follow-up-1.jpg" class="gl-image js-of" alt=""/>
									</div>
								</div>
								<div class="gl-slider-pagination"></div>
								<div class="gl-slider-nav gl-slider-nav--p"></div>
								<div class="gl-slider-nav gl-slider-nav--n"></div>
							</div>
						</a>
						<div class="gl-col__b">
							<a href="#" class="gl-title gl-title--link">
								<span class="gl-title__text">&laquo;Бордо&raquo; атласный с&nbsp;камнями в&nbsp;центре</span>
							</a>
							<span class="gl-price">22 000 ₽</span>
						</div>
						<a href="#" class="favourite js-toggle-fav"></a>
					</div>
					<div class="gl-col gl-col--slider gl-col--fav">
						<a href="#" class="gl-col__a">
							<img src="/media/img/product/follow-up-2.jpg" class="gl-image js-of" alt=""/>
						</a>
						<div class="gl-col__b">
							<a href="#" class="gl-title gl-title--link">
								<span class="gl-title__text">&laquo;Бордо&raquo; атласный с&nbsp;камнями в&nbsp;центре</span>
							</a>
							<span class="gl-price">22 000 ₽</span>
						</div>
						<a href="#" class="favourite js-toggle-fav"></a>
					</div>
					<div class="gl-col gl-col--slider">
						<a href="#" class="gl-col__a">
							<img src="/media/img/product/follow-up-3.jpg" class="gl-image js-of" alt=""/>
						</a>
						<div class="gl-col__b">
							<a href="#" class="gl-title gl-title--link">
								<span class="gl-title__text">&laquo;Бордо&raquo; атласный с&nbsp;камнями в&nbsp;центре</span>
							</a>
							<span class="gl-price">22 000 ₽</span>
						</div>
						<a href="#" class="favourite js-toggle-fav"></a>
					</div>
					<div class="gl-col gl-col--slider">
						<a href="#" class="gl-col__a">
							<img src="/media/img/product/follow-up-3.jpg" class="gl-image js-of" alt=""/>
						</a>
						<div class="gl-col__b">
							<a href="#" class="gl-title gl-title--link">
								<span class="gl-title__text">&laquo;Бордо&raquo; атласный с&nbsp;камнями в&nbsp;центре</span>
							</a>
							<span class="gl-price">22 000 ₽</span>
						</div>
						<a href="#" class="favourite js-toggle-fav"></a>
					</div>
-->
				</div>
			</div>
		</div>
	</section>
	<? endif; ?>

	<section class="section section--product-nav" role="navigation">
		<div class="product-nav">
			<?if(isset($productLeft->id)):?>
				<a href="<? echo Route::url('product', array('article' => $productLeft->article)); ?>" class="product-nav__item product-nav__item--l">
					<? $thumb = ThumbHelper::getThumb($productLeft->image, 100, 1000); ?>
					<img src="<?echo '/' . $thumb;?>" class="product-nav__img" alt="vanilastudio"/>
					<div class="product-nav__cont">
						<div class="product-nav__direction"><?= __('Previous') ?></div>
						<div class="product-nav__title"><? echo trim($productLeft->name); ?></div>
					</div>
				</a>
			<?endif;?>
			<?if(isset($productRight->id)):?>
				<a href="<? echo Route::url('product', array('article' => $productRight->article)); ?>" class="product-nav__item product-nav__item--r">
					<div class="product-nav__cont">
						<div class="product-nav__direction"><?= __('Next') ?></div>
						<div class="product-nav__title"><? echo trim($productRight->name); ?></div>
					</div>
					<? $thumb = ThumbHelper::getThumb($productRight->image, 100, 1000); ?>
					<img src="<?echo '/' . $thumb;?>" class="product-nav__img" alt="vanilastudio"/>
				</a>
			<?endif;?>
		</div>
	</section>
	<?if(count($recommendedProducts) > 0):?>
	<section class="section section--similar">
		<header class="section-header section-header--sub"><?= __('You might also like') ?></header>
		<div class="gl gl--similar">
			<div class="gl-cont">
				<div class="gl-row">
				<?foreach($recommendedProducts as $element):?>
					<?echo $element;?>
				<?endforeach;?>
				</div>
			</div>
		</div>
	</section>
	<?endif;?>
</main>