<body>
	<svg style="display: none"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<symbol id="arrow-1" viewBox="0 0 13 13"><g id="arr-right"><polygon class="st2" points="6.3,0 5.6,0.7 11.1,6 0,6 0,7 11.1,7 5.6,12.3 6.3,13 13,6.5"/></g></symbol>
		<symbol id="share-twitter" viewBox="0 0 22.3333 17.2266"><path d="M7.0236,17.2266A12.608,12.608,0,0,0,20.06069,4.855c0-.188-.0041-.3762-.0133-.5635A9.07124,9.07124,0,0,0,22.3333,2.0401a9.50687,9.50687,0,0,1-2.6312.6856A4.41575,4.41575,0,0,0,21.7168.3192a9.49643,9.49643,0,0,1-2.9093,1.0552A4.69753,4.69753,0,0,0,15.4628,0a4.4719,4.4719,0,0,0-4.58291,4.3502,4.12129,4.12129,0,0,0,.11931.9899A13.25165,13.25165,0,0,1,1.55459.7977a4.167,4.167,0,0,0-.6207,2.1862A4.29327,4.29327,0,0,0,2.973,6.6031,4.74455,4.74455,0,0,1,.89769,6.0587c-.0011.0181-.0011.0372-.0011.0552a4.41475,4.41475,0,0,0,3.6762,4.2636,4.80761,4.80761,0,0,1-1.20789.1534,4.9239,4.9239,0,0,1-.86151-.0784,4.56728,4.56728,0,0,0,4.2808,3.0212A9.506,9.506,0,0,1,1.093,15.334,9.98562,9.98562,0,0,1,0,15.2738a13.48239,13.48239,0,0,0,7.0236,1.9528"/></symbol>
		<symbol id="share-facebook" viewBox="0 0 11.5419 21"><path d="M7.49157,21V11.42022H10.8947l.50959-3.73267H7.49157V5.30441c0-1.08152.31792-1.81809,1.95781-1.81809H11.5419V.14738A29.26426,29.26426,0,0,0,8.49333,0c-3.0167,0-5.0814,1.73946-5.0814,4.934V7.68756H0v3.73267H3.41193V21Z"/></symbol>
		<symbol id="close-modal" viewBox="0 0 21.87354 21.85352"><g><polygon points="21.87354,21.14648 11.57056,10.84351 21.70703,0.70703 21,0 10.86353,10.13647 0.87354,0.14648 0.1665,0.85352 10.15649,10.84351 0,21 0.70703,21.70703 10.86353,11.55054 21.1665,21.85352"/></g></symbol>
		<symbol id="search" viewBox="0 0 14.49854 14.83203"><g><path d="M14.49854,13.41797l-3.32782-3.32782C12.00049,9.0293,12.5,7.69812,12.5,6.25C12.5,2.80371,9.69629,0,6.25,0 S0,2.80371,0,6.25s2.80371,6.25,6.25,6.25c1.27716,0,2.46503-0.38666,3.45569-1.04675l3.37878,3.37878L14.49854,13.41797z M2,6.25 C2,3.90674,3.90674,2,6.25,2s4.25,1.90674,4.25,4.25S8.59326,10.5,6.25,10.5S2,8.59326,2,6.25z"/></g></symbol>
		<symbol id="request-success-icon" viewBox="0 0 52.29785 54.10303"><g><polygon points="22.06738,41.17236 10.75684,28.60547 12.24316,27.26758 21.93262,38.03369 50.70215,0 52.29785,1.20605"/><path d="M22.21289,54.10303C9.96484,54.10303,0,44.13818,0,31.88965C0,19.6416,9.96484,9.67676,22.21289,9.67676 c3.98242,0,7.88867,1.06592,11.29688,3.08252l-1.01953,1.72168c-3.09961-1.83447-6.65332-2.8042-10.27734-2.8042 C11.06738,11.67676,2,20.74414,2,31.88965s9.06738,20.21338,20.21289,20.21338s20.21387-9.06787,20.21387-20.21338 c0-4.65869-1.54004-9.03662-4.45508-12.65967l1.55859-1.25391c3.15723,3.92578,4.89648,8.86719,4.89648,13.91357 C44.42676,44.13818,34.46191,54.10303,22.21289,54.10303z"/></g></symbol>
		<symbol id="search-zoom-ic" viewBox="0 0 18.45703 18.20703"><path d="M18.45703,16.79297l-5.43036-5.18036C13.94702,10.39703,14.5,8.88867,14.5,7.25C14.5,3.25244,11.24756,0,7.25,0 S0,3.25244,0,7.25s3.25244,7.25,7.25,7.25c1.63867,0,3.14703-0.55298,4.36261-1.47333l5.43036,5.18036L18.45703,16.79297z M7.25,12.5C4.35498,12.5,2,10.14502,2,7.25S4.35498,2,7.25,2s5.25,2.35498,5.25,5.25S10.14502,12.5,7.25,12.5z"/></symbol>
	</svg>
	<div class="wrapper<?=isset($is_inner) && $is_inner ? ' _content-inner' : '';?>">
		<header role="navigation" class="header-wrapper<?=isset($is_inner) && $is_inner && !(isset($is_product))? ' theme-inner' : '';?> <?if(isset($header_class)) echo $header_class;?>">
			<div class="header">
				<div class="header-layout">
					<div class="header-holder">

						<?php if(isset($top_menu)) echo $top_menu; ?>

						<div class="header__area-right">
							<div class="header-right-l-t">
								<a href="tel:+74956219687" class="header-phone-item header-phone-item--whatsup">+7 495 621-96-87</a>
								<a href="/favourites/" class="header-favourites"><span class="header-favourites__counter"><?=$liked_count;?></span></a>
							</div>
							<a href="#appointment-dialog" class="modals-btn-link appointment-btn header-appointment" onclick="ym(9412237, 'reachGoal', 'Fit_header'); return true;" data-spreader="open" ><?= __('Make an appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
							<a href="#appointment-dialog" class="modals-btn-link appointment-btn header-appointment header-appointment--mob" data-spreader="open" ><?= __('Appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
						</div>
						<div class="header__area-mid">
							<a href="/" class="header__logo">
								<img src="/media/images/icons/ic_logo_big_ru_white.svg" class="header__logo-img" alt="VANILA Studio"/>
								<? if(isset($is_inner) && $is_inner) : ?>
								<img src="/media/images/icons/ic_logo_big_ru_gray.svg" class="header__logo-img header__logo-img--dark" alt="VANILA Studio"/>
								<img src="/media/img/logo--small.svg" class="header__logo-img header__logo-img--mob" alt="VANILA Studio"/>
								<img src="/media/img/logo--small--dark.svg" class="header__logo-img header__logo-img--mob-dark" alt="VANILA Studio"/>
								<? endif; ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mini-header" data-distance="500">
				<div class="mini-header-layout">
					<div class="mini-header-holder">

						<?php if(isset($top_menu_mini)) echo $top_menu_mini; ?>

						<div class="mini-header-c mini-header-c--m">
							<a href="/" class="mini-header-logo">
								<img src="/media/img/logo--small.svg" class="mini-header-logo__img" alt="vanilastudio.ru"/>
							</a>
						</div>
						<div class="mini-header-c mini-header-c--r">
							<a href="tel:+74956219687" class="mini-header-phone">+7 495 621-96-87</a>
							<a href="#appointment-dialog" class="modals-btn-link button dark filled mini-header-appointment" data-spreader="open" role="button"><?= __('Make an appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
							<a href="#appointment-dialog" class="modals-btn-link button dark filled mini-header-appointment mini-header-appointment--mob" data-spreader="open" role="button"><?= __('Appointment') ?><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon button-arr-ic"><use xlink:href="#arr-right"></use></svg></a>
						</div>
					</div>
				</div>
			</div>
			<div class="mob-menu">
				<?php if(isset($top_menu_mobile)) echo $top_menu_mobile; ?>
			</div>
		</header>
