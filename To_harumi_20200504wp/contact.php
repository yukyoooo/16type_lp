<?php
/*
Template Name:contact
*/
?>
<?php get_header(); ?>
<main>

<div class="">
  <div class="jumbotron jumbotron-fluid typelab-wrapper contact-wrapper">
    <h1 class="display-4 text-light">お問合せ</h1>
    
    

    <div class="card shadow">
      <div class="card-body">
        <h2 class="card-title font-weight-bold">無料体験はこちら<br>
        【GW限定】オンライン無料タイプセッション！</h2>
    <p>タイプを知れば、自分が分かり相手が理解できるようになります。<br>
    経験豊富なインストラクターと共にタイプについて学んでみませんか？</p>
    <p>※コロナの影響のためZoomでの開催となります。登録して頂いたメールアドレスにZoomのリンクをお送りします。</p>

        <!-- <form class="text-left" action="mail.php" method="post" id="mailform">　 -->
          <div class="text-left" >
            <p><span>(※)=必須項目です</span></p>
   <?php echo do_shortcode('[contact-form-7 id="16" title="コンタクトフォーム 1"]'); ?>
    　　　　 <p>内容に誤りがなければ、当社の<a href="<?php echo get_page_link(14);?>">利用規約</a>をお読みいただき、当社における個人情報の取り扱いに同意いただける場合「送信」ボタンをクリックしてください。
        </div>
      </div>
    </div>

  </div>
</div>

<article class="container">








</article>


</main>

<?php get_footer(); ?>
