<?php
$this->title = 'Подбор участка';

use yii\helpers\Html;
use frontend\assets\RangeAsset;
use yii\widgets\ActiveForm;


RangeAsset::register($this);

?>


<script>
	$(function () {
		$("#range").ionRangeSlider({
			hide_min_max: true,
			keyboard: true,
			min: 100,
			max: 5000,
			from: 100,
			to: 5000,
			type: 'double',
			step: 50,
			grid: true
		});

		$("#range").on("change", function () {
			var $this = $(this),
				from = $this.data("from"),
				to = $this.data("to");
			$('.size-from').val(from);
			$('.size-to').val(to);
		});
	});
</script>

<script>
	$(function () {
		$("#range2").ionRangeSlider({
			hide_min_max: true,
			keyboard: true,
			min: 4,
			max: 26,
			from: 1,
			to: 30,
			type: 'double',
			step: 1,
			grid: true

		});

		$("#range2").on("change", function () {
			var $this = $(this),
				from = $this.data("from"),
				to = $this.data("to");
			$('.size-from2').val(from);
			$('.size-to2').val(to);
		});

	});
</script>


<div class="content_village">
	<div class="content_layout_village">

		<div class="breadcrumbs">
			<ul>
				<li><?= Html::a('Амурские зори', ['page/index']) ?></li>
				<li> <?= Html::a(' > Подбор участка', ['selection/village']) ?></li>
			</ul>
		</div>

		<div class="selection_layout">
			<div class="filter_box">
				<h4>Поиск по характеристикам</h4>

				<?php $form = ActiveForm::begin([
					'id' => 'form-selection',
					'options' => [
						//'class' => '',
						//'name' => ' ',
					],
				]); ?>

				<div class="filter_elements">Посёлки
					<div class="filter_village">
						<!--						--><?php //$form->field($model, 'village')
						//							->checkboxList([
						//								'zeml_pol' => 'Земляничные поляны',
						//								'ros_slob' => 'Рощинская слобода',
						//								'medovoe' => 'Медовое',
						//							]);?>

						<input type="checkbox" name="village" value="zeml_pol" checked>Земляничные поляны<br>
						<input type="checkbox" name="village" value="ros_slob">Рощинская слобода<br>
						<input type="checkbox" name="village" value="medovoe">Медовое<br>
					</div>
				</div>

				<div class="filter_elements price_range">Цена, тыс.руб.
					<input type="text" id="range" value="" name="range">

					<div class="count_range_box">
						<input type="number" class="size-from count_range" value="100">-
						<input type="number" class="size-to count_range" value="5000">
					</div>
				</div>

				<div class="filter_elements">Статус
					<div class="filter_village">
						<input type="checkbox" name="status" value="not_for_sale" checked>Продан<br>
						<input type="checkbox" name="status" value="sale">В продаже<br>
					</div>
				</div>

				<div class="filter_elements">Наличие дома
					<div class="filter_village">
						<input type="checkbox" name="availability_home" value="yes" checked>Участок с домом<br>
						<input type="checkbox" name="availability_home" value="no">Участок без дома<br>
					</div>
				</div>

				<div class="filter_elements price_range">Размер участка, соток
					<input type="text" id="range2" value="" name="range2">

					<div class="count_range_box">
						<input type="number" class="size-from2 count_range" value="4">-
						<input type="number" class="size-to2 count_range" value="26">
					</div>
				</div>

				<div class="filter_elements">Дата сдачи
					<div class="filter_village">
						<input type="checkbox" name="date_delivery" value="2014" checked>до 2014 (уже сдан)<br>
						<input type="checkbox" name="date_delivery" value="2015">до осени 2015<br>
						<input type="checkbox" name="date_delivery" value="2016">до осени 2016<br>
					</div>
				</div>

			</div>

			<div class="result_filter_box">

				<div class="sorting_box">
					<div class="sorting sort_group">Сортировать:<br>
						<select name="">
							<option value="up">По возрастанию цен</option>
							<option value="down">По убыванию цен</option>
						</select>
					</div>

					<div class="grouping sort_group">Группировать:<br>
						<select name="">
							<option value="size">По размеру участка</option>
							<option value="date">По дате сдачи</option>
							<option value="village">По посёлкам</option>
							<option value="status">По статусу (продан/не продан)</option>
						</select>
					</div>

					<div class="view sort_group">Вид:<br>
						<select name="">
							<option value="list">Список</option>
							<option value="short">Кратко</option>
							<option value="detail">Подробно</option>
						</select>

					</div>
				</div>

				<?php ActiveForm::end(); ?>

				<div class="result">
					<?php foreach ($districts as $district): ?>
						<div class="district_result">
							<div class="district_photo">
								<img src="<?= $district->getThumburl2() ?>">

							</div>
							<div class="discrict_description">
								<?= $district->id ?>
								<?= $district->village_id ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>


		</div>
	</div>
</div>
