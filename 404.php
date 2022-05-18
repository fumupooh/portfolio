<?php
/*
Template Name: 404
*/
get_header(); ?>
<main class="ly_404_main">
  <div class="bl_404_body">
    <p>お探しのページは<br class="only_sp">見つかりませんでした</p>
    <button class="el_btn">
      <a href="<?php echo esc_url(home_url('')); ?>">back</a>
    </button>
  </div>
  <!-- /.bl_404_body -->
</main>
<?php get_footer(); ?>