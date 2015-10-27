<?php

use frontend\assets\SliderAsset;

$this->title = 'Амурские зори';

SliderAsset::register($this); ?>

<script type="text/javascript">
	$(function () {
		$('.bxslider_main').bxSlider({
			mode: 'fade',
			auto: true,
			pause: 6000,
			speed: 800,
			captions: true
		});
	});

	$(document).ready(function () {
		$('.slider_right').bxSlider({
			mode: 'vertical',
			auto: true,
			pause: 7000,
			speed: 800,

			minSlides: 2,
			maxSlides: 4,
			captions: true,
			slideMargin: 5
		});
	});
</script>


<ul class="bxslider">
	<div class="bxslider_main">
		<li><img class="item" src="../pictures/image1.png">

			<div class="container_text_slider">
				<h1>Земляничные поляны</h1>

				<h2>готовый коттеджный поселок в котором уже живут и активно строят свои дома более 120 семей,
					оптимальный вариант приобретения жилья по экономичной цене</h2>
			</div>
		</li>
		<li><img class="item" src="../pictures/image2.png">

			<div class="container_text_slider">
				<h1>Pощинская слобода</h1>

				<h2>посёлок комфорт-класса с авторским ландшафтным дизайном общественной зоны на самой границе с
					городом</h2>
			</div>
		</li>
		<li><img class="item" src="../pictures/image3.png">

			<div class="container_text_slider">
				<h1>Медовое</h1>

				<h2>масштабный стилизованный проект в одном из самых экологически чистых районов, в 1 км от
					Орельского озера и песчаного карьера — прекрасного места для летнего купания</h2>
			</div>
		</li>
	</div>
</ul>


<div class="content">
	<div class="content_layout">
		<div class="icon_mainpage">
			<div class="box_icon_picture"><img class="pictire_icon" src="../pictures/icon_localization.png"></div>
			<div class="box_text_icon">
				<div class="text_icon_title"><a href="#">Выбрать посёлок</a></div>
				<div>Коттеджные посёлки <br>от эконом-класса <br>до премиум-класса</div>
			</div>
		</div>

		<div class="icon_mainpage">
			<div class="box_icon_picture"><img class="pictire_icon" src="../pictures/icon_home.png"></div>
			<div class="box_text_icon">
				<div class="text_icon_title"><a href="#">Подобрать участок</a></div>
				<div>Приобретите загородный<br> участок и избавьтесь от<br> городской суеты, шума <br>и пыли</div>
			</div>
		</div>

		<div class="icon_mainpage">
			<div class="box_icon_picture"><img class="pictire_icon" src="../pictures/icon_wallet.png"></div>
			<div class="box_text_icon">
				<div class="text_icon_title"><a href="#">Как купить</a></div>
				<div>Множество вариантов <br> приобретения участка, <br>а также скидки и акции</div>
			</div>
		</div>
	</div>

</div>


<div class="main_content">
	<div class="right_box_content">
		<h1>Амурские зори</h1>

		<div>"Амурские зори" - это уникальные концепции, качество услуг, экологическая сертификация.
			Наша компания была основана с целью строительства, продажи и обслуживания загородных проектов
			качественно нового уровня.
			Мы любим свое дело и верим, что нет ничего более настоящего и понятного любому человеку, чем
			строительство собственного дома.
			Дом — это олицетворение всех семейных ценностей.
		</div>

		<div>Компания «Амурские зори» - одна из немногих компаний, которая вот уже более 10 лет предоставляет
			требовательному
			Клиенту комплексный подход в области строительства и всех операций с недвижимостью.
		</div>
		<ul>5 причин купить недвижимость у нас:

			<li>Лучшие цены</li>
			<li>Хорошая транспортная доступность</li>
			<li>Развитая инфраструктура</li>
			<li>Быстрое оформление сделки</li>
			<li>Полное юридическое сопровождение на всех этапах</li>
			<li>Оформление в собственность</li>
		</ul>
		<div>На данный момент, в разных стадиях строительства, нами представлено три коттеджных поселка:
			"Рощинская слобода", "Земляничные поляны" и "Медовое".
			Они ориентированы на разные категории клиентов. Мы предлагаем как проекты поселков без подряда,
			так и с обязательным подрядом (заключение договора на строительство индивидуального дома с нашей
			строительной компанией).
		</div>

		<div>Будущим владельцам загородного жилья предлагается широкий спектр услуг, включающий проектирование
			коттеджей, строительство из любых материалов,
			ландшафтный дизайн, охрана территорий, создание комфортной среды проживания и управление
			собственными девелоперскими проектами.
		</div>

		<div>Немаловажное значение для нас имеют вопросы экологии и безопасности для людей, приобретающих наши
			продукты.
			Все существующие и будущие поселки проходят тщательную проверку на предмет загрязнения воздуха, почв
			и подземных вод.
			Мы не жалеем на это ни средств, ни времени, так как понимаем, что пришли на этот рынок всерьез и
			надолго.
		</div>


		<div>По состоянию на 1 августа 2015 года компанией "Амурские зори" реализовано более 800 земельных
			участков.
			На них построено около 400 индивидуальных домов.
		</div>
	</div>

	<div class="sidebar">
		<div class="bxslider bxslider2">
			<div class="slider_right">

				<div><a href="#"><img class="item" src="../pictures/sale1.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale2.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale3.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale4.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale5.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale6.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale7.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale8.png"></a>
				</div>

				<div><a href="#"><img class="item" src="../pictures/sale9.png"></a>
				</div>
			</div>
		</div>
		<div class="link_to_galery"><a href="#"> Перейти в галерею >></a></div>
	</div>

</div>



