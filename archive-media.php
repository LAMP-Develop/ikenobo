<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<div class="media sidebar-layout">
  <div class="container">
    <div class="md_topTitle text-center mb-5">IKENOBOメディア</div>
      <div class="row archive media">
          <div class="archive__inner col-sm-4">
            <a href="###">
            <div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
            <h3 class="md_mincho">ブログタイトルが入ります。</h3>
            <p>2020.01.01</p>
            </a>
          </div>
          <div class="archive__inner col-sm-4">
            <a href="###">
            <div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
            <h3 class="md_mincho">ブログタイトルが入ります。</h3>
            <p>2020.01.01</p>
            </a>
          </div>
          <div class="archive__inner col-sm-4">
            <a href="###">
            <div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
            <h3 class="md_mincho">ブログタイトルが入ります。</h3>
            <p>2020.01.01</p>
            </a>
          </div>
          <!-- <?php
          $args = [
              'posts_per_page' => -1,
              'post_type' => 'media',
              'orderby' => 'date',
              'order' => 'ASC',
          ];
          $my_posts = get_posts($args);
          foreach ($my_posts as $post):
          setup_postdata($post);
          $id = get_the_ID();
          $ttl = get_the_title();
          $thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
          $permalink = get_the_permalink();
          $set_date = get_field('day');
          ?>
          <div class="archive__inner col-sm-4">
            <a href="###">
            <div class="img-wrap"><img src="<?php echo $permalink; ?>" alt="<?php echo $ttl; ?>"></div>
            <h3 class="md_mincho"><?php echo $ttl; ?></h3>
            <p><?php echo $set_date; ?></p>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?> -->
      </div>
      <!-- pagenation -->
  </div>
  <div class="col-md-4 p-0 hidden-xs">
  <?php include('sidebar-blog.php') ?>
  </div>
</div>
<?php get_footer();
