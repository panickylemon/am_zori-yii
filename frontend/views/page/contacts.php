<?php
$this->title = 'Контакты';

use yii\helpers\Html;

$this->registerJsFile('../js/request_call_form.js');
?>

	<script type="text/javascript"
	        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=hCOH8UkqkdVKsj1JSIl3bZRnJqMeCogo&width=auto&height=450&id=map_office">
	</script>


	<div class="content_village">
		<div class="content_layout_village">

			<div class="breadcrumbs">
				<ul>
					<li><?= Html::a('Амурские зори', ['page/index']) ?></li>
					<li><a href="#"> > Контакты</a></li>
				</ul>
			</div>

			<div class="contacts_layout_box">
				<div class="contacts">
					<h2>Контакты</h2>

					<div class="contacts_point_box">
						<div class="contacts_point_1">
							<h3>Центральный офис</h3>
							<div>г.Благовещенск, ул. Пушкина, 134, офис 508</div>
							<div>тел. 8 (383) 88-88-88</div>
						</div>

						<div class="contacts_point_2">
							<h3>Офис продаж в посёлке Земляничные поляны</h3>
							<div>пр. Грушевый, 1</div>
							<div>тел. 8 (383) 83-83-83</div>
						</div>
					</div>
					<div class="contacts_point_box">
						<div class="contacts_point_1">
							<h3>Офис продаж в посёлке Pощинская слобода</h3>
							<div>ул. Абрикосовая, 1</div>
							<div>тел. 8 (383) 68-68-68</div>
						</div>

						<div class="contacts_point_2">
							<h3>Офис продаж в посёлке Медовое</h3>
							<div>ул. Берёзовая, 1</div>
							<div>тел. 8 (383) 21-88-24</div>
						</div>
					</div>
				</div>

				<div class="request_call_wrapper">
					<h3>Заказать обратный звонок</h3>

					<div class="form_request_call_wrapper">
						<div class="title_request_call_form">Пожалуйста, укажите Ваше имя и телефон и мы перезвоним Вам
							в самое ближайшее время!
						</div>
						<form name="request_call_form" action="" method="post">
							<div class="form_line_element input_call_form">
								<!--<div class="form_element_result_call_form"></div>-->
								<div class="form_text ">Имя</div>
								<div class="form_element"><input type="text" value="" name="firstname"
								                                 class="firstname field_incorrect"></div>
								<div class="form_element_result_call_form"></div>
								<div class="firstname_error_text form_error_text">
									Введите имя длиной от 2 до 32 символов
								</div>
							</div>

							<div class="form_line_element ">
								<div class="form_text">Номер телефона</div>
								<!--<div class="form_element_result_call_form"></div>-->
								<div class="form_element"><input type="text" value="" name="phone"
								                                 class="phone" placeholder="+7(XXX)XXX-XX-XX"></div>
								<div class="form_element_result_call_form"></div>
								<div class="phone_error_text form_error_text">
									Введите номер телефона в формате +7 (ХХХ) ХХХ-ХХ-ХХ
								</div>

							</div>
							<div class="form_line_element form_center ">
								<input class="submit_form" type="submit" value="Отправить">

							</div>
						</form>
					</div>
				</div>

			</div>

			<div class="map_office" id="map_office"></div>

		</div>
	</div>









