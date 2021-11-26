<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'as_theme_options', 'Настройки темы' )
    ->add_tab('Главная', array(
      Field::make( 'image', 'as_logo', 'Логотип')
        ->set_width(30),
      Field::make( 'image', 'as_section_img', 'Фото блока справа')
        ->set_width(30),
    ))
    ->add_tab('Наши клиенты', array(
      Field::make( 'complex', 'clients', 'Клиенты')
        ->add_fields(array(
          Field::make('image', 'img', 'Логотип')
        ))
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'Инстаграм' ) )
          ->set_width(50),
        Field::make( 'text', 'as_face', __( 'Facebook' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make('text', 'mkad_map_point', 'Координаты карты'),
    ) );
Container::make('post_meta', 'pos_center', 'Дополнительные поля')
  ->show_on_template(array('page-center.php', 'page-region.php', 'page-rostrud.php', 'page-sostav.php'))
  ->add_fields(array(
    Field::make('image', 'image_block', 'Фото'),
    Field::make('image', 'image_block_2', 'Фото 2')
  ));