<?php get_header(); ?>
        
        <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
      <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
      
      <section class="blog">
        <div class="container">
        
        <div class="main">
        <h1><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h1>
        
        <div class="blog-header">
        <div class="date"><?php the_time('Y.m.j');//投稿日時を表示 パラメータで書式を指定 ?></div>
        <div class="category"><?php the_category(','); //投稿の属するカテゴリー名を全て表示 パラメータで区切り文字を指定 ?></div>
        </div>
        
        <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
        
        <section class="two">
            <div class="leftcol"><?php next_post_link('%link', '&laquo; 新しい投稿へ' ); //新しい記事へのリンクを表示 ?>
            </div>
            <div class="rightcol"><?php previous_post_link('%link', '古い投稿へ &raquo;' ); //古い記事へのリンクを表示 ?>
            </div>
        </section>
        
        <?php endwhile; // 繰り返し終了 ?>
    <?php else : //条件分岐：投稿が無い場合は ?>

      <h2>投稿がみつかりません。</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>

    <?php endif; //条件分岐終了 ?>
        </div>
        
        <aside>
        <?php get_sidebar(); //sidebar.phpを取得 ?>
        </aside>
        
        </div>
        </section>
      
<?php get_footer(); 