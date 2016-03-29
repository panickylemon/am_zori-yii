<?php
$this->title = 'Рощинская слобода';

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
				<li><a href="#"> > Рощинская слобода</a></li>
			</ul>
		</div>

		<h2>Рощинская слобода</h2>

		<div class="box_icon_village">
			<div class="box_icon_picture_village_1"><img class="pictire_icon_village_1"
			                                             src="../pictures/icon_localization.png" alt="расстояние от
			                                             города"></div>
			<div class="place">60 км от города</div>
		</div>

		<div class="box_icon_village">
			<div class="box_icon_picture_village_1"><img class="pictire_icon_village_1"
			                                             src="../pictures/icon_wallet.png" alt="цена"></div>
			<div class="price">от 400 000 руб. за участок</div>
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
													     data-large="../gallery/images/zp1.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp2.png"
													     data-large="../gallery/images/zp2.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp3.png"
													     data-large="../gallery/images/zp3.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp4.png"
													     data-large="../gallery/images/zp4.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp5.png"
													     data-large="../gallery/images/zp5.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp6.png"
													     data-large="../gallery/images/zp6.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp7.png"
													     data-large="../gallery/images/zp7.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp8.png"
													     data-large="../gallery/images/zp8.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp9.png"
													     data-large="../gallery/images/zp9.png" alt="галерея"
													     data-description="Some description"/>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="../gallery/images/thumbs/tzp10.png"
													     data-large="../gallery/images/zp10.png" alt="галерея"
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
						<h3>О посёлке «Рощинская слобода»</h3>

						<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
							Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

						<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
							Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
							In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
							Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>

						<p>Eu mucius eirmod vix, an iriure dolores est, impetus adolescens constituam quo ei.
							Te mutat voluptatibus per, in purto consul noster eum, quo amet delicata et. Vix option eripuit oportere cu, autem ornatus impedit te per.
							Suscipit disputando ius ne, eum postea referrentur in. Illud moderatius ne pri.</p>

						<p> Поселок «Рощинская слобода» имеет следующие особенности:</p>
						<div>
							<ul>
								<li> Ea pro commodo temporibus..</li>
								<li> Ea pro commodo temporibus.</li>
								<li> Ea pro commodo temporibus.</li>
								<li> Ea pro commodo temporibus.</li>
								<li> Ea pro commodo temporibus.</li>
							</ul>
						</div>
						<p> Инфраструктура:</p>
						<ul>
							<li> lorem ipsum dolor sit amet, sit ea quot ferri assum;</li>
							<li>lorem ipsum dolor sit amet;</li>
							<li>lorem ipsum dolor sit amet;</li>
							<li>lorem ipsum dolor sit amet, sit ea quot ferri assum;</li>
							<li>lorem ipsum dolor sit amet</li>
							<li>lorem ipsum dolor sit amet, sit ea quot ferri assum;</li>
							<li>lorem ipsum dolor sit amet</li>
						</ul>


					</div>
				</div>


				<!--Second tab-->
				<div>

					<div class="map" id="mymap">
						<div class="map_description">
							<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
								Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

							<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
								Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
								In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
								Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>

							<p>Eu mucius eirmod vix, an iriure dolores est, impetus adolescens constituam quo ei.
								Te mutat voluptatibus per, in purto consul noster eum, quo amet delicata et. Vix option eripuit oportere cu, autem ornatus impedit te per.
								Suscipit disputando ius ne, eum postea referrentur in. Illud moderatius ne pri.</p>

						</div>
					</div>

				</div>


				<!--Third tab-->
				<div class="third_tab">
					<div class="third_tab_scheme">
						<img src="../pictures/scheme1.png" alt="схема проезда">
					</div>
				</div>

				<!--Fourth tab-->
				<div class="fourth_tab">

					<div class="title_fourth_tab">
						Участки в посёлке «Рощинская слобода»
					</div>

					<div class="text_fourth_tab">
						<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
							Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
							In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
							Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>

						<p>Eu mucius eirmod vix, an iriure dolores est, impetus adolescens constituam quo ei.
							Te mutat voluptatibus per, in purto consul noster eum, quo amet delicata et. Vix option eripuit oportere cu, autem ornatus impedit te per.
							Suscipit disputando ius ne, eum postea referrentur in. Illud moderatius ne pri.</p>
<!--						<a href="--><?//= Url::toRoute(['selection/selection']) ?><!--" class="link_selection">-->
<!--							<p>Выбрать участок</p>-->
<!--						</a>-->

					</div>
					<div class="img_fourth_tab">
						<img src="../pictures/sector1.jpg" alt="участок">
					</div>
					<div class="img_fourth_tab">
						<img src="../pictures/sector2.png"  alt="участок">
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
								<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
									Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

								<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
									Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
									In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
									Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>
							</li>
							<li>
								<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
									Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

								<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
									Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
									In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
									Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>
							</li>
							<li>
								<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
									Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

								<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
									Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
									In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
									Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>
							</li>
							<li>
								<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
									Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

								<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
									Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
									In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
									Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>
							</li>
							<li>
								<p>Lorem ipsum dolor sit amet, sit ea quot ferri assum. Postea sensibus constituam ex vel, ex eos percipit insolens.
									Te eos ipsum harum civibus, doctus principes temporibus et mei, nam ut vide oporteat signiferumque. Quo illum dissentias id, quo ea dolorum adolescens.</p>

								<p>Ea pro commodo temporibus. Quas audire vim et. Ei duo liber suscipit. Id nec case equidem.
									Ne exerci deleniti vim. His ea iudico tempor, graeci abhorreant cu vis.
									In usu eros fabellas reformidans, epicuri consetetur cu cum. Probo inani periculis his et, paulo homero molestiae pri te.
									Munere dicunt perfecto in mea, velit delenit et usu. Eros placerat assentior id his.</p>
							</li>

						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>


