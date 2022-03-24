<?php 
$title = 'section';
if(is_page(23)):
  $title = 'page';
endif;?>
<section class="structure">
  <div class="container">
    <h2 class="<?php echo $title;?>-title">Состав группы компаний</h2>
    <div class="structure-wrapper">
      <div class="structure-item">
        <a href="<?php echo get_permalink(38);?>"  class="structure-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/str-1.jpg)"></a>
        <div class="structure-item__content">
          <a href="<?php echo get_permalink(38);?>" class="structure-item__title">ООО "Центр охраны труда и экологии"</a>
          <div class="structure-item__text">Мы занимаемся оказанием услуг по специальной оценке условий труда, экологии и производственному контролю, зарегистрированы в реестре Минтруда и соц. развития РФ для выполнения данных работ имеем аттестат аккредитации нашей лаборатории,  а так же высококвалифицированный штат.</div>
          <a href="<?php echo get_permalink(38);?>" class="button">Подробнее</a>
        </div>
      </div>
      <div class="structure-item">
        <a href="<?php echo get_permalink(40);?>"  class="structure-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/str-2.jpg)"></a>
        <div class="structure-item__content">
          <a href="<?php echo get_permalink(40);?>" class="structure-item__title">ООО "Рос.Труд"</a>
          <div class="structure-item__text">Наша компания осуществляет аутсорсинг и разработку документации по охране труда. Мы производим оценку профессиональных рисков и аудит системы охраны труда.</div>
          <a href="<?php echo get_permalink(40);?>" class="button">Подробнее</a>
        </div>
      </div>
      <div class="structure-item">
        <a href="<?php echo get_permalink(42);?>" class="structure-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/str-3.jpg)"></a>
        <div class="structure-item__content">
          <a href="<?php echo get_permalink(42);?>" class="structure-item__title">АНО ДПО "Региональный образовательный центр"</a>
          <div class="structure-item__text">Мы осуществляем обучение специалистов в области охраны труда, промбезопасности и др. направлениям по 50+ программам.  Мы имеем все необходимые лицензии на проведение образовательной деятельности.</div>
          <a href="<?php echo get_permalink(42);?>" class="button">Подробнее</a>
        </div>
      </div>
      <div class="structure-item">
        <a href="http://xn--46-6kcpaebi3eiv6d.xn--p1ai/"  class="structure-item__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/str-4.jpg)"></a>
        <div class="structure-item__content">
          <a href="http://xn--46-6kcpaebi3eiv6d.xn--p1ai/" class="structure-item__title">ООО "ЭКСПЕРТ КОНСАЛТИНГ"</a>
          <div class="structure-item__text">Мы осуществляем поставку средств индивидуальной защиты и спецодежды на предприятия. Предлагаем оптимальные решения по обеспечению работников спецодеждой и средствами защиты.</div>
          <a href="http://xn--46-6kcpaebi3eiv6d.xn--p1ai/" target="_blank" class="button">Подробнее</a>
        </div>
      </div>
    </div>
  </div>
</section>