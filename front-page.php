<?php
/*
Template Name: TOP
*/
get_header(); ?>
<main class="ly_topCont_main">
  <div class="ly_main_inner">
    <div class="bl_main_ttl_wrapper">
      <h1 class="bl_main_ttl">
        <p>coder.</p>
        <p>freelancer.</p>
        <p>wordpress dev.</p>
        <p>&</p>
        <p><span class="is_fcBlk">ger</span><span class="is_fcRed">many</span><span class="is_fcYlw"> lover.</span></p>
      </h1>
      <span class="el_fluid only_sp"></span>
      <div class="bl_scroll only_sp"><span>Scroll</span></div>
    </div>
    <!-- /.bl_main_ttl_wrapper -->
    <div class="bl_main_detail">
      <p>
        2020年より<span class="is_fw700">フリーランス</span>の<span class="is_fw700">コーダー</span>として活動しております。主に<span class="is_fw700">WordPress</span>を使用したサイト制作に携わっており、これまで<span class="is_fw700">計25以上</span>の<span class="is_fw700">オリジナルテーマ</span>を開発してきました。<span class="is_fw700">カスタム投稿・カスタムフィールド</span>を用いたサイト制作も得意です。<br>そして、<span class="is_fw700"><span class="is_fcBlk">ド</span><span class="is_fcRed">イ</span><span class="is_fcYlw">ツ</span></span>が大好きです🍺
      </p>
      <p>
        <span class="is_fw700">HTML</span>, <span class="is_fw700">CSS</span>, <span class="is_fw700">Sass</span>, <span class="is_fw700">jQuery</span>, <span class="is_fw700">WordPress</span>, <span class="is_fw700">Github</span>を使用可能。また、<span class="is_fw700">Figma</span>, <span class="is_fw700">XD</span>, <span class="is_fw700">Photoshop</span>, <span class="is_fw700">Illustrator</span>のデザインカンプから実装が可能です。
      </p>
    </div>
    <!-- /.bl_main_detail -->
    <button class="el_btn">
      <a href="https://forms.gle/L7kqCtQiQrsnnY4J9" target="_blank">contact me!</a>
    </button>
  </div>
  <!-- /.ly_main_inner -->
</main>
<aside class="ly_topCont_side">
<?php $posts = get_posts('post_type=works&posts_per_page=-1'); ?>
<?php if ($posts): ?>
<?php foreach ($posts as $post):setup_postdata($post); ?>
  <article class="ly_side_item js_side_item" style="background: <?php the_field('背景色'); ?>">
    <p class="bl_item_year"><?php the_field('制作年'); ?></p>
    <h2 class="bl_item_ttl">
      <?php the_field('種類'); ?> / <?php the_field('ツール'); ?>
    </h2>
    <figure class="bl_item_img">
      <img loading="lazy" src="<?php $image = get_field('画像'); echo $image['sizes']['large']; ?>">
    </figure>
    <div class="bl_item_detail">
      <p class="bl_item_skills">
        <?php the_field('スキル'); ?>
      </p>
      <p class="bl_item_link">
        <a href="<?php the_field('url'); ?>" target="_blank">
          <?php the_field('url'); ?>
        </a>
      </p>
    </div>
    <!-- /.bl_item_detail -->
    <?php if(get_post_meta($post->ID, 'モーダルメイン画像',true)):?>
      <button class="bl_modal_open js_modal_open" data-target="modal<?php echo get_the_ID(); ?>" style="color: <?php the_field('背景色'); ?>;">more</button>
    <?php endif; ?>
    <section class="ly_modal js_modal" id="modal<?php echo get_the_ID(); ?>">
      <div class="bl_modal_bg js_modal_close"></div>
      <span class="bl_modal_close js_modal_close">×</span>
      <div class="bl_modal_cont">
        <div class="bl_modal_cont__l">
          <figure class="bl_modal_mainImg js_modal_mainImg">
            <img loading="lazy" src="<?php $image = get_field('モーダルメイン画像'); echo $image['sizes']['large']; ?>" alt="">
          </figure>
        </div>
        <!-- /.bl_modal_cont__l -->
        <div class="bl_modal_cont__r">
          <?php if(have_rows('箇条書き')): ?>
            <ul class="bl_modal_txt bl_modal_list">
            <?php while(have_rows('箇条書き')): the_row(); ?>
              <li><?php the_sub_field('内容'); ?></li>
            <?php endwhile; ?>
            </ul>
          <?php endif;?>
          <ul class="bl_modal_subImg_wrapper">
            <li class="bl_modal_subImg js_modal_subImg">
              <img loading="lazy" src="<?php $image = get_field('モーダルメイン画像'); echo $image['sizes']['large']; ?>" alt="">
            </li>
            <?php if( have_rows( 'モーダルサブ画像' ) ): ?>
              <?php while( have_rows( 'モーダルサブ画像' ) ): the_row(); ?>
                <?php
                  $img = get_sub_field( '画像' );
                  $url = $img['sizes']['large'];
                ?>
                <li class="bl_modal_subImg js_modal_subImg">
                  <img loading="lazy" src="<?php echo $url ?>" alt="">
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
        <!-- /.bl_modal_cont__r -->
      </div>
      <!-- /.modalCont -->
    </section>
  </article>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <div class="bl_copyright">
    Copyright © Fumi Kuranishi All Rights Reserved.
  </div>
  <!-- /.bl_copyright -->
</aside>
<?php get_footer(); ?>