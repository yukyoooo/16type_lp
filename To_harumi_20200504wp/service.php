<?php
/*
Template Name:service
*/
?>
<?php get_header(); ?>
<main>

<div class="">
  <div class="jumbotron jumbotron-fluid typelab-wrapper">
    <h1 class="display-4 text-light">料金・サービス</h1>

    <div class="card shadow mx-auto">
      <div class="card-body">
        <h2 class="card-title font-weight-bold">「当たり前」の違いを科学する</h2>
        <p class="card-text">
          人はみなそれぞれ違った感じ方・考え方・価値観を持っています。ある人にとっての「当たり前」が、他の人には奇妙に映ったり、他の人の「当たり前」が受け入れられないこともありますよね。一般的にはこれらは性格の違いとして認識されていると思いますが、実は、心理学には人それぞれの「当たり前」の違いを分類する理論があります。
        </p>
        <a href="<?php echo get_page_link(10);?>" class="btn btn-success">無料体験はこちら</a>
      </div>
    </div>

  </div>
</div>

<article class="container">

<div class="contents-wrapper">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <h3 class="text-center">料金・サービス</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/african-3935693_640.jpg" width="100%">
      </div>
      <div class="col-11 col-md-8">
        <p class="text-center">
          会社の従業員数により、料金が異なります。また、参加人数は４〜６名になり、こちらの方で指定します。事前にどのような雰囲気で行うか体験も可能です。（1人あたり５,０００円)
        </p>
      </div>
    </div>
</div>

<div class="service-to-company">
  <p class="text-center">「会社向き」</p>
</div>

<div class="row service-wrapper justify-content-center">
  <div class="col-11 col-md-3 text-center service-contents shadow-sm">
    <h4>1000人以上の会社</h4>
    <p><span>２５</span>万円/日</p>
  </div>
  <div class="col-11 col-md-3 text-center service-contents shadow-sm">
    <h4>100-999人の会社</h4>
    <p><span>１５</span>万円/日</p>
  </div>
  <div class="col-11 col-md-3 text-center service-contents shadow-sm">
    <h4>100人未満の会社</h4>
    <p><span>１０</span>万円/日</p>
  </div>

  <div class="col-11 service-kome">
    <p class="text-center">※個人セッションは1時間10,000円で行っています</p>
  </div>

  <div class="col-11 col-md-8 text-center service-btn">
    <a href="<?php echo get_page_link(10);?>" class="bigger-btn btn btn-success">無料体験はこちら</a>
  </div>
</div>






</article>


</main>

<?php get_footer(); ?>
