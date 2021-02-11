<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();  //защита от прямого вызова рнр-файла пользователем

global $USER; //переменная понадобится для работы панели у авторизованного пользователя
use Bitrix\Main\Page\Asset;  //класс для подключения стилей, шрифтов и скриптов через bitrix api

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
						<h1>
							<a href="<?if(!CSite::InDir('/index.php')):?>/<?else:?>#<?endif;?>">
					           Мебельный магазин
					        </a>
					    </h1>						
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
						<?$APPLICATION->IncludeComponent(
							"bitrix:system.auth.form", 
							"auth", 
							array(
								"REGISTER_URL" => "register.php",
								"FORGOT_PASSWORD_URL" => "",
								"PROFILE_URL" => "profile.php",
								"SHOW_ERRORS" => "Y",
								"COMPONENT_TEMPLATE" => "auth"
							),
							false
						);?>
					<!-- 	<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
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
						<a href="" class="hd_signup">Зарегистрироваться</a> -->
					</td>
				</tr>
			</table>
			<div class="nv_topnav">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu", 
					"top_nav", 
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "top_nav_child",
						"DELAY" => "N",
						"MAX_LEVEL" => "3",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"ROOT_MENU_TYPE" => "top_nav",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "top_nav"
					),
					false
				);?>
			</div>

		</div>
	</div>
	<div class="bc_breadcrumbs">
			<ul>
				<li><a href="">Каталог</a></li>
				<li><a href="">Мебель</a></li>
				<li><a href="">Выставки и события</a></li>
			</ul>
		<div class="clearboth"></div>	
	</div>
	
	<div class="main_container page">
		<div class="mn_container">
			<div class="sb_sidebar">
				<div class="sb_nav">
					<!-- Здесь вызывается компонент для меню типа sb_nav -->
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"sb_nav", 
						array(
							"ROOT_MENU_TYPE" => "sb_nav",
							"MAX_LEVEL" => "3",
							"CHILD_MENU_TYPE" => "sb_nav_child",
							"USE_EXT" => "Y",
							"COMPONENT_TEMPLATE" => "menu_left",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?>					
				</div>
				<div class="sb_event">
					<div class="sb_event_header"><h4>Ближайшие события</h4></div>
					<p><a href="">29 августа 2012, Москва</a></p>
					<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
				</div>
				
				<div class="sb_event">
					<div class="sb_event_header"><h4>Информация</h4></div>
					<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
				</div>
				
				<div class="sb_action">
					<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/content/11.png" alt=""/></a>
					<h4>Акция</h4>
					<h5><a href="">Мебельная полка всего за 560 Р</a></h5>
					<a href="" class="sb_action_more">Подробнее &rarr;</a>
				</div>
				<div class="sb_reviewed">
					<img src="<?=SITE_TEMPLATE_PATH?>/content/8.png" class="sb_rw_avatar" alt=""/>
					<span class="sb_rw_name">Сергей Антонов</span>
					<span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
					<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
					<div class="clearboth"></div>
					<div class="sb_rw_arrow"></div>
				</div>
			</div>

				
