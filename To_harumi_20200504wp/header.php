<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NFH6TVZ');</script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheet.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFH6TVZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
  <nav class="navbar fixed-top shadow-sm navbar navbar-expand-lg navbar-light border-bottom border-success" style="background-color:rgba(255, 255, 255, 0.9);">
    <a class="navbar-brand" style="color:#006400;font-size:25px;" href="<?php echo esc_url( home_url( '/' ) ); ?>">16 Type</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-success" href="<?php echo get_page_link(8);?>">あいさつ/<span>Greeting</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="<?php echo get_page_link(6);?>">タイプとは/<span>4 letter Type</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="<?php echo get_page_link(12);?>">サービス/<span>Services</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="<?php echo get_page_link(10);?>">お問い合わせ/<span>Contact</span></a>
        </li>
    </div>
  </nav>
</header>
