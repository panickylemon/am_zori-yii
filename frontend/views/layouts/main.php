<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;


AppAsset::register($this);


?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>" name="viewport"
	      content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="header">
	<div class="header_layout">
		<div><a href="<?= Url::toRoute(['page/index']) ?>"><img src="../pictures/logo.png" alt="логотип
        Амурские зори" class="logo"></a></div>

		<div class="menu">
			<div class="menu_block">
				<ul id="navbar">
					<li>
						<div><?= Html::a('О компании', ['review/about']) ?></div>
					<li>
						<div><?= Html::a('Посёлки', ['page/village']) ?></div>
					<li>
						<div><?= Html::a('Подбор участка', ['selection/selection']) ?></div>
					<li>
						<div><?= Html::a('Как купить', ['page/how_buy']) ?></div>
					<li>
						<div><?= Html::a('Контакты', ['page/contacts']) ?></div>
				</ul>
			</div>


			<div class="menu_burger">
				<a href="#" onclick='$(".menu_hidden").slideToggle("slow");'><img src="../pictures/menu55.png"
				                                                                  alt="меню" class="burger"></a>
			</div>
		</div>
	</div>

</div>


<div class="menu_hidden">
	<ul id="navbar">
		<li>
			<a href="<?= Url::toRoute(['page/index']) ?>">
				<div class="submenu">О компании</div>
			</a>
		</li>
		<li>
			<a href="<?= Url::toRoute(['page/village']) ?>">
				<div class="submenu">Посёлки</div>
			</a>
		</li>
		<li>
			<a href="<?= Url::toRoute(['selection/selection']) ?>">
				<div class="submenu">Подбор участка</div>
			</a>
		</li>
		<li>
			<a href="<?= Url::toRoute(['page/how_buy']) ?>">
				<div class="submenu">Как купить</div>
			</a>
		</li>
		<li>
			<a href="<?= Url::toRoute(['page/contacts']) ?>">
				<div class="submenu">Контакты</div>
			</a>
		</li>
	</ul>
</div>


<div class="wrapper">
	<?= $content ?>
</div>


<div class="footer">
	<div class="footer_content">
		<div class="box_footer">
			<a href="village.html">Выбери свой райский <br>уголок</a>
		</div>
		<div class="box_footer">
			<a href="selection.html">Построй дом своей <br>мечты</a>
		</div>
		<div class="box_footer">
			<a href="contacts.html">Ответим на все Ваши <br>вопросы</a>
		</div>

	</div>
</div>

<script type="text/javascript">
	function windowSize() {
		if ($(window).width() >= '803') {
			$('.menu_hidden').hide();
		}
	}

	$(window).on('load resize', windowSize);
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
