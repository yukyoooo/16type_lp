<?php get_header(); ?>
<main>

<div class="">
  <div class="jumbotron jumbotron-fluid typelab-wrapper">
    <h1 class="display-4 text-light">タイプを知ることで人生が輝きだす</h1>

    <div class="card shadow mx-auto">
      <div class="card-body top-vision-text">
        <h2 class="card-title font-weight-bold">タイプを知って人生が輝く</h2>
        <p class="card-text">
          自分の「ふつう(無意識)」は相手と違います。
          <br>パートナー、子供、上司が理解できない。
          <br>タイプを知れば、自分が分かり相手が理解できるようになります。経験豊富なインストラクターと共にタイプについてお家で学んでみませんか？
          <br>自分を知る場、違いを知る場、16 Type。</p>
        </p>
        <a href="<?php echo get_page_link(10);?>" class="btn btn-success">無料体験はこちら</a>
      </div>
    </div>

  </div>
</div>

<article class="container">



<div class="row justify-content-center">
  <div class="col-10 col-md-5 typelab-btn mb-5 rounded">
    <a href="<?php echo get_page_link(6);?>">
      <h2>４文字タイプ<br>
        <span>about type<span></h2>
    </a>
  </div>
  <div class="col-10 col-md-5 typelab-btn mb-5 rounded">
    <a href="<?php echo get_page_link(12);?>">
      <h2>サービス<br>
        <span>service<span></h2>
    </a>
  </div>
  <div class="col-10 col-md-5 typelab-btn mb-5 rounded">
    <a href="<?php echo get_page_link(8);?>">
      <h2>あいさつ<br>
        <span>about us<span></h2>
    </a>
  </div>
  <div class="col-10 col-md-5 typelab-btn mb-5 rounded">
    <a href="<?php echo get_page_link(10);?>">
      <h2>お問い合わせ<br>
        <span>contact<span></h2>
    </a>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center ">
    <div class="col-sm-10 col-12 top-pic-text">
      <h2  style="color:#006400;">～ タイプセッションの様子 ～</h2>
      <ul id="slide_wrapp" class="aboutMe-image "><!--スライド親要素 -->
        <li class="slide_item">
          <img src="<?php echo get_template_directory_uri(); ?>\img\IMG_0258.jpg" width="100%">
        </li>
        <li class="slide_item">
          <img src="<?php echo get_template_directory_uri(); ?>\img\IMG_0259.jpg" width="100%">
        </li>
        <li class="slide_item">
          <img src="<?php echo get_template_directory_uri(); ?>\img\IMG_0260.jpg" width="100%">
        </li>
        <li class="slide_item">
          <img src="<?php echo get_template_directory_uri(); ?>\img\IMG_0261.jpg" width="100%">
        </li>
        <li class="slide_item">
          <img src="<?php echo get_template_directory_uri(); ?>\img\IMG_0262.jpg" width="100%">
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="newscolumm center">
  <h2>〜 お知らせ・コラム 〜</h2>
</div>
<!--  表示できる記事があるかぎり、4行目から9行目までを繰り返して表示する-->

<div class="container news-wrapper">
    <div class="row justify-content-md-center">
      <div class="col-11 col-md-8">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
      ?>
      <section class="post">

      <div class="contents-wrapper">
              <h3 class="text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="time"><?php echo get_the_date('Y-m-d'); ?></div>
                  <?php
                      if(mb_strlen($post->post_content,'UTF-8')>200){
                      	$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 200,'UTF-8'));
                      	echo $content.'……';
                      }else{
                      	echo str_replace('\n', '', strip_tags($post->post_content));
                      }
                      ?>
            </div>
            <p class="link-next"><a href="<?php the_permalink() ?>"><?php _e('続きを読む', 'keni'); ?></a></p>

      </section>
      <?php
      endwhile;
      endif;
      ?>
      </div>
      <div class="col-8 col-md-3 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
</div>










</article>


</main>
<?php get_footer(); ?>
