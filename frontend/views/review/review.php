<?php $this->title = 'Отзывы';

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\widgets\LinkPager;

$this->registerJsFile('../js/review_form.js');
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

			<div class="left_box_review review_img">
				<img class="review_img" src="../pictures/garant.png">
			</div>
			<div class="right_box_review">
				<p>Здесь Вы можете оставить отзывы о наших посёлках и воспользоваться отзывами других клиентов.</p>

				<p>Отзывы помогают не только нашим клиентам определиться с покупкой, но и нам - улучшать качество нашей
					работы.</p>

				<p>Мы будем рады, если Вы также оставите свой отзыв!</p>

				<p>Каждое обращение будет детально рассмотрено нашими специалистами оперативно и качественно, чтобы в
					будущем мы смогли предложить вам лучший сервис.</p>

				<p class="right">Ваша Компания «Амурские зори»</p>

				<div class="reviews">

				</div>
			</div>
		</div>


		<div class="box_review">
			<?php foreach ($reviews as $review_entity): ?>
				<div class="review corner_ie8">
					<div class="review_photo"><img src="../pictures/noavatar.png"></div>
					<div class="review_text">
						<div class="date_review"><?= $review_entity->created ?></div>
						<div class="signature_review"><?= $review_entity->firstname ?></div>
						<div><?= $review_entity->review ?></div>
					</div>
				</div>
			<?php endforeach; ?>
			<?= LinkPager::widget([
			'pagination' => $pages,
				'options' => [
					'class' => 'my_pager',
				],
				'prevPageLabel'=>'<',
				'nextPageLabel'=>'>',

			]);?>
		</div>


		<div class="form_review_wrapper">
			<div class="title_review_form">Оставить отзыв</div>

			<?php $form = ActiveForm::begin([
				'id' => 'form-review',
				'options' => [
					//'class' => '',
					'name' => 'review_form',
				],
				'enableClientValidation'=> false
			]); ?>
			<div class="form_line_element">
				<div class="form_text">Имя</div>
				<div class="form_element">
					<?= $form->field($review, 'firstname')->textInput(['maxlength' => true, 'class' => 'firstname field_incorrect'])->label(''); ?>
				</div>
				<div class="form_element_result"></div>
				<div class="firstname_error_text form_error_text">Введите имя длиной от 2 до 32 символов на кириллице
				</div>
			</div>

			<div class="form_line_element text_review">
				<div class="form_text">Ваш отзыв</div>
				<div class="form_element">
					<?= $form->field($review, 'review')->textarea(['class' => 'my_review field_incorrect'])->label
					(''); ?>
				</div>
				<div class="form_element_result"></div>
				<div class="my_review_error_text form_error_text">Введите текст от 10 до 2500 символов на кириллице
				</div>
			</div>

			<div class="form_line_element form_center">
				<?php echo Html::submitButton('Отправить', ['class' => 'submit_form']) ?>
			</div>

			<?php ActiveForm::end(); ?>
		</div>

	</div>

</div>

