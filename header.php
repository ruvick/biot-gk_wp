<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biot
 */
$is_page = '';
if(!is_home() || !is_front_page()) {
  $is_page = '-page';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicon/icon256.png">
  <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicon/icon128.png">
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicon/icon64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon/icon32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicon/icon16.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#00abaf">
  <meta name="theme-color" content="#fe9d2b"> 
  <?php wp_head(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(66681952, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/66681952" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head> 

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div style="display: none;">
      <div class="box-modal" id="messgeModal">
          <div class="box-modal_close arcticmodal-close">закрыть</div> 
          <div class = "modalline" id = "lineIcon">
      </div>
      
      <div class = "modalline" id = "lineMsg">
      </div>
      </div>
  </div>

  <div style="display: none;">
      <div class="box-modal" id="order-modal">
          <div class="box-modal_close arcticmodal-close">закрыть</div>
          <div class = "modalline" id = "lineIcon">
            <form action="">
              <div class="order-modal__title">Получить консультацию</div>
              <input type="text" name="name" placeholder="Ваше имя">
              <input type="tel" name="tel" placeholder="Ваш телефон">
              <span class="note-form">Нажимая на кнопку <span id="name_serv">Отправить заявку</span>, вы соглашаетесь с условиями <a href = "<?php echo get_the_permalink(3);?>">обработки персональных данных</a></span>
			  <a style="color:#000000" href="#" class="uniSendBtn button">Отправить заявку</a>
            </form>
          </div>
      
      <div class = "modalline" id = "lineMsg">
      </div>
      </div>
  </div>
	


<div style="display: none;">

    <div class="box-modal main-comp-modal" id="phone-modal">
        <!-- <img class = "formpers1" src = "<?php bloginfo("template_url")?>/images/formpers1.svg"> -->
        <!-- <img class = "formpers2" src = "<?php bloginfo("template_url")?>/images/formpers2.svg"> -->
    <!-- <div class="box-modal_close arcticmodal-close"><img src = "<?php bloginfo("template_url");?>/images/times-black.svg" width = "15px" /></div> -->
    <div class="uniConsultModal-wrapper">
      <div class="uniConsultModal-img">
        
      </div>
      <div class="uniConsultModal-form">
            <div id = "uniHeaderNdp" class="order-modal__title">Перезвоним Вам в течении 15 минут</div>
        <form class = "uniForm phone-modal">
            <input type = "hidden" class = "uniFormName" id = "ovFormName" value = "по кнопке">
            <!-- <input type = "text" class = "uniName" id = "uniName" placeholder = "Имя"> -->
            <input type = "tel" class = "uniTel mascedtel" id = "uniTel"  placeholder = "Телефон*">
            <!-- <textarea id = "uniMsg" class = "uniMes" placeholder = "Причина обращения"></textarea> -->
            <span class = "btn ovBtn uniSendBtn button" data-mailmsg="Звонок по кнопке" data-formname = "phone-modal" >Позвоните мне</span>
          <span class="note-form">Нажимая на кнопку <span id="name_serv">Заказать услугу</span>, вы соглашаетесь с условиями <a href = "<?php echo get_the_permalink(3);?>">обработки персональных данных</a></span>
        </form>
      </div>
    </div>
    
    </div>
</div>
<script>
jQuery( document ).ready(function( $ ){

$(".uniSendBtn.button").on('click', function(){
ym(66681952,'reachGoal','консультация');
console.log("clicked on button");

});
});
</script>
<!--
  <div class="dialog-cb-button dialog-cb-button__decstop">
      <a href="#"></a>
  </div>
 -->
 
  <div class="dialog-cb-button dialog-cb-button__mobile">
      <a class="mgo-number" href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
  </div>

  <div id="page" class="site">

    <div class="mob-menu ul-clean">
      <div class="close-menu"></div>
      <li class="mob-logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>);"></li>
		<!-- <li><a href="<?php echo home_url();?>">Главная</a></li>
		<li><a href="<?php echo get_permalink(21);?>">О нас</a></li>
		<li><a href="<?php echo get_permalink(23);?>">Состав группы компаний</a></li>
		<li><a href="<?php echo get_category_link(2);?>">Новости</a></li>
		<li><a href="<?php echo get_permalink(7);?>">Контакты</a></li> -->
    
          <?php main_menu();?>
      <li class="mob-phone"><a class="mob-phone-link" href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a></li>
      <li><a class="mob-phone-link" href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_2'))?>"><?php echo carbon_get_theme_option('as_phone_2');?></a></li>
      <li>
        <a class="mob-phone-link" href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a></li>
    </div>
    <header class="header">
    <?php if(is_home() || is_front_page()):?>
    	<video autoplay="autoplay" playsinline="" muted="" width="100%" loop="" pip="false" class="">
        <source src="<?php echo get_template_directory_uri();?>/video/Bulldozer.mp4" type="video/mp4">
      </video>
    <?php endif;?>
      <div class="header-top">
        <div class="container">
          <div class="header-contacts__wrap">
            <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
            <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_2'))?>"><?php echo carbon_get_theme_option('as_phone_2');?></a>
          </div>
          <div class="header-address"><?php echo carbon_get_theme_option('as_address');?></div>
          <div class="header-contacts__wrap">
            <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a>
          </div>
        </div>
      </div>
      <nav class="header-nav">
        <div class="container">
          <a href="<?php echo home_url();?>" class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>)"></a>
          <!-- <ul class="ul-clean menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Состав группы компаний</a></li> 
            <li><a href="#">Новости</a></li>
            <li><a href="#">Контакты</a></li>
          </ul> -->
          <?php main_menu();?>
          <div class="hamburger"></div>
        </div>
      </nav>
      <div class="header-bottom<?php echo $is_page;?>">
        <div class="container">
          <div class="header-bottom__content">
            <?php if(is_home() || is_front_page()):?>
              <h1 class="h1">Группа компаний Биот Инжиниринг</h1>
            <?php //elseif(is_category()):
              // the_archive_title( '<h1 class="h1">', '</h1>' );?>
            <?php //elseif( is_page_template( array('page-center.php', 'page-contacts.php', 'page-expert.php', 'page-region.php', 'page-rostrud.php', 'page-thankyou.php', 'page-sostav.php') ) ):
            //?>
              <!-- <h1 class="h1"><?php the_title();?></h1> -->
            <?php //else:?>
              <!-- <h1 class="h1"><?php the_title();?></h1> -->
            <?php endif;?>
            <?php if(is_home() || is_front_page()):?>
            <div class="h1-subtitle">Лидер в области оказания услуг по охране труда и экологии в ЦФО</div>
            <a href="#" class="button popup-content" data-mailmsg="Заявка с кнопки в баннере">Консультация</a>
            <?php endif;?>
          </div>
          <?php if(is_home() || is_front_page()):?>
          <ul class="header-bottom__list ul-clean">
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-ros-trud/" target="_blank">Аутсорсинг по охране труда</a></li>
			  <li> <a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-ros-trud/" target="_blank">Оценка профессиональных рисков</a></li>
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-ros-trud/" target="_blank">Аудит охраны труда</a></li>
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-ros-trud/" target="_blank">Разработка документации по охране труда</a></li>
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-czentr-ohrany-truda/" target="_blank">Экологические услуги, анализы и расчеты</a></li>
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-czentr-ohrany-truda/" target="_blank">Специальная оценка условий труда (СОУТ)</a></li>
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-czentr-ohrany-truda/" target="_blank">Производственный контроль</a></li>
			  <li><a href="https://biot-gk.ru/sostav-gruppy-kompanij/ooo-regionalnyj-obrazovatelnyj-cze/" target="_blank">Учебный центр ДПО и ПО</a></li>
			  <li><a href="http://xn--46-6kcpaebi3eiv6d.xn--p1ai/" target="_blank">Обеспечение спецодеждой и СИЗ</a></li>
          </ul>
          <?php endif;?>
        </div>
      </div>
    </header>
    <?php if(!is_home() || !is_front_page()):?>
    <div class="container">
      <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }?>
    </div>
    <?php endif;?>

