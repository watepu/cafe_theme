<?php get_header(); ?>
        
        <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
      <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
    
          <section class="<?php echo get_post($wp_query->post->ID)->post_name; ?>">
          <h2><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h2>
          <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
          
  
  
          
        <?php endwhile; // 繰り返し終了 ?>
    <?php else : //条件分岐：投稿が無い場合は ?>

      <h2>投稿がみつかりません。</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>

    <?php endif; //条件分岐終了 ?>
    
    　　 
        </section>
        
<?php get_footer(); 