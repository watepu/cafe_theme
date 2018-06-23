<?php get_header(); ?>

<?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
        <section class="blog">
        <div class="container">
        <div class="main">
        

<?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>

       
        <h2><a href="<?php the_permalink(); //投稿のリンクを取得 ?>"><?php the_title(); //投稿のタイトルを表示 ?></a></h2>
        
        <div class="blog-header">
            <div class="date"><?php the_time('Y.m.j');//投稿日時を表示 パラメータで書式を指定 ?>/<?php the_category(','); //投稿の属するカテゴリー名を全て表示 パラメータで区切り文字を指定 ?></div>
            
        </div>
        
        <?php the_excerpt(); //投稿（固定ページ）の要約を表示 ?>
        
        <div class="blog-footer">
            <a href="<?php the_permalink(); ?>">続きを見る</a>
        </div>
        
        
        <?php endwhile; // 繰り返し終了 ?>
        </div>
    
        <aside>
        <?php get_sidebar(); //sidebar.phpを取得 ?>
        </aside>
        
        </div>
        </section>
        
        <section class="two">
            <div class="leftcol"><?php previous_posts_link('&laquo;　新しい投稿一覧へ' ); //新しい記事一覧へのリンクを表示 ?>
            </div>
            <div class="rightcol"><?php next_posts_link('古い投稿一覧へ　&raquo;' ); //古い記事一覧へのリンクを表示 ?>
            </div>
        </section>
        
        
        
        <?php else : //条件分岐：投稿が無い場合は ?>

      <h2>投稿がみつかりません。</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>

    <?php endif; //条件分岐終了 ?>

    

<?php get_footer();