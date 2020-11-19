<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="class__single sidebar-layout">
  <div class="md_container">
    <div class="row">

      <div class="col-md-8 p-0">
      <?php
      if (have_posts()):
      while (have_posts()): the_post(); ?>
      <article>
      <?php
      $t = get_the_title();
      $category = get_the_category();
      $posttags = get_the_tags();
      $thumbnail = get_the_post_thumbnail('large');
      ?>
      </article>
      <?php endwhile; endif; ?>
      </div>

      <div class="col-md-4 p-0">
      <?php include('sidebar-blog.php') ?>
      </div>

    </div>
  </div>
</section>

<?php get_footer();
