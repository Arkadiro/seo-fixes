<main role="main">
<?if(isset($slider)) echo $slider;?>
<?
if(is_array($blocks))
{
	foreach($blocks as $block)
	{
		echo $block;
	}
}
else
{
	echo $blocks;
}
if(isset($designers))
	echo $designers;

if(isset($articles))
	echo $articles;
?>

<?/* --- */?>
<?
	$cache = Cache::instance();

	$data = null;
	if(!($data = $cache->get('instagram2'))){
		# client_id
		# e346793635c649dc9425babb52105054
		#
		# client_secret
		# 49059a8af1a24368b31e5035f3cf3dcb
		#
		# url
		# https://instagram.com/oauth/authorize/?client_id=&redirect_uri=&response_type=token

		$token = '182723201.1677ed0.0a13c5566e8247c1b14a53b2b4a558ae';
		$user_id = 'self';

		$instagram_cnct = curl_init(); // инициализация cURL подключения
		curl_setopt( $instagram_cnct, CURLOPT_URL, "https://api.instagram.com/v1/users/" . $user_id . "/media/recent?access_token=" . $token); // подключаемся
		curl_setopt( $instagram_cnct, CURLOPT_RETURNTRANSFER, 1 ); // просим вернуть результат
		curl_setopt( $instagram_cnct, CURLOPT_TIMEOUT, 15 );
		$media = json_decode( curl_exec( $instagram_cnct ) ); // получаем и декодируем данные из JSON
		curl_close( $instagram_cnct ); // закрываем соединение

//		var_dump($media); exit;

		if(isset($media) && isset($media->data)){
			$data = array_slice($media->data, 0, $limit);

			$cache->set('instagram2', $data, 24 * 60 * 60);
		}
		else
		{
			$cache->set('instagram2', true, 24 * 60 * 60);
		}
	}

	$text_id = 2;
	$follow_id = 8;
?>

<? if(isset($data) && is_array($data)){ ?>
<section class="section section--instagram">
	<div class="gl gl--small gl--instagram">
		<div class="gl-cont">
			<div class="gl-row">
				<? for($i = 0; $i < 10; $i++){ ?>
					<?
					if($i == $text_id){
						$text_id = -1;
					?>
						<a href="https://www.instagram.com/Vanilastudio/" class="gl-col ig-go-follow ig-go-follow--headings" target="_blank">
							<div class="gl-col__a">
							</div>
							<div class="gl-col__b">
								<div class="ig-go-follow__text">
									<span class="ig-go-follow__header">@Vanilastudio</span>
									<span class="ig-go-follow__subheader">Instagram</span>
								</div>
							</div>
						</a>
					<?
					}
					elseif($i == $follow_id)
					{
						$follow_id = -1;
					?>
						<div class="gl-col ig-go-follow">
							<div class="gl-col__a">
								<img src="/media/img/instagram/ig-go-follow.jpg" class="gl-image js-of" alt="vanilastudio instagram"/>
							</div>
							<div class="gl-col__b">
								<a href="https://www.instagram.com/Vanilastudio/" class="button dark filled ig-go-follow-btn" role="button" target="_blank"><?= __('follow us') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
							</div>
						</div>
					<?
					}
					elseif($part = array_shift($data))
					{
						$img = $part->images->low_resolution->url;

						$name = 'media/images/instagram/'. md5($part->images->low_resolution->url) .'.jpg';
						file_put_contents($name, file_get_contents($part->images->low_resolution->url));

						$img = ThumbHelper::getThumbExact($name, 338, 338);

						$url = $part->link;
					?>
						<a href="<?= $url ?>" class="gl-col" target="_blank">
							<div class="gl-col__a">
								<img src="<?= $img ?>" class="gl-image js-of" alt=""/>
							</div>
						</a>
					<?
					}
					?>
				<?
				}
				?>
			</div>
		</div>
	</div>
</section>
<? } ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm96K4yolsw-iKNzm5LIQo1TG65mj73MM"></script>

<section class="section section--map">
	<div class="map-wrapper">
		<div class="map-canvas" id="map-canvas"></div>
		<div class="map-hint">
			<div class="map-hint-content">
				<div class="map-hint__header"><?= __("Contacts") ?></div>
				<div class="map-hint__text">
					<div class="map-hint__address">
						<span class="map-hint__address-item">Москва</span>
						<span class="map-hint__address-item">м. Чистые Пруды</span>
						<span class="map-hint__address-item">Рождественский бульвар</span>
						<span class="map-hint__address-item map-hint__address-item--detail">д. 21, стр.2</span>
					</div>
					<div class="map-hint__phones">
						<a href="tel:+74956219687" class="map-hint__phones-item map-hint__phones-item--phone">+7 495 621-96-87</a>
						<a href="tel:+79035429893" class="map-hint__phones-item map-hint__phones-item--whatsup">+7 903 542-98-93</a>
					</div>
				</div>
				<a href="#appointment-dialog" class="modals-btn-link button dark filled map-hint__button" data-spreader="open" role="button"><?= __('make an appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
			</div>
		</div>
	</div>
</section>
<?/* --- */?>

</main>