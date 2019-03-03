<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><? echo (!empty($meta['title'])) ? $meta['title'] : 'VANILA'; ?></title>
	<meta name="description" content="<? echo (!empty($meta['description'])) ? $meta['description'] : ''; ?>">
	<meta name="keywords" content="<? echo (!empty($meta['keywords'])) ? $meta['keywords'] : ''; ?>">
	<!-- Meta open graph -->
	<meta property="og:type" content="website">
  <meta property="og:url" content="https://vanilastudio.ru/">
  <meta property="og:title" content="Ваниль - Свадебный салон в центре Москвы">

  <meta property="og:image" content="https://vanilastudio.ru/media/images/logo/vanil-logo-gr.jpg">
  <meta property="og:site_name" content="Свадебный салон Ваниль">
  <meta property="og:locale" content="ru">
  <meta property="og:description" content="Свадебные платья и аксессуары от лучших брендов">
	<meta name="robots" content="noyaca"/>

	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=vMr68weMl2">
	<link rel="icon" type="image/png" href="/favicon-32x32.png?v=vMr68weMl2" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png?v=vMr68weMl2" sizes="16x16">
	<link rel="manifest" href="/manifest.json?v=vMr68weMl2">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=vMr68weMl2" color="#ffffff">
	<?php
	if(isset($headString))
		echo $headString;
	?>
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="/media/css_vanilla/libs/swiper.min.css">
	<link rel="stylesheet" href="/media/css_vanilla/style.css?v=1.0">
	<link rel="stylesheet" href="/media/css/overrides.css">
	<link rel="stylesheet" href="/markup/css/style_overrides.css">
	<link rel="stylesheet" href="/media/css_vanilla/shop.css?rev=36">

	<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.11.1/dist/css/suggestions.min.css" type="text/css" rel="stylesheet" />

	<? //$f = file_get_contents('https://' . $_SERVER['HTTP_HOST'] . '/tags_css/');?>

	<!-- <style>
		<?//=$f;?>
	</style> -->

	<meta name="yandex-verification" content="cff72d39587598d7" />
<? if(isset($canonical)) :?>
	<link rel="canonical" href="https://vanilastudio.ru<?=$canonical;?>" />
<? endif; ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23033628-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23033628-1');
</script>


</head>
<?php
if(isset($header))
	echo $header;
if(isset($content))
	echo $content;
if(isset($footer))
	echo $footer;
?>
</html>