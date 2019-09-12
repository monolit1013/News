<?php
    
    include_once 'setting.php';
   /* session_start();
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    
    if($connect) {
        echo 'yes';
    } else {
        echo "no";
    }*/

	if ($_SERVER['REQUEST_URI'] == '/'){
		$Page = 'index';
		$Module = 'index';
	} else {
		$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$URL_Parts = explode('/', trim($URL_Path, ' /'));
		$Page = array_shift($URL_Parts);
		$Module = array_shift($URL_Parts);


	if (!empty($Module)) {
		$Param = array();
		for ($i = 0; $i < count($URL_Parts); $i++) {
			$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
		}
	}
}


	if ($Page == 'index') ;
	else if ($Page == 'news') include('pages/news/news.php');
	else if ($Page == 'comment') include('pages/news/Strategies.php');
	else if ($Page == 'register') include('pages/news/games.php');

	/*func_echo.....................................................................................................................................................*/

	function ECHO_header_account() {
		echo '
		<div id="header-account">
			<div id="header-account-container">
				<div id="logo">
					<img src="images/logo/logo.jpg">
				</div>
				<div id="search">
					<form action="">
						<input type="text" autocomplete="off" name="search" placeholder="Поиск...">
						<button></button>
					</form>
				</div>
				<div id="option">
					<a href="#">
						<i id="option-img">
							<img src="images/account/option.png">
						</i>
					</a>
				</div>
				<div id="account">
					<a href="#" id="account-container-a">
						<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
						<span>monolit101</span>
					</a>
					<ul id="account-ul">
						<li><a href="#" class="account-a"><i class="account-a-img" id="account-a-img-1"></i>Мой профиль</a></li>
						<li><a href="#" class="account-a"><i class="account-a-img" id="account-a-img-2"></i>Мой друзья</a></li>
						<li><a href="#" class="account-a"><i class="account-a-img" id="account-a-img-3"></i>Мой статьи</a></li>
						<li><a href="#" class="account-a"><i class="account-a-img" id="account-a-img-4"></i>Непрочитанное</a></li>
						<li><a href="#" class="account-a"><i class="account-a-img" id="account-a-img-5"></i>Понравившиеся статьи</a></li>
						<li id="account-li-last"><a href="#" class="account-a" id="account-a-last"><i class="account-a-img" id="account-a-img-6"></i>Выход</a></li>
					</ul>
				</div>
				<div id="account-reg">
					<i id="account-reg-i"></i>
					<span>Вход / Регистрация</span>
				</div>
			</div>
		</div>
		';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="сайт на тему: Strategy">
	<meta name="keywords" content="">
	<meta name="author" content="Gachi_Monolit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen and (orientation: portrait) and 
	(max-width:640px), projection" href="css/master.css">
	<link rel="stylesheet" media="screen and (orientation: portrait) and 
	(max-width:1024px), projection" href="css/master.css">
	<link rel="stylesheet" media="screen and (orientation: portrait) and 
	(min-width:1280px), projection" href="css/master.css">
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link rel="icon" type="images/x-icon" href="images/logo/logo.jpg">
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>Главная</title>
	<base href="/"/>
</head>
<body>
    <div id="loading">
        <img class="spinner" src="images/background/spinner.gif">
    </div>
	<div id="button-top">
		<span>▲</span>
	</div>
	<div id="account-reg-div">
		<div id="account-reg-div-container">
			<div id="account-reg-div-container_off"></div>
		</div>
	</div>
	<header>
		<?=ECHO_header_account();?>
		<div id="header-container">
			<div id="menu-main-left">
				<ul id="menu-main-left-ul">
					<li class="menu-main-left-li"><a href="#" class="menu-main-left-a menu-main">Новости</a>
						<div class="menu-main-div">
							<div class="menu-main-div-container">
								<div class="menu-main-div-container-favorite">
									<div class="menu-main-div-container-favorite-span">
										<span>Избранное</span>
									</div>
									<div class="menu-main-div-container-divs">
										<div class="menu-main-div-container-divs-block" id="menu-main-div-container-divs-block">
											<div class="slider_antenna-container-divs-head">
												<a href="#">Новости</a>
											</div>
											<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
											<a href="#">
												<img src="images/menu/d7cdea342c1b0804_848x477.jpg">
											</a>
											<div class="menu-main-div-container-divs-block-button-v2 menu-main-div-container-divs-block-button-v3">
												<div id="menu-main-div-container-divs-block-button-div">▲</div>
											</div>
											<div class="menu-main-container-divs-span-overflow">
												<div class="menu-main-container-divs-span">
												<div class="menu-main-container-divs-span-names">
													<span>Статья об: "</span><a href="" class="menu-main-container-divs-span-names-a">Аниме</a><span>" ;</span>
													<a href="#" class="menu-main-container-divs-span-names-a-top">Подробнее</a>
													<hr>
												</div>
												<div class="menu-main-container-divs-span-div">
														<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
														<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-main-div-container-main">
									<div class="menu-main-div-container-main-header">
										<ul>
											<li><a href="#">Все</a></li>
											<li><a href="#">PC</a></li>
											<li><a href="#">Ps4</a></li>
											<li><a href="#">Ps3</a></li>
											<li><a href="#">Xbox one</a></li>
										</ul>
									</div>
									<div class="menu-main-div-container-container">
										<div class="menu-main-div-container-container-block">
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/account.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
									<div class="menu-main-div-container-container-right-pointer">
										<div>►</div>
									</div>
									<div class="menu-main-div-container-container-left-pointer">
										<div>◄</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-main-left-li"><a href="#" class="menu-main-left-a menu-main">Стратегий</a>
						<div class="menu-main-div">
							<div class="menu-main-div-container">
								<div class="menu-main-div-container-favorite">
									<div class="menu-main-div-container-favorite-span">
										<span>Избранное</span>
									</div>
									<div class="menu-main-div-container-divs">
										<div class="menu-main-div-container-divs-block" id="menu-main-div-container-divs-block">
											<div class="slider_antenna-container-divs-head">
												<a href="#">Стратегий</a>
											</div>
											<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
											<a href="#">
												<img src="images/menu/d7cdea342c1b0804_848x477.jpg">
											</a>
											<div class="menu-main-div-container-divs-block-button menu-main-div-container-divs-block-button-v2">
												<div id="menu-main-div-container-divs-block-button-div">▲</div>
											</div>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span class="menu-main-div-container-divs-block-span-overflow-span">Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>	
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-main-div-container-main">
									<div class="menu-main-div-container-main-header">
										<ul>
											<li><a href="#">Все</a></li>
											<li><a href="#">PC</a></li>
											<li><a href="#">Ps4</a></li>
										</ul>
									</div>
									<div class="menu-main-div-container-container">
										<div class="menu-main-div-container-container-block">
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Стратегий</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
									<div class="menu-main-div-container-container-right-pointer">
										<div>►</div>
									</div>
									<div class="menu-main-div-container-container-left-pointer">
										<div>◄</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-main-left-li"><a href="#" class="menu-main-left-a menu-main">Игры</a>
						<div class="menu-main-div">
							<div class="menu-main-div-container">
								<div class="menu-main-div-container-favorite">
									<div class="menu-main-div-container-favorite-span">
										<span>Избранное</span>
									</div>
									<div class="menu-main-div-container-divs">
										<div class="menu-main-div-container-divs-block" id="menu-main-div-container-divs-block">
											<div class="slider_antenna-container-divs-head">
												<a href="#">Игры</a>
											</div>
											<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
											<a href="#">
												<img src="images/menu/d7cdea342c1b0804_848x477.jpg">
											</a>
											<div class="menu-main-div-container-divs-block-button menu-main-div-container-divs-block-button-v2">
												<div id="menu-main-div-container-divs-block-button-div">▲</div>
											</div>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span class="menu-main-div-container-divs-block-span-overflow-span">Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>	
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-main-div-container-main">
									<div class="menu-main-div-container-main-header">
										<ul>
											<li><a href="#">Все</a></li>
											<li><a href="#">PC</a></li>
											<li><a href="#">Ps4</a></li>
											<li><a href="#">Ps3</a></li>
											<li><a href="#">Xbox one</a></li>
										</ul>
									</div>
									<div class="menu-main-div-container-container">
										<div class="menu-main-div-container-container-block">
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Игры</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
									<div class="menu-main-div-container-container-right-pointer">
										<div>►</div>
									</div>
									<div class="menu-main-div-container-container-left-pointer">
										<div>◄</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-main-left-li"><a href="#" class="menu-main-left-a menu-main">Музыка</a>
						<div class="menu-main-div">
							<div class="menu-main-div-container">
								<div class="menu-main-div-container-favorite">
									<div class="menu-main-div-container-favorite-span">
										<span>Избранное</span>
									</div>
									<div class="menu-main-div-container-divs">
										<div class="menu-main-div-container-divs-block" id="menu-main-div-container-divs-block">
											<div class="slider_antenna-container-divs-head">
												<a href="#">Новости</a>
											</div>
											<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
											<a href="#">
												<img src="images/menu/d7cdea342c1b0804_848x477.jpg">
											</a>
											<div class="menu-main-div-container-divs-block-button menu-main-div-container-divs-block-button-v2">
												<div id="menu-main-div-container-divs-block-button-div">▲</div>
											</div>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span class="menu-main-div-container-divs-block-span-overflow-span">Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>	
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-main-div-container-main">
									<div class="menu-main-div-container-main-header">
										<ul>
											<li><a href="#">Все</a></li>
											<li><a href="#">PC</a></li>
											<li><a href="#">Ps4</a></li>
											<li><a href="#">Ps3</a></li>
											<li><a href="#">Xbox one</a></li>
										</ul>
									</div>
									<div class="menu-main-div-container-container">
										<div class="menu-main-div-container-container-block">
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
									<div class="menu-main-div-container-container-right-pointer">
										<div>►</div>
									</div>
									<div class="menu-main-div-container-container-left-pointer">
										<div>◄</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-main-left-li"><a href="#" class="menu-main-left-a menu-main">Мемы</a>
						<div class="menu-main-div">
							<div class="menu-main-div-container">
								<div class="menu-main-div-container-favorite">
									<div class="menu-main-div-container-favorite-span">
										<span>Избранное</span>
									</div>
									<div class="menu-main-div-container-divs">
										<div class="menu-main-div-container-divs-block" id="menu-main-div-container-divs-block">
											<div class="slider_antenna-container-divs-head">
												<a href="#">Новости</a>
											</div>
											<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
											<a href="#">
												<img src="images/menu/d7cdea342c1b0804_848x477.jpg">
											</a>
											<div class="menu-main-div-container-divs-block-button menu-main-div-container-divs-block-button-v2">
												<div id="menu-main-div-container-divs-block-button-div">▲</div>
											</div>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span class="menu-main-div-container-divs-block-span-overflow-span">Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>	
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-main-div-container-main">
									<div class="menu-main-div-container-main-header">
										<ul>
											<li><a href="#">Все</a></li>
											<li><a href="#">PC</a></li>
											<li><a href="#">Ps4</a></li>
											<li><a href="#">Ps3</a></li>
											<li><a href="#">Xbox one</a></li>
										</ul>
									</div>
									<div class="menu-main-div-container-container">
										<div class="menu-main-div-container-container-block">
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
									<div class="menu-main-div-container-container-right-pointer">
										<div>►</div>
									</div>
									<div class="menu-main-div-container-container-left-pointer">
										<div>◄</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-main-left-li"><a href="#" class="menu-main-left-a menu-main">Еще</a>
						<div class="menu-main-div">
							<div class="menu-main-div-container">
								<div class="menu-main-div-container-favorite">
									<div class="menu-main-div-container-favorite-span">
										<span>Избранное</span>
									</div>
									<div class="menu-main-div-container-divs">
										<div class="menu-main-div-container-divs-block" id="menu-main-div-container-divs-block">
											<div class="slider_antenna-container-divs-head">
												<a href="#">Новости</a>
											</div>
											<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
											<a href="#">
												<img src="images/menu/d7cdea342c1b0804_848x477.jpg">
											</a>
											<div class="menu-main-div-container-divs-block-button menu-main-div-container-divs-block-button-v2">
												<div id="menu-main-div-container-divs-block-button-div">▲</div>
											</div>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span class="menu-main-div-container-divs-block-span-overflow-span">Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>	
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-main-div-container-main">
									<div class="menu-main-div-container-main-header">
										<ul>
											<li><a href="#">Все</a></li>
											<li><a href="#">PC</a></li>
											<li><a href="#">Ps4</a></li>
											<li><a href="#">Ps3</a></li>
											<li><a href="#">Xbox one</a></li>
										</ul>
									</div>
									<div class="menu-main-div-container-container">
										<div class="menu-main-div-container-container-block">
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
														<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
														<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
														<span class="slider_antenna-container-divs-other-views">12321</span>
													</div>
													<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
											<div class="menu-main-div-container-divs">
												<div class="menu-main-div-container-divs-block">
													<div class="menu-main-div-container-divs-block-header">
														<a href="#">Новости</a>
													</div>
													<div class="slider_antenna-container-divs-other slider_antenna-container-divs-other_display_none">
												<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
												<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
												<span class="slider_antenna-container-divs-other-views">12321</span>
											</div>
											<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a">monolit</a>
											</div>
													<a href="#">
														<img src="images/menu/860_auto_1565876368_section-bg-feature-multiplayer-2560.jpg">
													</a>
											<div class="menu-main-div-container-divs-block-span">
												<div class="menu-main-div-container-divs-block-span-overflow">
													<span>Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad
													Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
													<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
									<div class="menu-main-div-container-container-right-pointer">
										<div>►</div>
									</div>
									<div class="menu-main-div-container-container-left-pointer">
										<div>◄</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<section id="main">
		<div id="main-header">
			<div id="main-header-news">
				<a href="#" id="main-header-news-a-main">Новости</a>
				<i id="main-header-news-i"></i>
				<ul id="main-header-news-ul">
					<li class="main-header-news-li">
						<a href="#" class="main-header-news-a">
							«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ
						</a>
					</li>
					<li class="main-header-news-li">
						<a href="#" class="main-header-news-a">
							sssssssssssssssss
						</a>
					</li>
					<li class="main-header-news-li">
						<a href="#" class="main-header-news-a">
							«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ
						</a>
					</li>
					<li class="main-header-news-li">
						<a href="#" class="main-header-news-a">
							«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ
						</a>
					</li>
					<li class="main-header-news-li">
						<a href="#" class="main-header-news-a">
							«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ«Фогейм» запустила новый шутер Black Squ
						</a>
					</li>
				</ul>
			</div>
			<div id="main-header-icons">
				<ul id="main-header-icons-ul">
					<li class="main-header-icons-li">
						<a href="#" class="main-header-icons-a" id="main-header-icons-a-1"><i id="main-header-icons-1"></i>Steam</a>
					</li>
					<li class="main-header-icons-li">
						<a href="#" class="main-header-icons-a" id="main-header-icons-a-2"><i id="main-header-icons-2"></i>Vk</a>
					</li>
					<li class="main-header-icons-li">
						<a href="#" class="main-header-icons-a" id="main-header-icons-a-3"><i id="main-header-icons-3"></i>Uplay</a>
					</li>
					<li class="main-header-icons-li">
						<a href="#" class="main-header-icons-a" id="main-header-icons-a-4"><i id="main-header-icons-4"></i>Rockstar</a></a>
					</li>
				</ul>
			</div>
		</div>
		<div id="slider_antenna">
			<div id="slider_antenna-container">
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
						<div class="menu-main-div-container-divs-block-account-img">
							<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
						</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
					</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/1.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
						<div class="menu-main-div-container-divs-block-account-img">
							<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
						</div>
						<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
						<div class="menu-main-div-container-divs-block-account-img">
							<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
						</div>
						<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/8.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
											</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/7.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
											</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/6.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
											</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/5.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
											</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/4.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
											</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/3.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider_antenna-container-divs">
					<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
					<div class="slider_antenna-container-divs-other">
						<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
						<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
						<span class="slider_antenna-container-divs-other-views">12321</span>
					</div>
					<div class="menu-main-div-container-divs-block-account">
												<div class="menu-main-div-container-divs-block-account-img">
													<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
												</div>
												<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
											</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/2.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-button">
						<div class="slider_antenna-container-divs-button-div">▲</div>
					</div>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-names">
								<span>Статья об: "</span><a href="" class="slider_antenna-container-divs-span-names-a">Аниме</a><span>" ;</span>
								<a href="#" class="slider_antenna-container-divs-span-names-a-top">Подробнее</a>
								<hr>
							</div>
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="slider_antenna-pointer-right">
				<div>►</div>
			</div>
			<div id="slider_antenna-pointer-left">
				<div>◄</div>
			</div>
		</div>
		<div id="slider-clicker">
			<div id="slider-clicker-container">
				<div id="slider-clicker-container-div">
					<div class="slider-clicker-container-divs">
						<img src="images/slider/1.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/2.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/3.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/4.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/5.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/6.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/7.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/8.jpg">
					</div>
					<div class="slider-clicker-container-divs">
						<img src="images/slider/9.jpg">
					</div>
				</div>
			</div>
		</div>
		<div id="main-float">
			<div id="main-left">
				<div id="main-left-header">
					<div id="main-left-header-div">
						<a href="#" id="main-left-header-div-favorite">Свежее</a>
						<a href="#">Популярное</a>
					</div>
					<a href="#" id="main-left-header-article">
						Предложить статью
					</a>
				</div>
				<div class="main-left-container">
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/1.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/2.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/3.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/4.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/5.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/6.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/7.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/8.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
				</div>
				<div id="main-left-slider">
					<div id="main-left-slider-span">
						<span>Игры месяца</span>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/main/RE38WrR.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">3.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/main/games_thumbnail_brawlstars.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Brawl stars</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/9.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Brawl stars</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/1.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Brawl stars</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/1.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Brawl stars</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/2.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/3.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/4.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/5.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/6.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/7.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
					<div class="main-left-slider-div">
						<a href="" class="main-left-slider-div-container">
							<img src="images/slider/8.jpg">
							<div class="main-left-slider-div-container-names">
								<span>Wasteland 3</span>
							</div>
							<span class="main-left-slider-div-container-span">8.2</span>
						</a>
					</div>
				</div>
				<div class="main-left-container">
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/2.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/1.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/3.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/4.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/5.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/6.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/7.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/8.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
				</div>
				<div id="main-left-random">
					<div id="main-left-random-span">
						<span>Рандомные игры</span>
					</div>
					<div class="main-left-random-div">
						<a href="#" class="main-left-random-div-container">
							<img src="images/main/RE38WrR.jpg">
							<a href="#" class="main-left-random-div-container-span">Игры</a>
						</a>
					</div>
					<div class="main-left-random-div">
						<a href="#" class="main-left-random-div-container">
							<img src="images/main/RE38WrR.jpg">
							<a href="#" class="main-left-random-div-container-span">Игры</a>
						</a>
					</div>
				</div>
				<div class="main-left-container">
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
					<div class="main-left-div">
						<div class="main-left-div-container">
							<div class="slider_antenna-container-divs-head"><a href="#">Новости</a></div>
								<div class="main-left-container-divs-other">
									<div class="slider_antenna-container-divs-other-likes"><a href="#">3200</a></div>
									<div class="slider_antenna-container-divs-other-comments"><a href="#">23</a></div>
									<span class="slider_antenna-container-divs-other-views">12321</span>
								</div>
						<div class="menu-main-div-container-divs-block-account">
							<div class="menu-main-div-container-divs-block-account-img">
								<img src="images/account/ad9076ee017b58ae035329ae7641b3adbdb4d53b_hq.jpg">
							</div>
							<a href="#" class="menu-main-div-container-divs-block-account-a menu-main-div-container-divs-block-account-a-count">monolit</a>
						</div>
					<a href="#" class="slider_antenna-container-a-img"><img src="images/slider/9.jpg" class="slider_antenna-container-a-img-img"></a>
					<div class="slider_antenna-container-divs-span-overflow">
						<div class="slider_antenna-container-divs-span">
							<div class="slider_antenna-container-divs-span-div">
								<span>Игровая платформа «Фогейм» запустила новый шутер Black Squad
							Игровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black SquadИгровая платформа «Фогейм» запустила новый шутер Black Squad</span>
							<a href="#" class="menu-main-div-container-divs-block-span-button">Подробнее</a>
							</div>
						</div>
					</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main-right-forum">
				<div id="main-right-forum-name">
					<span>Форум</span>
				</div>
				<div id="main-right-forum-field">
					<a href="#" id="main-right-forum-field-enter">
						<i id="main-right-forum-field-enter-a-i"></i>Вход
					</a>
				</div>
			</div>
			<div id="main-right">
				<div id="main-right-name">
					<span>Навигация</span>
				</div>
				<ul id="main-right-ul">
					<li class="main-right-li"><a href="#">Новости.......................................</a></li>
					<li class="main-right-li"><a href="#">Стратегий....................................</a></li>
					<li class="main-right-li"><a href="#">Игры............................................</a></li>
					<li class="main-right-li"><a href="#">Музыка........................................</a></li>
					<li class="main-right-li"><a href="#">Мемы..........................................</a></li>
					<li class="main-right-li"><a href="#">Еще.............................................</a></li>
				</ul>
			</div>
			<div id="main-right-last-comment">
				<div id="main-right-last-comment-name">
					<span>Комментарии</span>
				</div>
			</div>
		</div>
		<div id="main-slider"></div>
		</section>
	<footer>
		<div id="footer-container">
			<ul class="footer-container-ul">
				<span>Информация</span>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Обратная связь</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Вакансий</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">О нас</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">FAQ по сайту</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Правила</a>
				</li>
			</ul>
			<ul class="footer-container-ul">
				<span>Навигация</span>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Новости</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Статьи</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Видно</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Люди</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Блоги</a>
				</li>
			</ul>
			<ul class="footer-container-ul">
				<span>Игры</span>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Описания игр</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">База игр</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Кооператив</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Раздельный экран</a>
				</li>
				<li class="footer-container-li">
					<a href="#" class="footer-container-a">Общий экран</a>
				</li>
			</ul>
			<div id="footer-container-subscription">
				<div id="footer-container-subscription-span">
					<span>Подпишись</span>
				</div>
				<a href="#"><img src="images/icons/icons8-rockstar-games-48.png"></a>
				<a href="#"><img src="images/icons/icons8-uplay-48.png "></a>
				<a href="#"><img src="images/icons/icons8-вконтакте-48.png "></a>
				<a href="#"><img src="images/icons/icons8-steam-48.png"></a>
			</div>
			<div id="footer-container-info-site">
				<span>© 2019 | Strategy.com</span>
				<div id="footer-container-info-site-logo">
					<img src="images/logo/logo.jpg">
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">

		/*function menuMainDivContainerDivs_Active (elem) {
			document.getElementsByClassName('menu-main-container-divs-span')[elem].style.height = 244 + "px";
			document.getElementsByClassName('menu-main-container-divs-span')[elem].style.paddingTop = 25 + "px";
			document.getElementsByClassName('menu-main-div-container-divs-block-span-overflow')[elem].style.overflow = "auto";
			document.getElementsByClassName('menu-main-div-container-divs-block-account-a')[elem].style.display = "block";
		}

		document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[0].onclick = function(){
			menuMainDivContainerDivs_Active(0);
		}

		document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[1].onclick = function(){
			menuMainDivContainerDivs_Active(1);
		}

		document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[2].onclick = function(){
			menuMainDivContainerDivs_Active(2);
		}

		document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[3].onclick = function(){
			menuMainDivContainerDivs_Active(3);
		}

		document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[4].onclick = function(){
			menuMainDivContainerDivs_Active(4);
		}

		document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[5].onclick = function(){
			menuMainDivContainerDivs_Active(5);
		}*/

	</script>
	<script type="text/javascript">
		
		function slider_antennaContainerDivsButton (elem) {
			document.getElementsByClassName('slider_antenna-container-divs-span')[elem].style.height = 283 + "px";
			document.getElementsByClassName('slider_antenna-container-divs-span')[elem].style.paddingTop = 25 + "px";
			document.getElementsByClassName('slider_antenna-container-divs-span-div')[elem].style.overflow = "auto";
			document.getElementsByClassName('slider_antenna-container-divs-span-names')[elem].style.display = "block";
			document.getElementsByClassName('menu-main-div-container-divs-block-account-a-count')[elem].style.display = "block";
			document.body.style.overflowY = 'hidden';
		}

		var handler = function() {
			var index = this.getAttribute('data-index');
			slider_antennaContainerDivsButton(index);
		}
		for(var i = 0; i < document.getElementsByClassName('slider_antenna-container-divs-button').length; i++) {
			document.getElementsByClassName('slider_antenna-container-divs-button')[i].setAttribute('data-index', i);
			document.getElementsByClassName('slider_antenna-container-divs-button')[i].onclick = handler;
		}

	</script>
	<script type="text/javascript">

		function slider_antennaContainerDivsButton_v22 (elem) {
			document.getElementsByClassName('menu-main-container-divs-span')[elem].style.height = 244 + "px";
			document.getElementsByClassName('menu-main-container-divs-span')[elem].style.paddingTop = 15 + "px";
			document.getElementsByClassName('menu-main-container-divs-span-div')[elem].style.overflow = "auto";
			document.getElementsByClassName('menu-main-container-divs-span-names')[elem].style.display = "block";
			document.getElementsByClassName('menu-main-div-container-divs-block-account-a')[elem].style.display = "block";
			document.body.style.overflowY = 'hidden';
		}

		var handler_v22 = function() {
			var index = this.getAttribute('data-index');
			slider_antennaContainerDivsButton_v22(index);
		}
		for(var i = 0; i < document.getElementsByClassName('menu-main-div-container-divs-block-button-v3').length; i++) {
			document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[i].setAttribute('data-index', i);
			document.getElementsByClassName('menu-main-div-container-divs-block-button-v3')[i].onclick = handler_v22;
		}

	</script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/menu/menu.js"></script>
</body>
</html>