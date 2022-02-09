<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biot
 */

?>

<footer class="footer">
  <div class="container">
    <div class="logo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_theme_option('as_logo'), 'full')[0];?>"></div>
    <?php footer_menu();?>
    <div class="footer-contacts">
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone'))?>"><?php echo carbon_get_theme_option('as_phone');?></a>
      <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('as_phone_2'))?>"><?php echo carbon_get_theme_option('as_phone_2');?></a>
      <a href="mailto:<?php echo carbon_get_theme_option('as_email');?>"><?php echo carbon_get_theme_option('as_email');?></a>
      <a href="<?php echo get_permalink(175);?>">Карта сайта</a>
    </div>
    <div class="footer-address">
      <?php echo carbon_get_theme_option('as_address');?>
		<p class="p1">ООО "ЦОТ"</p> 
       <p class="p2"> аттестат № RA.RU.518160</p>	
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
	<script>
			(function(w,d,u){
					var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
					var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
			})(window,document,'https://cdn-ru.bitrix24.ru/b12842324/crm/site_button/loader_4_c5z8lr.js');
	</script>
</body>

</html>
