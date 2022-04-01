<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biot
 */

get_header(); 
?>

<main id="primary" class="site-main">

  <section class="about">
    <div class="container">
      <div class="about-text">
        <p>Группа компаний БИОТ инжиниринг - была образованна силами 4 компаний осуществляющих деятельность в сфере охраны труда и экологии:</p>
        <ul class="ul-clean">
          <li>ООО "ЦЕНТР ОХРАНЫ ТРУДА И ЭКОЛОГИИ",</li>
          <li>ООО "РОС.ТРУД",</li>
          <li>АНО ДПО "РЕГИОНАЛЬНЫЙ ОБРАЗОВАТЕЛЬНЫЙ ЦЕНТР",</li>
          <li>ООО "ЭКСПЕРТ КОНСАЛТИНГ".</li>
        </ul>
        <p>Создавая группу компаний мы стремились обеспечить комфортные и  безопасные условия для предприятий работающих на территории ЦФО собрав в рамках одной компании весь спектр услуг по организации охраны труда и экологии для любой компании.</p>
        <p>Уже более 10 лет мы динамично развиваемся и совершенствуемся для того чтобы наши клиенты всегда могли рассчитывать на достойный уровень сервиса и высокую компетенцию наших специалистов.</p>
      </div>
      <div class="about-photo section-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/about-bg.jpg)"></div>
    </div>
  </section>

  <?php get_template_part('template-parts/structure');?>
  <?php get_template_part('template-parts/progress');?>
  <section class="mission">
    <div class="container">
      <h2 class="section-title">Наша миссия</h2>
      <div class="mission-wrapper">
        <div class="mission-item">
          <div class="mission-item__number">1</div>
          <div class="mission-item__text">Мы стремимся всячески улучшать условия труда работников предприятий ЦФО.</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number">2</div>
          <div class="mission-item__text">Мы работаем над увеличением количества рабочих мест в регионе</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number">3</div>
          <div class="mission-item__text">Повышение экологичности производств в регионе и сохранение окружающей среды</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number">4</div>
          <div class="mission-item__text">Повышение компетенции специалистов ответственных за здоровье работников на производстве</div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/partners');?>
  <section class="center">
    <div class="container">
      <div class="center-content">
        <h2 class="section-title">АНО ДПО "Региональный образовательный центр"</h2>
        <div class="center-descr">Наш центр осуществляет профессиональное обучение, переподготовку и повышение квалификации специалистов в области охраны труда, промышленной безопасности по следующим направлениям:</div>
        <ul class="header-bottom__list ul-clean">
          <li>Охрана труда работников организации</li>
          <li>Пожарно-технический минимум на производстве</li>
          <li>Выполнение работ на высоте</li>
          <li>Гражданская оборона и защита от чрезвычайных ситуациях</li>
          <li>Оказание первой помощи</li>
          <li>Погрузочно-разгрузочные работы</li>
		  <li>Экологическая безопасность</li>
		  <li>И множество других программ</li>
        </ul>
        <a href="<?php echo get_permalink(42);?>" class="button ">Подробнее</a>
      </div>
      <div class="section-bg" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_section_img'), 'full')[0];?>)"></div>
    </div>
  </section>
  <section class="services">
    <div class="container">
      <h2 class="section-title">Услуги в сфере охраны труда, экологии, обучения, спецодежда и СИЗ</h2>
      <div class="services-wrapper">
        

        
		<div class="services-item">
          <div class="services-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/serv-2.jpg)"></div>
          <div class="services-item__content">
            <div class="services-item__title">Оценка профессиональных рисков</div>
            <div class="services-item__text">Проведем в Вашей организации полный цикл работ по разработке,внедрению необходимых документов и процедур СУОТ и оценке профессиональных рисков в полном соответствии с требованием статей 209 и 212 ТК, Приказа Минтруда РФ 438н (пунктов 29,33-39), Приказа Роструда№77</div>
            <a href="<?php echo get_permalink(40);?>" class="button">Подробнее</a>
          </div>
        </div>
		
		 <div class="services-item">
          <div class="services-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/serv-1.jpg)"></div>
          <div class="services-item__content">
            <div class="services-item__title">Аутсорсинг по охране труда</div>
            <div class="services-item__text">Аутсорсинг по охране труда-выполнение функций специалиста по охране труда сторонней организацией. Передача функций (полностью или частично) выполняется на основании заключенного договора между Заказчиком и организацией, специализирующейся на оказании услуг в сфере труда. Аутсорсинг охраны труда позволяет более эффективно выполнять работу в области охраны труда и сократить нагрузку на бюджет организации. Наша компания будет организовывать обучение сотрудников, проводить инструктажи, внедрять все необходимые мероприятия по предупреждению несчастных случаев, представлять клиента при проверках инспектирующих организаций.</div>
            <a href="<?php echo get_permalink(40);?>" class="button">Подробнее</a>
          </div>
        </div>
		  
		<div class="services-item">
          <div class="services-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/serv-3.jpg)"></div>
          <div class="services-item__content">
            <div class="services-item__title">Спецодежда, СИЗ, моющие средства</div>
            <div class="services-item__text">Спецодежду, спецобувь и средства индивидуальной защиты можно заказать выбрав нужное изделие в каталоге товаров на сайте. Наши менеджеры помогут подобрать необходимые комплекты и товары исходя из Ваших индивидуальных потребностей.</div>
            <a href="http://xn--46-6kcpaebi3eiv6d.xn--p1ai/" class="button">Подробнее</a>
          </div>
        </div>
        
		<div class="services-item">
          <div class="services-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/serv-4.jpg)"></div>
          <div class="services-item__content">
            <div class="services-item__title">Специальная оценка условий труда, экологические услуги</div>
            <div class="services-item__text">Оказание профессиональных услуг по специальной оценке условий труда рабочих мест, экологии и производственного контроля в организациях. За свое существование ООО «Центр охраны труда» произвело специальную оценку более чем на 167300 рабочих места!</div>
            <a href="<?php echo get_permalink(38);?>" class="button">Подробнее</a>
          </div>
        </div>
      
	  </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
