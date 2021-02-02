<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();  //защита от прямого вызова рнр-файла пользователем

global $USER; //переменная понадобится для работы панели у авторизованного пользователя
use Bitrix\Main\Page\Asset;  //для подключения стилей, шрифтов и скриптов через bitrix api

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/template_style.css"); //подключение стилей
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-1.8.2.min.js"); //подключение скриптов
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/functions.js"); //подключение скриптов
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">'); //подключение метатега
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>"> 
<head>
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta charset="<?=LANG_CHARSET?>">    
	<?$APPLICATION->ShowHead()?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>

	<?if($USER->IsAdmin()):?>
        <div id="bx_panel">
            <?$APPLICATION->ShowPanel();?>
        </div>
	<?endif; //показать панель битрикса если пользователь зашёл как администратор?>

	<div class="wrap"><!--обёртка всей вёрстки с классом wrap-->		
		<div class="hd_header_area"><!--обёртка области шапки;-->	
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">
					
									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">			
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>				
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
							<a href="" class="hd_signup">Зарегистрироваться</a>
						</td>
					</tr>
				</table>
				<div class="nv_topnav">
					<!-- <ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(images/nv_home.png);" ><span></span></a></li>
						<li><a href=""><span>Компания</span></a>
							<ul>
								<li><a href="">Пункт 1</a></li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Новости</span></a></li>
						<li><a href=""><span>Каталог</span></a></li>
						<li><a href=""><span>Акции</span></a>
							<ul>
								<li><a href="">Пункт 1</a>
									<ul>
										<li><a href="">Пункт 1</a></li>
										<li><a href="">Пункт 2</a></li>
									</ul>
								</li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Партнерам</span></a></li>
						<li><a href=""><span>Контакты</span></a></li>
						<div class="clearboth"></div>
					</ul> -->
                         <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "main",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "main",
                                    "CHILD_MENU_TYPE" => "sub",
                                    "USE_EXT" => "Y"
                                )
                            );
                        ?>
				</div>

			</div>
		</div>
		
		<div class="main_container page">