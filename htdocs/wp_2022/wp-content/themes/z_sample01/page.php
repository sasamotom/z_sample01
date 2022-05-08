<?php get_header(); ?>

<?php
  global $post;
  $slug = $post->post_name;
  $parent_id = get_page_parent( $post->post_parent );
  $parent_slug = get_post($parent_id)->post_name;
?>

<main id="main" class="<?php echo $parent_slug ?>">
  <div class="pageTtlContainer">
    <div class="container">
      <h1 class="site3PageTtl"><?php the_title(); ?></h1>
    </div>
  </div>
<?php
  if (have_posts()) :
    while(have_posts()):
      the_post();
      the_content();
    endwhile;
  endif;
?>
</main>

<?php get_footer(); ?>
