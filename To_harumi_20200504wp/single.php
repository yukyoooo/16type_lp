<?php get_header(); ?>

<div class="">
  <div class="jumbotron jumbotron-fluid typelab-wrapper">
    <h1 class="display-4 text-light">お知らせ</h1>
    <div class="card shadow mx-auto">
      <div class="card-body top-vision-text">
        <h2 class="card-title font-weight-bold">お知らせ・コラム</h2>
        <p class="card-text">
          こちらのページではお知らせや、コラム、豆知識などを定期的に投稿するページです。
        <br><br>
        あなたに、私たちのことをもっと深く知ってほしいと思い作りました。
どうぞお茶でも飲みながらゆるりとページを散策してください。</p>
        </p>
        <a href="<?php echo get_page_link(90);?>" class="btn btn-success">詳しく聞いてみる</a>
      </div>
    </div>
  </div>
</div>


<main class="single-page-wrapper">

<section class="container">
  <div class="row justify-content-center">
    <div class="col-11 col-md-9 text-left">
   <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

        <article class="content content-title">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>

    <?php
    endwhile;
    endif;
    ?>
  </div>
  <div class="col-11 col-md-3 text-left">
    <?php get_sidebar(); ?>
  </div>

</section>

</main>


<?php get_footer(); ?>
