<?php $this->title = 'Отзывы';

use yii\helpers\Html;
use yii\widgets\ActiveForm;

// $this->registerJsFile('../js/review_form.js');
?>

<div class="content_village">
	<div class="content_layout_village">

		<div class="breadcrumbs">
			<ul>
				<li><?= Html::a('Амурские зори', ['page/index']) ?></li>
				<li> <?= Html::a(' > О компании', ['review/about']) ?></li>
				<li><a href="#"> > Отзывы</a></li>
			</ul>
		</div>



		<div class="about_page">

			<div class="left_box_about about_fourth">
				<div class="about_title1">НАШИ</div>
				<div class="about_title2 bold">ОТЗЫВЫ</div>
				<div class="about_title3">
					Мы хотим больше обратной связи для дальнейшего повышения качества работы для Вас
				</div>
			</div>
			<div class="right_box_about">

				<div class="reviews">

					<div>
						<?php foreach ($reviews as $review_entity): ?>
							<div class="review corner_ie8">
								<div class="date_review"><?= $review_entity->created ?></div>
								<div class="signature_review"><?= $review_entity->firstname ?></div>
								<div><?= $review_entity->review ?></div>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="review_view_all"><a href="#">Смотреть все отзывы</a></div>
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
				<div class="firstname_error_text form_error_text">Введите имя длиной от 2 до 32 символов на кириллице
					или латинице
				</div>
			</div>

			<!--				<div class="form_line_element">-->
			<!--					<div class="form_text">Отчество</div>-->
			<!--					<div class="form_element">-->
			<!--						--><? //= $form->field($review, 'middlename')->textInput(['maxlength' => true, 'class' => 'middlename'])->label(''); ?>
			<!--					</div>-->
			<!--					<div class="form_element_result"></div>-->
			<!--					<div class="middlename_error_text form_error_text">Введите отчество длиной от 2 до 32 символов на кириллице или латинице</div>-->
			<!--				</div>-->
			<!---->
			<!--				<div class="form_line_element">-->
			<!--					<div class="form_text">Фамилия</div>-->
			<!--					<div class="form_element">-->
			<!--						--><? //= $form->field($review, 'lastname')->textInput(['maxlength' => true, 'class' => 'lastname'])->label(''); ?>
			<!--					</div>-->
			<!--					<div class="form_element_result"></div>-->
			<!--					<div class="lastname_error_text form_error_text">Введите фамилию длиной от 2 до 32 символов на кириллице или латинице</div>-->
			<!--				</div>-->

			<!--				<div class="form_line_element">-->
			<!--					<div class="form_text">№ участка (если являетесь жителем данного посёлка)</div>-->
			<!--					<div class="form_element">-->
			<!--						--><? //= $form->field($review, 'number_sector')->textInput(['maxlength' => true, 'class' => 'locality'])->label(''); ?>
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
				<div class="my_review_error_text form_error_text">Введите текст от 10 до 2500 символов на кириллице
				</div>
			</div>

			<div class="form_line_element form_center">
				<?php echo Html::submitButton('Отправить', ['class' => 'submit_review']) ?>
			</div>

			<?php ActiveForm::end(); ?>


		</div>


<!--		<table border="1px solid black">-->
<!--			<tr>-->
<!--				<th>Имя</th>-->
<!--				<th>Отзыв</th>-->
<!--				<th>Дата</th>-->
<!---->
<!--			</tr>-->
<!---->
<!--			--><?php //foreach ($reviews as $review): ?>
<!--				<tr>-->
<!--					<td>--><?//= $review->firstname ?><!--</td>-->
<!--					<td>--><?//= $review->review ?><!--</td>-->
<!--					<td>--><?//= $review->created ?><!--</td>-->
<!--				</tr>-->
<!--			--><?php //endforeach; ?>
<!---->
<!--		</table>-->


	</div>

</div>

