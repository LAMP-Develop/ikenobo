<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<div class="faq">
  <div class="faq__list md_container">
    <div class="faq__list__inner">
      <div class="md_topTitle text-center mb-5">よくあるご質問</div>
      <div class="faq__list__inner-table">
        <?php
        $args = [
            'posts_per_page' => -1,
            'post_type' => 'class-faq',
            'orderby' => 'date',
            'order' => 'ASC',
        ];
        $my_posts = get_posts($args);
        foreach ($my_posts as $post):
        setup_postdata($post);
        $id = get_the_ID();
        $ttl = get_the_title();
        $content = get_the_content();
        ?>
        <dl class="ac">
          <dt class="md_mincho"><?php echo $ttl ?></dt>
          <dd><?php echo $content ?></dd>
        </dl>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
