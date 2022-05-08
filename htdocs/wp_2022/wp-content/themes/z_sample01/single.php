<?php get_header(); ?>

<?php
  $cat = get_queried_object();
  $cat_name = esc_html($cat -> name);
  $cat_slug = esc_html($cat -> slug);
  $title = esc_html(get_the_title('', '', false));
  $content = get_the_content('', '', false);
?>

<main id="main" class="site3">
  <div class="pageTtlContainer">
    <div class="container">
      <h1 class="site3PageTtl">MENU</h1>
    </div>
  </div>

  <section class="sec-menu">
    <div class="container">

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>
      <ul class="donutsList -detail">
        <li>
          <dl class="donutsInfo">
            <dd class="donutsInfo_pic">
    <?php $imgPath = esc_url(get_field('image'));
    if ($imgPath) : ?>
              <img src="<?php echo $imgPath ?>" alt="<?php echo $name ?>" <?php echo get_image_size($imgPath) ?> loading="lazy" />
    <?php else : ?>
              <img src="<?php echo site_url(); ?>/wp-content/uploads/default.jpg" alt="no image" width="800" height="500" loading="lazy" />
    <?php endif; ?>
            </dd>
            <div class="txts">
              <dt class="donutsInfo_name"><?php esc_html(the_title()); ?></dt>
    <?php if (!empty(get_field('text'))) : ?>
              <dd class="donutsInfo_txt"><?php echo get_field('text'); ?></dd>
    <?php endif; ?>
    <?php if (!empty(esc_html(get_field('price')))) : ?>
              <dd class="donutsInfo_price">¥<?php echo esc_html(get_field('price')); ?><span class="-small">（税込）</span></dd>
    <?php endif; ?>
            </div>
          </dl>
        </li>
      </ul>
<?php
  endwhile;
else :
?>
      <p>準備中です。</p>
<?php
endif;
?>
    <div class="backBtnContainer">
      <div class="btn"><a href="/menu/">BACK TO MENU</a></div>
    </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
