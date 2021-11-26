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
</div>
<?php get_template_part('template-parts/partners');?>
<?php get_template_part('template-parts/structure');?>
<?php
get_footer();