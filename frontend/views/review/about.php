<?php $this->title = 'О компании';

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('../js/review_form.js');
?>

	<div class="content_village">
		<div class="content_layout_village">

			<div class="breadcrumbs">
				<ul>
					<li><?= Html::a('Амурские зори', ['page/index']) ?></li>
					<li><a href="#"> > О компании</a></li>
				</ul>
			</div>

			<div class="about_page">

				<div class="left_box_about about_first">
					<div class="about_title1 bold">КОМПАНИЯ</div>
					<div class="about_title2">СЕГОДНЯ</div>
					<div class="about_title3">Компания "Амурские зори"
						одна из лидирующих продавцов
						на рынке загородной
						недвижимости Амурской области
					</div>
				</div>
				<div class="right_box_about">

					<div>Компания "Амурские зори" занимается продажей земельных участков в коттеджных и дачных поселках
						рядом с Благовещенском.
						Начав деятельность в 2008 году с агентских продаж небольшого участка земли, мы выросли до
						крупного девелопера полного цикла.
						В сфере наших интересов - приобретение земельных участков, межевание, подведение коммуникаций и
						строительство малоэтажных жилых
						поселков различных форматов и уровней. Земельный банк группы насчитывает более 200 га земель
						различного назначения.
						Мы единственная компания в Амурской области,
						которая работает, как собственник проектов, во всех сегментах рынка: эконом, средний, средний
						плюс и бизнес.
					</div>
				</div>

			</div>

			<div class="about_page">
				<div class="left_box_about about_second">
					<div class="about_title1">НАШИ</div>
					<div class="about_title2 bold">ЦЕННОСТИ</div>
					<div class="about_title3">Дарим радость!<br>
						Улучшаем мир вокруг себя!
						Невозможное – возможно!
					</div>
				</div>

				<div class="right_box_about">

					<div class="about_line_icon">
						<div class="about_icon_box left_icon_about">
							<div class="about_icon">
								<img src="../pictures/agreement2.png">
							</div>
							<div class="about_icon_text">Гибкость и простота сделки,
								индивидуальный подход к каждому клиенту
							</div>
						</div>

						<div class="about_icon_box right_icon_about">
							<div class="about_icon ">
								<img src="../pictures/circle39.png">
							</div>
							<div class="about_icon_text">Уникальный товар, востребованный рынком,
								широкая продуктовая линейка товара
							</div>
						</div>
					</div>

					<div class="about_line_icon">
						<div class="about_icon_box left_icon_about">
							<div class="about_icon">
								<img src="../pictures/premium1.png">
							</div>
							<div class="about_icon_text">Подтверждаем слова – делом, надежность компании с
								успешной 7-ти летней историей и опытом реализации проектов застройки
							</div>
						</div>

						<div class="about_icon_box right_icon_about">
							<div class="about_icon">
								<img src="../pictures/family24.png">
							</div>
							<div class="about_icon_text">Мы дарим радость нашим клиентам как в момент заключения
								договора/сделки, так и в течение проживания в наших комплексах.
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="about_page">

				<div class="left_box_about about_third">
					<div class="about_title1">НАША</div>
					<div class="about_title2 bold">КОМАНДА</div>
					<div class="about_title3">Команда профессионалов
						с успешным опытом реализации
						проектов любой сложности
					</div>
				</div>
				<div class="right_box_about">

					<div>В компании "Амурские зори" работают квалифицированные, опытные специалисты.
						Команда состоит из работников, стоящих у истоков создания компании, а также молодых специалистов
						с современным подходом к реализации проектов. Мы – команда единомышленников!
						Нас объединяют увлеченность делом, энтузиазм, профессионализм, желание улучшить условия
						проживания
						людей в нашем регионе и сделать мир вокруг себя лучше!
					</div>

					<div>Лидером и идейным вдохновителем нашей команды является генеральный директор компании
						"Амурские зори" - Иванова Анна Сергеевна. Она вдохновляет команду на успех, мотивирует
						на результат, создает и поддерживает положительный климат в компании и продуктивную
						рабочую атмосферу,занимается развитием и обучением сотрудников компании.
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

<!--				<div class="form_line_element">-->
<!--					<div class="form_text">№ участка (если являетесь жителем данного посёлка)</div>-->
<!--					<div class="form_element">-->
<!--						--><?//= $form->field($review, 'number_sector')->textInput(['maxlength' => true, 'class' => 'locality'])->label(''); ?>
<!--					</div>-->
<!--					<div class="form_element_result"></div>-->
<!--					<div class="locality_error_text form_error_text">Введите номер Вашего участка</div>-->
<!--				</div>-->

				<div class="form_line_element text_review">
					<div class="form_text">Ваш отзыв <sup>*</sup></div>
					<div class="form_element">
						<?= $form->field($review, 'review')->textarea(['class' => 'my_review field_incorrect'])->label
						(''); ?>
					</div>
					<div class="form_element_result"></div>
					<div class="my_review_error_text form_error_text">Введите текст от 10 до 1500 символов на кириллице</div>
				</div>

				<div class="form_line_element form_center">
					<?php echo Html::submitButton('Отправить', ['class' => 'submit_review']) ?>
				</div>

				<?php ActiveForm::end(); ?>


			</div>


			<table border="1px solid black">
				<tr>
					<th>Имя</th>
					<th>Отчество</th>
					<th>Фамилия</th>
					<th>Отзыв</th>
					<th>Дата</th>

				</tr>

				<?php foreach ($reviews as $review): ?>
					<tr>
						<td><?= $review->firstname ?></td>
						<td><?= $review->middlename ?></td>
						<td><?= $review->lastname ?></td>
						<td><?= $review->review ?></td>
						<td><?= $review->created ?></td>
					</tr>
				<?php endforeach;?>

			</table>




		</div>

	</div>

