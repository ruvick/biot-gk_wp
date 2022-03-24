<?php
$arr_clients = carbon_get_theme_option('clients');
?>
<section class="partners">
  <div class="container">
    <h2 class="section-title">Наши клиенты и партнеры</h2>
    <div class="partners-slider">
      <?php foreach($arr_clients as $client):?>
        <div class="partners-item" style="background-image:url(<?php echo wp_get_attachment_image_src($client['img'], 'full')[0]?>)"></div>
      <?php endforeach;?>
    </div>
  </div>
</section>