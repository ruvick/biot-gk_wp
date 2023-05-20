<?php 
	$link = '';
	if(is_page(42)) {
		$link = 'http://regobrcenter.ru/';
	} elseif(is_page(40)) {
		$link = 'https://unicaprof.ru/';
	} elseif (is_page(38)) {
		$link = 'https://xn--n1aik4a.xn--p1ai/';
	}
?>
<section class="on-site">
  <div class="container">
    <div class="on-site__text">
    Подробнее с услугами компании <?php echo the_title();?> вы можете ознакомиться на официальном сайте.
    </div>
    <a href="<?php echo $link;?>" class="button on-site__link">Перейти на сайт</a>
  </div>
</section>