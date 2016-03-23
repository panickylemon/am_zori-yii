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
	<meta charset="<?= Yii::$app->charset ?>">
	<title><?= Html::encode($this->title) ?></title>
	<meta name="description" content="Предлагаем купить загородные коттеджи — широкий выбор предложений в Амурской
	области">​
	<meta name="keywords" content="коттедж, коттеджные посёлки, дом,
	купить коттедж">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/web.png" type="image/x-icon">
	<?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>


<div class="header">
	<div class="header_layout">
		<div><a href="<?= Url::toRoute(['page/index']) ?>"><img src="/frontend/web/pictures/logo.png" alt="логотип
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
				<a href="#" onclick='$(".menu_hidden").slideToggle("slow");'><img src="/frontend/web/pictures/menu55.png"
				                                                                  alt="меню" class="burger"></a>
			</div>
		</div>
	</div>

</div>


<div class="menu_hidden">

		<div>
			<a href="<?= Url::toRoute(['review/about']) ?>">
				<div class="submenu">О компании</div>
			</a>
		</div>
		<div>
			<a href="<?= Url::toRoute(['page/village']) ?>">
				<div class="submenu">Посёлки</div>
			</a>
		</div>
		<div>
			<a href="<?= Url::toRoute(['selection/selection']) ?>">
				<div class="submenu">Подбор участка</div>
			</a>
		</div>
		<div>
			<a href="<?= Url::toRoute(['page/how_buy']) ?>">
				<div class="submenu">Как купить</div>
			</a>
		</div>
		<div>
			<a href="<?= Url::toRoute(['page/contacts']) ?>">
				<div class="submenu">Контакты</div>
			</a>
		</div>

</div>


<div class="wrapper">
	<?= $content ?>
</div>


<div class="footer">
	<div class="footer_content">
		<div class="box_footer">
			<a href="<?= Url::toRoute(['page/village']) ?>">Выбери свой райский уголок</a>
		</div>
		<div class="box_footer">
			<a href="<?= Url::toRoute(['selection/selection']) ?>">Построй дом своей мечты</a>
		</div>
		<div class="box_footer">
			<a href="<?= Url::toRoute(['page/contacts']) ?>">Ответим на все Ваши вопросы</a>
		</div>
	</div>
	<div class="footer_responsive">
		<div class="first_a_footer">
			<a href="<?= Url::toRoute(['page/village']) ?>">Выбрать посёлок</a>
		</div>
		<div class="">
			<a href="<?= Url::toRoute(['selection/selection']) ?>">Выбрать участок</a>
		</div>
		<div class="">
			<a href="<?= Url::toRoute(['page/contacts']) ?>">Контакты</a>
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
