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
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header">
    <div class="header_layout">
        <div><a href="<?= Url::toRoute(['page/index']) ?>"><img src="../pictures/logo.png" alt="логотип Амурские зори"
        class="logo"></a></div>

        <div class="menu">
            <div class="menu_block">
                <ul id="navbar">
                    <li>
                        <div><?= Html::a('О компании', ['page/about']) ?></div>
                    <li>
                        <div><?= Html::a('Посёлки', ['page/village']) ?></div>
                    <li>
                        <div><a href="selection.html">Подбор участка</a></div>
                    <li>
                        <div><?= Html::a('Как купить', ['page/how_buy']) ?></div>
                    <li>
                        <div><?= Html::a('Контакты', ['page/contacts']) ?></div>
                </ul>
            </div>
        </div>
    </div>
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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
