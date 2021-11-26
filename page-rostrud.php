<?php

/*
* Template Name: ООО Роструд
*/

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
	<h1 class="h1"><?php the_title();?></h1>
    <div class="container center-descr">
		<p>ООО «Рос.Труд» Безопасность и охрана труда. ООО «Рос.Труд» с 2012 года предоставляет широкий спектр услуг в области охраны труда организациям и индивидуальным предпринимателям.</p>
		<p>Помогаем своим клиентам соответствовать требованиям трудового законодательства и гарантированно быть готовыми к любым проверкам государственных инспектирующих органов.</p>
	</div>
  <section class="center">
    <div class="container">
      <div class="center-content">
        <h2 class="section-title">На договорной основе оказываем следующие виды услуг:</h2>
        <div class="center-descr1">
        	<ul class="header-bottom__list ul-clean">
        		
        	<li>Аудит системы охраны труда;</li>

    			<li>Осуществление функций службы охраны труда или специалиста по охране труда (аутсорсинг).</li>

    			<li>Абонентское (консультативное) сопровождение организаций в области охраны труда</li>

    			<li>Подготовка и внедрение полного пакета документов СУОТ любой сложности «под ключ»</li>

    			<li>Оценка профессиональных рисков и внедрение системы управления профессиональными рисками в общую систему управления охраной труда</li>
        	</ul>

			</div>
      </div>
      <div class="section-bg" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('image_block'), 'full')[0];?>)"></div>
    </div>
  </section>
  <section class="mission mission-single mission-advant">
    <div class="container">
      <h2 class="section-title">Наши преимущества</h2>
      <div class="mission-wrapper">
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Аккредитация Минтруда РФ</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Гарантии качества и оперативности выполнения работ, закрепленные в договорах</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Материальная ответственность за некачественно и несвоевременно оказанные услуги</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Представление интересов клиентов в инспектирующих организациях</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Большой практический опыт работы в сфере оказания услуг в области охраны труда и промышленной безопасности</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Профессионализм специалистов (регулярное повышение квалификации, участие в семинарах и конференциях)</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Использование современных автоматизированных технологий для обучения и внедрения документов и процедур СУОТ</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Клиентоориентированный подход</div>
        </div>
        <div class="mission-item">
          <div class="mission-item__number"></div>
          <div class="mission-item__text">Особо выгодные условия сотрудничества для постоянных клиентов</div>
        </div>
      </div>
    </div>
  </section>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'biot' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'biot' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_template_part('template-parts/on-site');?>
<?php get_template_part('template-parts/partners');?>
<?php get_template_part('template-parts/structure');?>
<?php
get_footer();