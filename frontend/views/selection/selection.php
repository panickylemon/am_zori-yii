<?php
$this->title = 'Подбор участка';

use yii\helpers\Html;
use frontend\assets\RangeAsset;
use common\models\Village;
use common\models\DateReadyDistrict;
use yii\helpers\ArrayHelper;


RangeAsset::register($this);

?>


<script>
	$(function () {
		$(".range").ionRangeSlider({
			hide_min_max: true,
			keyboard: true,
			min: 100,
			max: 7000,
			from: <?= $prices[0] ?>,
			to: <?= $prices[1] ?>,
			type: 'double',
			step: 50,
			grid: true
		});

		$(".range").on("change", function () {
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
		$(".range2").ionRangeSlider({
			hide_min_max: true,
			keyboard: true,
			min: 4,
			max: 26,
			from: <?= $sizes[0] ?>,
			to: <?= $sizes[1] ?>,
			type: 'double',
			step: 1,
			grid: true

		});

		$(".range2").on("change", function () {
			var $this = $(this),
				from = $this.data("from"),
				to = $this.data("to");
			$('.size-from2').val(from);
			$('.size-to2').val(to);
		});

	});
</script>

<script>
	$(document).ready(function () {
		$(".filter_box_responsive").click(function () {
			$(".hidden_search").slideToggle("slow");
			$(this).toggleClass("active");
		});
	});
</script>

<script type="text/javascript">
	function windowSize() {
		if ($(window).width() >= '783') {
			$('.hidden_search').hide();
		}
	}

	$(window).on('load resize', windowSize);
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

			<div class="filter_box_responsive">
				<input type="button" value="Поиск по характерисктикам" class="">
			</div>
			<div class="hidden_search">
				<form method="get">
					<div class="block_for_align">
						<div class="filter_elements"><p>Посёлки</p>
							<div class="filter_village">

								<?php $villages = ArrayHelper::map(Village::find()->all(), 'id',
									'name') ?>
								<?= Html::checkboxList('village_id', $village, $villages, ['itemOptions' => ['class' =>
									'selection_checkbox']]) ?>

							</div>
						</div>

						<div class="filter_elements price_range"><p>Цена, тыс.руб.</p>
							<input type="text" class="range" value="" name="price">

							<div class="count_range_box">
								<input type="text" class="size-from count_range" value="<?= $prices[0] ?>">-
								<input type="text" class="size-to count_range" value="<?= $prices[1] ?>">
							</div>
						</div>

						<div class="filter_elements"><p>Статус</p>
							<div class="filter_village">
								<input type="checkbox" name="is_sold[]" value="1"
									<?php if (in_array('1', $status)) {
										echo "checked";
									} ?>
									> Продан<br>

								<input type="checkbox" name="is_sold[]" value="0"
									<?php if (in_array('0', $status)) {
										echo "checked";
									} ?>
									> В продаже<br>
							</div>
						</div>

						<div class="filter_elements"><p>Наличие дома</p>
							<div class="filter_village">
								<input type="checkbox" name="is_house[]" value="1"
									<?php if (in_array('1', $house)) {
										echo "checked";
									} ?>
									> Участок с домом<br>

								<input type="checkbox" name="is_house[]" value="0"
									<?php if (in_array('0', $house)) {
										echo "checked";
									} ?>
									> Участок без дома<br>
							</div>
						</div>

						<div class="filter_elements price_range"><p>Размер участка, соток</p>
							<input type="text" class="range2" value="" name="size">

							<div class="count_range_box">
								<input type="text" class="size-from2 count_range" value="<?= $sizes[0] ?>">-
								<input type="text" class="size-to2 count_range" value="<?= $sizes[1] ?>">
							</div>
						</div>

						<div class="filter_elements"><p>Дата сдачи</p>
							<div class="filter_village">

								<?php $readys = ArrayHelper::map(DateReadyDistrict::find()->all(), 'id',
									'date') ?>
								<?= Html::checkboxList('date_ready', $ready, $readys, ['itemOptions' => ['class' =>
									'selection_checkbox']]) ?>

								<!--							<input type="checkbox" name="date_delivery" value="2014" checked>до 2014 (уже сдан)<br>-->
								<!--							<input type="checkbox" name="date_delivery" value="2015">до осени 2015<br>-->
								<!--							<input type="checkbox" name="date_delivery" value="2016">до осени 2016<br>-->
							</div>
						</div>
					</div>
					<div class="submit_selection">
						<button class="submit_form" type="submit">Найти</button>
					</div>

				</form>


			</div>

			<div class="filter_box">
				<h4>Поиск по характеристикам</h4>

				<form method="get">

					<div class="filter_elements">Посёлки
						<div class="filter_village">

							<?php $villages = ArrayHelper::map(Village::find()->all(), 'id',
								'name') ?>
							<?= Html::checkboxList('village_id', $village, $villages, ['itemOptions' => ['class' =>
								'selection_checkbox']]) ?>

						</div>
					</div>

					<div class="filter_elements price_range">Цена, тыс.руб.
						<input type="text" class="range" value="" name="price">

						<div class="count_range_box">
							<input type="text" class="size-from count_range" value="<?= $prices[0] ?>">-
							<input type="text" class="size-to count_range" value="<?= $prices[1] ?>">
						</div>
					</div>

					<div class="filter_elements">Статус
						<div class="filter_village">
							<input type="checkbox" name="is_sold[]" value="1"
								<?php if (in_array('1', $status)) {
									echo "checked";
								} ?>
								> Продан<br>

							<input type="checkbox" name="is_sold[]" value="0"
								<?php if (in_array('0', $status)) {
									echo "checked";
								} ?>
								> В продаже<br>
						</div>
					</div>

					<div class="filter_elements">Наличие дома
						<div class="filter_village">
							<input type="checkbox" name="is_house[]" value="1"
								<?php if (in_array('1', $house)) {
									echo "checked";
								} ?>
								> Участок с домом<br>

							<input type="checkbox" name="is_house[]" value="0"
								<?php if (in_array('0', $house)) {
									echo "checked";
								} ?>
								> Участок без дома<br>
						</div>
					</div>

					<div class="filter_elements price_range">Размер участка, соток
						<input type="text" class="range2" value="" name="size">

						<div class="count_range_box">
							<input type="text" class="size-from2 count_range" value="<?= $sizes[0] ?>">-
							<input type="text" class="size-to2 count_range" value="<?= $sizes[1] ?>">
						</div>
					</div>

					<div class="filter_elements">Дата сдачи
						<div class="filter_village">

							<?php $readys = ArrayHelper::map(DateReadyDistrict::find()->all(), 'id',
								'date') ?>
							<?= Html::checkboxList('date_ready', $ready, $readys, ['itemOptions' => ['class' =>
								'selection_checkbox']]) ?>

							<!--							<input type="checkbox" name="date_delivery" value="2014" checked>до 2014 (уже сдан)<br>-->
							<!--							<input type="checkbox" name="date_delivery" value="2015">до осени 2015<br>-->
							<!--							<input type="checkbox" name="date_delivery" value="2016">до осени 2016<br>-->
						</div>
					</div>

					<div class="submit_selection">
						<button class="submit_form" type="submit">Найти</button>
					</div>

				</form>
			</div>

			<div class="result_filter_box">

				<div class="result">
					<?php foreach ($districts as $district): ?>
						<div class="district_result">
							<div class="district_photo">
								<img src="<?= $district->getThumburl2() ?>">
							</div>

							<div class="discrict_description">

								<p><b class="blue">Участок № <?= $district->number ?></b> в посёлке <?=
									$district->village->name ?>

									<?php
									if ($district->is_house) {
										echo Html::img('../pictures/home78.png', ['alt' => 'home', 'class'
										=> 'icon_result']);
									} else {
										echo " ";
									}
									?>

									<?php
									if ($district->is_sold) {
										echo Html::img('../pictures/delete74.png', ['alt' => 'home', 'class'
										=> 'icon_result']);
									} else {
										echo Html::img('../pictures/shopping212.png', ['alt' => 'home', 'class'
										=> 'icon_result']);
									}
									?></p>

								<p>Количество соток: <?= $district->size ?></p>

								<p>Дата сдачи: <?= $district->dateReadyDistrict->date ?></p>

								<p>Статус:<?php
									if ($district->is_sold) {
										echo " продан";
									} else {
										echo " в продаже";;
									}
									?></p>

								<p>Наличие дома:<?php
									if ($district->is_house) {
										echo " с домом";
									} else {
										echo " без дома";;
									}
									?></p>

								<p class="price_hidden"><?= $district->price ?> тыс.руб.</p>
							</div>

							<div class="district_price">
								<p><?= $district->price ?> тыс.руб.</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>


		</div>
	</div>
</div>

