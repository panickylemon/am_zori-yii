<?php
$this->title = 'Подбор участка';

use yii\helpers\Html;
use frontend\assets\RangeAsset;
use common\models\Village;
use common\models\DateReadyDistrict;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


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

				<form method="get">

					<div class="filter_elements">Посёлки
						<div class="filter_village">

							<?php $villages = ArrayHelper::map(Village::find()->all(), 'id',
								'name') ?>
							<?= Html::checkboxList('village_id', null, $villages,['itemOptions'=>['class' =>
								'selection_checkbox']]) ?>

<!--							--><?php //if ($villages != null){ echo "checked"; } ?>

						</div>
					</div>

					<div class="filter_elements price_range">Цена, тыс.руб.
						<input type="text" id="range" value="" name="price">

						<div class="count_range_box">
							<input type="number" class="size-from count_range" value="100">-
							<input type="number" class="size-to count_range" value="5000">
						</div>
					</div>

					<div class="filter_elements">Статус
						<div class="filter_village">
							<input type="checkbox" name="is_sold[]" value="1"
								<?php if (in_array('1', $status)){ echo "checked"; } ?>
								>Продан<br>

							<input type="checkbox" name="is_sold[]" value="0"
								<?php if (in_array('0', $status)){ echo "checked"; } ?>
								>В продаже<br>
						</div>
					</div>

					<div class="filter_elements">Наличие дома
						<div class="filter_village">
							<input type="checkbox" name="is_house[]" value="1"
								<?php if (in_array('1', $house)){echo "checked"; } ?>
								>Участок с домом<br>

							<input type="checkbox" name="is_house[]" value="0"
								<?php if (in_array('0', $house)){echo "checked"; } ?>
								>Участок без дома<br>
						</div>
					</div>

					<div class="filter_elements price_range">Размер участка, соток
						<input type="text" id="range2" value="" name="size">

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

					<div>
						<button type="submit">Найти</button>
					</div>

				</form>
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


				<div class="result">
					<?php foreach ($districts as $district): ?>
						<div class="district_result">
							<div class="district_photo">
								<img src="<?= $district->getThumburl2() ?>">

							</div>
							<div class="discrict_description">
								<p>Посёлок: <?= $district->village->name ?></p>

								<p>Номер участка: <?= $district->number ?></p>

								<p>Количество соток: <?= $district->size ?></p>

								<p>Цена: <?= $district->price ?> тыс.руб.</p>

								<p>Наличие дома: <?php
									if ($district->is_house) {
										echo "есть";
									} else {
										echo "нет";
									}
									?> </p>

								<p>Дата сдачи: <?= $district->dateReadyDistrict->date ?></p>

								<p>Статус: <?php
									if ($district->is_sold) {
										echo "продан";
									} else {
										echo "в продаже";
									}
									?> </p>


							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>


		</div>
	</div>
</div>

