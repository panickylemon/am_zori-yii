<?php
$this->title = 'Земляничные поляны';

use yii\helpers\Html;
use frontend\assets\TabAsset;
use frontend\assets\IeAsset;
use yii\helpers\Url;



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

					<div class="title_fourth_tab">
						Участки в посёлке Земляничные поляны
					</div>

					<div class="text_fourth_tab">
						В посёлке вы можете приобрести участок как с построенным домом, так и без него.
						Построить дом вы можете сами, либо вам могут помочь наши партнеры. Строительство может
						осуществляться по собственному проекту, либо по одному из многочисленных предложенных
						компанией "Хауз проджект", где вы увидите не только дома, но и коттеджи, бани, гаражи,
						таунхаусы.  Все проекты выполняются профессиональными архитекторами.
						На своё усмотрение можете выбрать участок размеров от 16 до 24 соток.
						<a href="<?= Url::toRoute(['selection/selection']) ?>"><div>Выбрать участок</div></a>

					</div>
					<div class="img_fourth_tab">
						<img src="../pictures/sector1.jpg">
					</div>
					<div class="img_fourth_tab">
						<img src="../pictures/sector2.png">
					</div>

					<div class="title_fourth_tab">
						Правила выбора участка
					</div>

					<div class="text_fourth_tab">
						<p>
							При выборе земли необходимо учитывать ряд важных критериев:
						</p>
						<ul>
							<li>
								Форма участка. Самой выгодной для застройки считается квадратная, однако популярностью пользуются и прямоугольные участки,
								в особенности если речь идет о возведении частного дома и создании сада или огорода рядом. Кроме того, встречаются также участки с
								Г-образной структурой, но их приобретают реже. Если у вас есть план расположения построек и всего, что будет находиться на вашей
								будущей земле, и он предусматривает самое эффективное размещение именно на участке такой формы, то есть смысл поискать такой вариант.
								Если же вы планируете обычное строительство дома с пристройками, то с участками Г-образной формы лучше не связываться.
							</li>
							<li>
								Тип грунта на участке. Следует заранее проверить это, поскольку не каждый грунт подходит для закладки фундамента, а ряд типов
								вообще позволяет установить дом, к примеру, только на винтовых сваях.
								Также важно проверить, насколько глубоко залегают грунтовые воды: близкое расположение к поверхности негативно скажется на постройке.
							</li>
							<li>
								Коммуникации. Сюда входит обеспечение участка электричеством, водой, наличие или отсутствие отопления, канализации.
								Если вам не хочется возиться с подключением за свой счет или искать способы альтернативного энергообеспечения, то следует
								выбирать участок, к которому подведены электрические сети напрямую либо находятся в непосредственной близости от него, так чтобы можно
								было подключиться к подстанции. Конечно, участки, к которым не подведено электричество, стоят обычно дешевле, но покупка выгодной не
								окажется: подключение своими силами займет либо очень много времени, либо обойдется в несколько раз дороже. Водоснабжение, если оно не
								имеет централизованного подключения, можно оборудовать скважинным методом. Отопление может быть газовым или электрическим: как правило
								, такой вид можно встретить чаще всего. Что касается канализации, то, если она не оборудована централизованным методом, нужно
								устраивать ее самостоятельно в виде септика. При этом немаловажно сразу уточнять, разрешено ли это на участке,
								поскольку в ряде случаев это невозможно из-за близости к водоемам, охранным зонам, экологически охраняемым районам и т. д.
							</li>
							<li>
								Инфраструктура местности, в которой расположен поселок. К ней относится транспортное сообщение, близость к трассам, удобство подъездов
								как к местности, так и самому участку. Важно сразу уточнить, есть ли общественный транспорт в самом населенном пункте, к которому
								относится участок, есть ли транспортная связь с другими городами или поселками, насколько удобно доехать до участка от того места,
								где вы проживаете на постоянной основе. Кроме того, к инфраструктуре относятся такие объекты, как магазины, аптеки, больницы, школы и
								детские сады, почта, банк. Их наличие влияет на стоимость участка, поэтому, если вам, к примеру, не хочется, чтобы рядом находиласьшкола,
								то лучше выбрать участок в отдалении, так чтобы он находился неподалеку от других объектов, необходимых для комфортного проживания.
							</li>
							<li>
								Расположение участка относительно природных ресурсов: леса, воды. Если участок находится рядом с водоемом, следует проверить,
								насколько удобны подступы к нему, не сливают ли в водоем промышленные отходы.
								Это также важно проверять для того, чтобы установить возможность оборудования локальной канализации.
							</li>
							<li>
								Расположение относительно других участков. При выборе нужно обращать внимание, насколько они удалены от вашего будущего участка,
								не падает ли излишняя тень от соседних строений или деревьев. Также стоит посмотреть, в каком положении находится участок:
								на возвышении, на наклонной плоскости, в нижней части рельефа. От этого будет зависеть степень затопления участка в весеннее время
								от таяния снега: лучше брать землю на возвышении или ровной поверхности. Кроме того, важно, чтобы земли соседей не находились над
								вашим участком:
								это может грозить затоплением при повреждениях канализации или прорыве водопровода.
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>


