<?php
$this->title = 'Земляничные поляны';

use yii\helpers\Html;
use frontend\assets\TabAsset;
use frontend\assets\IeAsset;
use yii\widgets\ActiveForm;


TabAsset::register($this);
IeAsset::register($this);

?>

<script type="text/javascript">
	$(document).ready(function () {
		$('#villageTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activetab_bg: 'white', // background color for active tabs in this group
			inactive_bg: '#E8E8E8' // background color for inactive tabs in this group
		});
	});
</script>

<script type="text/javascript"
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=3nwOYHIZ-_zqZeuB7jfIrvumatVeIB1z&width=auto&height=420&id=mymap">
</script>
<noscript>
	<style>
		.es-carousel ul {
			display: block;
		}
	</style>
</noscript>

<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
</script>

<script type="text/javascript">

	$(document).ready(function () {
		$('.corner_ie8').corner();
	});

</script>


<div class="content_village">
	<div class="content_layout_village">

		<div class="breadcrumbs">
			<ul>
				<li><?= Html::a('Амурские зори', ['page/index']) ?></li>
				<li> <?= Html::a(' > Посёлки', ['page/village']) ?></li>
				<li><a href="#"> > Земляничные поляны</a></li>
			</ul>
		</div>

		<h2>Земляничные поляны</h2>

		<div class="box_icon_village">
			<div class="box_icon_picture_village_1"><img class="pictire_icon_village_1"
			                                             src="../pictures/icon_localization.png"></div>
			<div class="place">40 км от города</div>
		</div>

		<div class="box_icon_village">
			<div class="box_icon_picture_village_1"><img class="pictire_icon_village_1"
			                                             src="../pictures/icon_wallet.png"></div>
			<div class="price">от 250 000 руб. за участок</div>
		</div>


		<div class="villageTab" id="villageTab">
			<ul class="resp-tabs-list hor_1">
				<li> О посёлке</li>
				<li> Местоположение</li>
				<li> Схема посёлка</li>
				<li> Участки</li>
			</ul>

			<div class="resp-tabs-container hor_1">
				<!--First tab-->
				<div class="right_left_container_village">
					<div class="left_block_tab_village">
						<div id="rg-gallery" class="rg-gallery">
							<div class="rg-thumbs">
								<!-- Elastislide Carousel Thumbnail Viewer -->
								<div class="es-carousel-wrapper">
									<div class="es-nav">
										<span class="es-nav-prev">Previous</span>
										<span class="es-nav-next">Next</span>
									</div>
									<div class="es-carousel">
										<ul>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp1.png"
													     data-large="../gallery/images/zp1.png" alt="image01"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp2.png"
													     data-large="../gallery/images/zp2.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp3.png"
													     data-large="../gallery/images/zp3.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp4.png"
													     data-large="../gallery/images/zp4.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp5.png"
													     data-large="../gallery/images/zp5.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp6.png"
													     data-large="../gallery/images/zp6.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp7.png"
													     data-large="../gallery/images/zp7.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp8.png"
													     data-large="../gallery/images/zp8.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp9.png"
													     data-large="../gallery/images/zp9.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp10.png"
													     data-large="../gallery/images/zp10.png" alt="image02"
													     data-description="Some description"/>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End Elastislide Carousel Thumbnail Viewer -->
							</div>
							<!-- rg-thumbs -->
						</div>
					</div>


					<div class="right_block_tab_village">
						<h3>О посёлке «Земляничные поляны»</h3>

						<p>«Земляничные поляны» — это готовый коттеджный поселок в котором уже живут и активно
							строят свои дома более 120 семей,
							оптимальный вариант приобретения жилья по экономичной цене. Посёлок сочетает в себе
							блага цивилизации и умиротворение
							природы с возможностями для активного отдыха. </p>

						<p>Лес по одной из границ поселения служит естественным барьером, а равнинный ландшафт
							местности позволит вам
							воплотить мечты об идеально обустроенном участке.</p>

						<p>Квалифицированные работники управляющей компании следят за состоянием дорог, осуществляют
							уход за территорией посёлка,
							держат под контролем инженерные сети, охраняют территорию и осуществляют клининговые
							услуги.</p>

						<p> Поселок «Земляничные поляны» имеет следующие особенности:</p>

						<div>
							<ul>
								<li> 64 га, 310 участков от 6 до 35 соток.</li>
								<li>40 км от города(40–45 минут езды на автомобиле).</li>
								<li>10–15 минут до ближайшего посёлка.</li>
								<li>Дачное некоммерческое партнерство (ДНП).</li>
								<li>Водоснабжение, газ, электричество от 10 кВт.</li>
							</ul>
						</div>
						<p> Инфраструктура:</p>
						<ul>
							<li> контрольно-пропускной пункт (КПП), ограждение территории;</li>
							<li>централизованное уличное освещение;</li>
							<li>детские и спортивные площадки;</li>
							<li>благоустроенная береговая линия;</li>
							<li>гостевая парковка;</li>
							<li>благоустроенные рекреационные зоны и прогулочные аллеи;</li>
							<li>ответственная управляющая компания (УК) и профессиональная служба охраны.</li>
						</ul>


					</div>
				</div>


				<!--Second tab-->
				<div>

					<div class="map" id="mymap">
						<div class="map_description">
							<p>Посёлок «Земляничные поляны» располагается в 40 км от города в Ивановском районе в
								окружении живописных холмов, лесов и озер.

							<p>Дорога на личном автомобиле от дома до КАД по Новоприозерскому шоссе займет у вас не
								более 40–45 минут.</p>
							Неподалёку располагается лесная полоса, богатая ягодами и грибами.</p>

							<p>
								Любители активного отдыха по достоинству оценят разнообразие фитнес-центров в
								ближайшем посёлке,
								а также располагающийся по близости горнолыжный курорт «Сноу Парк».</p>

							Добраться на личном транспорте можно следующим образом: Благовещенск → Ивановка →
							деревня Дмитриевка → посёлок Березовка → посёлок Петропавловка → коттеджный поселок
							«Земляничные поляны».</p>
							<ul>До поселка можно добраться тремя разными путями:
								<li> на автомобиле;</li>
								<li> на автобусе;</li>
								<li> на электричке.</li>
							</ul>

						</div>
					</div>
				</div>


				<!--Third tab-->
				<div class="third_tab">
					<img src="../pictures/scheme1.jpg">
				</div>

				<!--Fourth tab-->
				<div class="fourth_tab">

				</div>

			</div>
		</div>
	</div>
</div>


