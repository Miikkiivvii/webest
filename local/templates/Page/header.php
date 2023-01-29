<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?LANGUAGE_ID?>">
<head>
<?$APPLICATION->ShowHead()?>
<?$APPLICATION->SetAdditionalCSS("/local/templates/default/template_style.css");?>
    <?
    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addJs("/local/templates/default/js/jquery-1.8.2.min.js");
    Asset::getInstance()->addJs("/local/templates/default/js/slides.min.jquery.js");
    Asset::getInstance()->addJs("/local/templates/default/js/jquery.carouFredSel-6.1.0-packed.js");
    Asset::getInstance()->addJs("/local/templates/default/js/functions.js");
    ?>
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="http://webest-homw3/?bitrix_preview_site_template=Main.b7c3ff1baf6ce3c385cf6f3ec7aa81f12184659f091aace6241f72c97bf44636"><?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"PATH" => "/local/templates/Page/components/heder-name.php",
										"EDIT_TEMPLATE" => ""
									)
								);?></a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel"><?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"PATH" => "/local/templates/Page/components/heder-phone.php",
										"EDIT_TEMPLATE" => ""
									)
								);?></span>	<br/>	
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
					<ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(/local/templates/default/images/nv_home.png);" ><span></span></a></li>
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
					</ul>
				</div>
			</div>
		</div>
		
		<!--- // end header area --->
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
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title">Заголовок страницы</p>
						</div>