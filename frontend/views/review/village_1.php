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
				<li> Отзывы</li>
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

					<div class="reviews">
						<div class="review corner_ie8">
							<div>
								<div class="signature_review">Александр Николаевич, житель участка №24</div>
								<div class="date_review">12 мая 2015 19:04</div>
								Приобрел в начале прошлого лета участок в Земляничных полянах. Практически сразу
								начал строительство.
								Заложил фундамент. Стоял зиму по всем правилам, до весны. Потеплеет, начну стены
								возводить.
								Вкопал столбы и для будущей беседки. Жена проект разрабатывает.
								Хочу поблагодарить СИТ за своевременную прокладку коммуникаций. Я сам люблю,
								когда всё идет по плану.
								Поэтому рад, что сотрудничаю с компанией, для которой обещания тоже не пустой
								звук.
							</div>
						</div>

						<div class="review corner_ie8">
							<div>
								<div class="signature_review">Анна</div>
								<div class="date_review">04 апреля 2015 13:21</div>
								В 2015 году в посёлке закончили монтаж насосной и очистной станции, установили
								детскую площадку,
								проложили внутрипоселковые пешеходные дорожки, начали и завершили плановый
								дорожный ремонт в третьей очереди
								проекта и начали заниматься электричеством: в 1 и 2 очереди проекта уже
								установлены
								трансформаторные подстанции.
								Электрификация поселка продолжается и идет согласно графику, размещенному на
								сайте проекта.
								Значит, есть основания полагать, что и в будущем застройщик будет придерживаться
								плана.
							</div>
						</div>

						<div class="review corner_ie8">
							<div>
								<div class="signature_review">Степан, житель участка №141</div>
								<div class="date_review">26 февраля 2014 9:25</div>
								Расположение и сам поселок нравятся, пока всем доволен. Сейчас начинаю
								обустройство.
								Долго выбирал, какую канализацию установить, в итоге заказал Юнилос, они вроде
								без запаха и откачивать ассенизатором не нужно.
								Пока только установили, запускать будем позже как только дом обустроим дом для жизни
							</div>
						</div>

						<div class="review corner_ie8">
							<div>
								<div class="signature_review">Татьяна Станиславовна</div>
								<div class="date_review">7 февраля 2014 17:19</div>
								Весьма адекватный, достаточно большой поселок. Видно, что за ним следят.
								По цене один из самых дешёвых из днп в том районе, и по качеству пожалуй один из
								лидеров.
								Сейчас рассматриваем разные варианты с ипотекой и рассрочкой. Думаю, что к лету
								окончательно уже определимся.
							</div>
						</div>

						<div class="review corner_ie8">
							<div>
								<div class="signature_review">Андрей Олегович, житель участка №73</div>
								<div class="date_review">25 января 2014 19:10</div>
								Лучше один раз увидеть, я вам советую съездить в поселок и окунуться в его
								уютную атмосферу.
								Люди строятся, много поселков раскуплено. Вот посмотрите, уезжать не захотите)
							</div>
						</div>

						<div class="review corner_ie8">
							<div>
								<div class="signature_review">Георгий, житель участка №64</div>
								<div class="date_review">19 января 2014 10:01</div>
								Обустройство поселка идет полным ходом. Я рад, что купил тут участок. Нет ничего
								лучше надежной компании.
								Многие знакомые накупили дешевые участки в малоизвестных компаниях, теперь
								мучаются, потому что их бросили, купили ветер в поле.
							</div>
						</div>

					</div>


					<div class="form_review_wrapper">
						<div class="title_review_form">Оставить отзыв</div>

						<?php $form = ActiveForm::begin([
							'id' => 'form-review',
							'options' => [
								//'class' => '',
								'name' => 'review_form ',
							],
						]); ?>
						<div class="form_line_element">
							<div class="form_text">Имя<sup>*</sup></div>
							<div class="form_element">
								<?= $form->field($review, 'firstname')->textInput(['maxlength' => true, 'class' => 'firstname field_incorrect'])->label(''); ?>
							</div>
							<div class="form_element_result"></div>
							<div class="firstname_error_text form_error_text">Введите имя длиной от 2 до 32 символов на кириллице или латинице</div>
						</div>

						<div class="form_line_element">
							<div class="form_text">Отчество</div>
							<div class="form_element">
								<?= $form->field($review, 'middlename')->textInput(['maxlength' => true, 'class' => 'middlename'])->label(''); ?>
							</div>
							<div class="form_element_result"></div>
							<div class="middlename_error_text form_error_text">Введите отчество длиной от 2 до 32 символов на кириллице или латинице</div>
						</div>

						<div class="form_line_element">
							<div class="form_text">Фамилия</div>
							<div class="form_element">
								<?= $form->field($review, 'lastname')->textInput(['maxlength' => true, 'class' => 'lastname'])->label(''); ?>
							</div>
							<div class="form_element_result"></div>
							<div class="lastname_error_text form_error_text">Введите фамилию длиной от 2 до 32 символов на кириллице или латинице</div>
						</div>

						<div class="form_line_element">
							<div class="form_text">№ участка (если являетесь жителем данного посёлка)</div>
							<div class="form_element">
								<?= $form->field($review, 'number_sector')->textInput(['maxlength' => true, 'class' => 'locality'])->label(''); ?>
							</div>
							<div class="form_element_result"></div>
							<div class="locality_error_text form_error_text">Введите номер Вашего участка</div>
						</div>

						<div class="form_line_element text_review">
							<div class="form_text">Ваш отзыв <sup>*</sup></div>
							<div class="form_element">
								<?= $form->field($review, 'number_sector')->textarea(['class' => 'my_review field_incorrect'])->label(''); ?>
							</div>
							<div class="form_element_result"></div>
							<div class="my_review_error_text form_error_text">Введите текст от 10 до 1500 символов на кириллице</div>
						</div>

						<div class="form_line_element form_center">
							<?php echo Html::submitButton('Отправить', ['class' => 'submit_review']) ?>
						</div>

						<?php ActiveForm::end(); ?>


						<!--						-->
						<!--						<form name="review_form" action="" method="post">-->
						<!---->
						<!--							<div class="form_line_element">-->
						<!--								<div class="form_text">Имя <sup>*</sup></div>-->

						<!--								<div class="form_element"><input type="text" value="" name="firstname"-->
						<!--								                                 class="firstname field_incorrect">
																</div>-->

						<!--								<div class="form_element_result"></div>-->

						<!--								<div class="firstname_error_text form_error_text">-->
						<!--									Введите имя длиной от 2 до 32 символов на кириллице или латинице-->
						<!--								</div>-->
						<!--							</div>-->
						<!---->
						<!--							<div class="form_line_element">-->
						<!--								<div class="form_text">Отчество</div>-->
						<!--								<div class="form_element"><input type="text" value="" name="middlename"-->
						<!--								                                 class="middlename"></div>-->
						<!--								<div class="form_element_result"></div>-->
						<!--								<div class="middlename_error_text form_error_text">-->
						<!--									Введите отчество длиной от 2 до 32 символов на кириллице или латинице-->
						<!--								</div>-->
						<!--							</div>-->
						<!---->
						<!--							<div class="form_line_element">-->
						<!--								<div class="form_text">Фамилия</div>-->
						<!--								<div class="form_element"><input type="text" value="" name="lastname"-->
						<!--								                                 class="lastname"></div>-->
						<!--								<div class="form_element_result"></div>-->
						<!--								<div class="lastname_error_text form_error_text">-->
						<!--									Введите фамилию длиной от 2 до 32 символов на кириллице или латинице-->
						<!--								</div>-->
						<!--							</div>-->
						<!---->
						<!--							<div class="form_line_element">-->
						<!--								<div class="form_text">№ участка (если являетесь жителем данного посёлка)</div>-->
						<!--								<div class="form_element"><input type="number" value="" name="locality" min="1"-->
						<!--								                                 class="locality"></div>-->
						<!--								<div class="form_element_result"></div>-->
						<!--								<div class="locality_error_text form_error_text">-->
						<!--									Введите номер Вашего участка-->
						<!--								</div>-->
						<!--							</div>-->
						<!---->
						<!--							<div class="form_line_element text_review">-->
						<!--								<div class="form_text">Ваш отзыв <sup>*</sup></div>-->
						<!--								<div class="form_element"><textarea name="my_review"-->
						<!--								                                    class="my_review field_incorrect"></textarea></div>-->
						<!--								<div class="form_element_result"></div>-->
						<!--								<div class="my_review_error_text form_error_text">-->
						<!--									Введите текст от 10 до 1500 символов на кириллице-->
						<!--								</div>-->
						<!--							</div>-->
						<!---->
						<!--							<div class="form_line_element form_center ">-->
						<!--								<input class="submit_review" type="submit" value="Отправить">-->
						<!---->
						<!--							</div>-->
						<!---->
						<!--						</form>-->
					</div>


				</div>

			</div>
		</div>
	</div>
</div>


