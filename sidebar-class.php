<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$form_pref = isset($_GET['pref']) ? $_GET['pref'] : null;
?>

<div class="sidebar">

<div class="d-none d-md-block">
<div class="md_topTitle">教室検索</div>
<?php include('search.php'); ?>
</div>

<?php if($form_pref != '' && $form_pref != null): ?>
<div class="sidebar__blog mt-5">
<div class="md_topTitle"><?php echo $form_pref; ?>エリアの人気ブログ</div>
<div class="archive">
<?php
$author_args = [
  'number' => -1,
  'role' => 'author',
  'meta_query' => [
    [
        'relation' => 'OR',
        [
            'key' => 'class_hidden',
            'value' => 0,
            'compare' => '='
        ],[
            'key' => 'class_hidden',
            'compare' => 'NOT EXISTS'
        ]
    ],
    [
      'key' => 'class_pref',
      'value' => $form_pref,
      'compare' => '='
    ]
  ],
  'fields' => 'ID',
];
$user_query = new WP_User_Query($author_args);
$ids = implode(',', $user_query->results);
$args = [
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC',
  'author' => $ids,
];
$posts = get_posts($args);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/guide-1_main.png';
}
$author_id = get_the_author_meta('ID');
$class_name = get_field('class_name', 'user_'. $author_id);
?>
<a href="<?php echo $p; ?>" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho"><?php echo $t; ?></h3>
<p><?php echo $class_name; ?></p>
</div>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<?php endif; ?>

</div>
