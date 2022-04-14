<?php

/*
* Template Name: Центр охраны труда
*/

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container center-descr" font-size: 18px>
		<h2 class="h1"><?php the_title();?></h2>
		<p >Оказание профессиональных услуг по специальной оценке условий труда рабочих мест, производственному контролю, экологическим расчетам и работам в организациях.</p>
		<p >За свое существование ООО «Центр охраны труда и экологии» провело специальную оценку более чем на 167300 рабочих местах и выполнило 3324 договоров!</p>
	</div>
  <section class="center">
    <div class="container">
      <div class="center-content">
        <!-- <h2 class="section-title"></h2> -->
        <div class="center-descr1">
        	<ul class="header-bottom__list ul-clean">
        		
        		<p>В организации имеется собственная аккредитованная испытательная лаборатория, все необходимые свидетельства и множество современных технических приборов, позволяющих измерять практически все химические и физические факторы микроклимата на рабочих местах в организациях всех сфер деятельности.</p>

						<p>В штате компании находятся высококвалифицированные специалисты с огромным практическим опытом работы, что позволяет нам выгодно отличаться по качеству работ, одновременно имея конкурентные цены и соответственно занимать одно из ведущих мест на рынке данных услуг по всей России!</p>
        	</ul>

			</div>
      </div> 
      <div class="section-bg" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('image_block'), 'full')[0];?>)"></div>
    </div>
  </section>

	<section class="center">
    <div class="container">
			<div class="section-bg section-bg_two" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('image_block_2'), 
				'full')[0];?>)"></div>
      <div class="center-content">
        <h2 class="section-title">Мы выполняем следующие услуги по экологии:</h2>
        <div class="center-descr1">
        	<ul class="header-bottom__list ul-clean">
        		<li>Разработка проектов нормативов предельно допустимых выбросов вредных (загрязняющих) веществ в атмосферу (ПДВ);</li>
			  		<li>Разработка деклараций о воздействии на окружающую среду;</li>
			  		<li>Расчет нормативов допустимых выбросов;</li>
			  		<li>Инвентаризация источников выбросов;</li>
			  		<li>Разработка проектов мероприятий по уменьшению выбросов загрязняющих веществ в атмосферный воздух в периоды неблагоприятных 
							метеорологических условий (НМУ);</li>
						<li>Разработка проектов нормативов образования отходов и лимитов на их размещение (ПНООЛР);</li>
						<li>Инвентаризация отходов производства и потребления и объектов их размещения;</li>
						<li>Постановка на государственный учет объектов, оказывающих негативное воздействие на окружающую среду;</li>
						<li>Разработка проектов санитарно-защитных зон (СЗЗ);</li>
						<li>Разработка программ производственного экологического контроля (ПЭК);</li>
						<li>Проведение производственного экологического контроля (аккредитованная лаборатория);</li>
						<li>Проведение инструментальных замеров (шум, вибрация, атмосферный воздух и т.д.) собственной лабораторией;</li>
        	</ul>
				</div>
      </div>
    </div>
  </section>

	<!-- <div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'biot' ),
				'after'  => '</div>',
			)
		);
		?>
	</div> -->
	<!-- .entry-content -->

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
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_template_part('template-parts/on-site');?>
<?php get_template_part('template-parts/partners');?>
<?php get_template_part('template-parts/structure');?>
<?php
get_footer();