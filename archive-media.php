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
      </div>
      <!-- pagenation -->
  </div>
  <div class="col-md-4 p-0 hidden-xs">
  <?php include('sidebar-blog.php') ?>
  </div>
</div>
<?php get_footer();
