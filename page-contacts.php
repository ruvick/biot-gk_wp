<?php

/*
* Template Name: Контакты
*/
get_header();
?>
<div class="container container-contacts">
	<p>
		<strong>Адрес:</strong> <span class="contacts-address-single"><?php echo carbon_get_theme_option('as_address');?></span>
	</p>
	<p>
		<strong>Телефоны:</strong> <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>, <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_2'))?>"><?php echo carbon_get_theme_option('as_phone_2');?></a>
	</p>
	<p>
		<strong>Email:</strong> <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a>
	</p>
	<p>
		<strong>Адрес:</strong> <span >г. Орел, ул. Московское шоссе 137, офис 721</span> 
	</p>
	<p>
		<strong>Телефоны:</strong> <a href="tel:"+7(4862) 488180>+7(4862) 488180</a>
	</p>
	<p>
		<strong>Email:</strong> <a href="mailto:biot-info@mail.ru">biot-info@mail.ru</a>
	</p>
	<p>
		<?php if(carbon_get_theme_option('as_inn')):?>
			<p>
				<strong>ИНН:</strong> <span><?php echo carbon_get_theme_option('as_inn');?></span>
			</p>
		<?php endif;?>
		<?php if(carbon_get_theme_option('as_orgn')):?>
			<p>
				<strong>ОРГН:</strong> <span><?php echo carbon_get_theme_option('as_orgn');?></span>
			</p>
		<?php endif;?>
		<div id = "mapLine" class = "mapLine"></div>
		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script>
			ymaps.ready(init);

			function init () {

				var myMap = new ymaps.Map("mapLine", {
					center: <?php echo carbon_get_theme_option('mkad_map_point') ?>,
					zoom: 14,
					controls: ['zoomControl']
				}),

				myPlacemarkAdr = new ymaps.Placemark(<?php echo carbon_get_theme_option('mkad_map_point') ?>, {
					iconContent: '',
					balloonContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('as_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('as_phone') ?>',
					hintContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('as_address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('as_phone') ?>',
				}, {
					iconLayout: 'default#image',
					iconImageHref: '<?php bloginfo("template_url"); ?>/img/map.svg',
					iconImageSize: [30, 54],
					iconImageOffset: [-15, -54]
				});

				myMap.geoObjects.add(myPlacemarkAdr);

				myMap.behaviors.disable('scrollZoom');
			}
		</script>

		<h2 class="contacts-represent-title">Представительство в г. Белгород</h2>
		<ul class="contacts-represent-list">
			<li class="contacts-represent-list-item">
				<span>Адрес:</span> г.Белгород, Свято-Троицкий б-р, 38, оф. 5
				р-н Западный
			</li>
			<li class="contacts-represent-list-item">
				<span>Телефон:</span> +7 (4722) 50-02-69
			</li>
		</ul>

		<div id = "mapLineBelgorod" class = "mapLineRepresent"></div>
		<script>
			ymaps.ready(init);

			function init () {

				var myMap = new ymaps.Map("mapLineBelgorod", {
					center: [50.597118, 36.577171],
					zoom: 14,
					controls: ['zoomControl']
				}),

				myPlacemarkAdr = new ymaps.Placemark([50.597118, 36.577171], {
					iconContent: '',
					balloonContent: 'Наш адрес: <b>г.Белгород, Свято-Троицкий б-р, 38, оф. 5</b><br/>Телефон: <b> +7 (4722) 50-02-69',
					hintContent: 'Наш адрес: <b>г.Белгород, Свято-Троицкий б-р, 38, оф. 5</b><br/>Телефон: <b> +7 (4722) 50-02-69',
				}, {
					iconLayout: 'default#image',
					iconImageHref: '<?php bloginfo("template_url"); ?>/img/map.svg',
					iconImageSize: [30, 54],
					iconImageOffset: [-15, -54]
				});

				myMap.geoObjects.add(myPlacemarkAdr);

				myMap.behaviors.disable('scrollZoom');
			}
		</script>

		<h2 class="contacts-represent-title">Представительство в г. Орел</h2>
		<ul class="contacts-represent-list">
			<li class="contacts-represent-list-item">
				<span>Адрес:</span> г.Орел, ул. Автовокзальная, 64
			</li>
			<li class="contacts-represent-list-item">
				<span>Телефон:</span> +7 (4862) 78-05-66
			</li>
		</ul>

		<div id = "mapLineOrel" class = "mapLineRepresent"></div>
		<script>
			ymaps.ready(init);

			function init () {

				var myMap = new ymaps.Map("mapLineOrel", {
					center: [52.926709, 36.026818],
					zoom: 14,
					controls: ['zoomControl']
				}),

				myPlacemarkAdr = new ymaps.Placemark([52.926709, 36.026818], {
					iconContent: '',
					balloonContent: 'Наш адрес: <b>г.Орел, ул. Автовокзальная, 64</b><br/>Телефон: <b> +7 (4862) 78-05-66',
					hintContent: 'Наш адрес: <b>г.Орел, ул. Автовокзальная, 64</b><br/>Телефон: <b> +7 (4862) 78-05-66',
				}, {
					iconLayout: 'default#image',
					iconImageHref: '<?php bloginfo("template_url"); ?>/img/map.svg',
					iconImageSize: [30, 54],
					iconImageOffset: [-15, -54]
				});

				myMap.geoObjects.add(myPlacemarkAdr);

				myMap.behaviors.disable('scrollZoom');
			}
		</script>

	</div>
	<?php get_template_part('template-parts/partners');?>
	<?php get_template_part('template-parts/structure');?>
	<?php
	get_footer();