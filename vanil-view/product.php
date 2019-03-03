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
							if(strlen($thumb) == 0) continue;
						?>
						<li class="product-visual-thumb" data-full="/<? echo $content->image; ?>"><img src="/<? echo $thumb; ?>" class="product-visual-thumb__img" alt="vanilastudio"/></li>
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
							</div>
						</div>

						<? if(is_numeric($content->price) && $content->price > 0) :?>
						<div class="product-price">
<!-- 							<a href="#" class="product-price__show"><?= __('show the price $') ?></a> -->
							<span class="product-price__showed" style="display: inline;"><? echo number_format($content->price, 0, '', ' '); ?><? if(is_numeric($content->price)) :?> &#8381;<? endif; ?></span>
							<? if(is_numeric($content->old_price) && $content->old_price > 0) :?>
							<span class="product-price__showed product-old-price" style="display: inline;"><? echo number_format($content->old_price, 0, '', ' '); ?><? if(is_numeric($content->old_price)) :?> &#8381;<? endif; ?></span>
							<? endif; ?>
						</div>
						<? elseif(!is_numeric($content->price) && strlen($content->price) > 0) :?>
						<div class="product-price">
<!-- 							<a href="#" class="product-price__show"><?= __('show the price $') ?></a> -->
							<span class="product-price__showed" style="display: inline;"><? echo $content->price; ?></span>
						</div>
						<? endif; ?>

						<div class="product-actions">
							<a href="#appointment-dialog" onclick="ym(9412237, 'reachGoal', 'Fit_card'); return true;" class="modals-btn-link  product-action__appointment button dark filled" data-spreader="open"><?= __('Make an appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
							<a data-id="<?=$content->id;?>" class="product-action__set-aside button dark<?=$fav ? ' active' : '';?>"><?=$fav ? 'Отложено' : 'Отложить';?></a>
						</div>
					</div>
					<div class="product-footer">
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
			</div>
		</div>
	</section>
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