 <?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();
?>				
						
					<div class="clearboth"></div>
				</div><!--- // end of mn_container--->
			</div><!--- // end of main contaier page--->
			<div class="ft_footer">
					<div class="ft_container">
						<div class="ft_about">
							<h4>О магазине</h4>
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"bottom_menu_left", 
								array(
									"ROOT_MENU_TYPE" => "bottom_nav",
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "",
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
							<!-- <ul>
								<li><a href="">История</a></li>
								<li><a href="">Руководство</a></li>
								<li><a href="">Контакты</a></li>
							</ul> -->
						</div>
						 <div class="ft_catalog">
							<h4>Каталог товаров</h4>
							<ul>
								<li><a href="">Кухни</a></li>
								<li><a href="">Кровати и кушетки</a></li>
								<li><a href="">Гарнитуры</a></li>
								<li><a href="">Тумобчки и прихожие</a></li>
								<li><a href="">Спальни и матрасы</a></li>
								<li><a href="">Аксессуары</a></li>
								<li><a href="">Столы и стулья</a></li>
								<li><a href="">Каталоги мебели</a></li>
								<li><a href="">Раскладные диваны</a></li>
								<li><a href="">Кресла</a></li>
							</ul>
							
						</div> 
						<div class="ft_contacts">
							<h4>Контактная информация</h4>
							<!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
							<p class="vcard">
								<span class="adr">
									<span class="street-address">ул. Летняя стр.12, офис 512</span>
								</span>
								<span class="tel">
									<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								        "AREA_FILE_SHOW" => "index", //значение делает отображение включаемой области на всём сайте
								        "AREA_FILE_SUFFIX" => "inc", 
								        "AREA_FILE_RECURSIVE" => "Y", 
								        "EDIT_TEMPLATE" => "standard.php" 
								    	)
									);?>
								</span>
								<strong>Время работы:</strong> <br/> <span class="workhours">ежедневно с 9-00 до 18-00</span><br/>
							</p>
							<ul class="ft_solcial">
								<li><a href="" class="fb"></a></li>
								<li><a href="" class="tw"></a></li>
								<li><a href="" class="ok"></a></li>
								<li><a href="" class="vk"></a></li>
							</ul>
							<div class="ft_copyright">© 2000 - 2012 "Мебельный магазин" </div>							
						</div>
					<div class="clearboth"></div>
				</div>
			</div>
		</div><!--- // end of wrap area --->
	</body>
</html>
