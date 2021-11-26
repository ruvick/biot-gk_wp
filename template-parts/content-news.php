<div class="structure-item">
  <div class="structure-item__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>)"></div>
  <div class="structure-item__content">
    <div class="structure-item__title"><?php the_title();?></div>
    <div class="structure-item__text"><?php the_excerpt();?></div>
    <a href="<?php echo get_permalink();?>" class="button">Подробнее</a>
  </div>
</div>