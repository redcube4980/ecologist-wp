<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>NPO法人 日本エコロジスト支援協会</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="apple-touch-icon" href="#">
<link rel="icon" type="image/x-icon" href="#">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	
<?php if( is_front_page() ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
<?php elseif(is_page('lecture')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lecture.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css">
<?php elseif(is_page('consulting')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<?php elseif(is_page('csr')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/csr.css">
<?php elseif(is_page('promotion')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/promotion.css">
<?php elseif(is_page('collaboration')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/collaboration.css">
<?php elseif(is_page('education')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/education.css">
<?php elseif(is_page('management')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/management.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php elseif(is_page('performance')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/performance.css">
<?php elseif(is_page('overview')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/overview.css">
<?php elseif(is_page('contact')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
<?php elseif(is_page('kakunin')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact-kakunin.css">
<?php elseif(is_page('error')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact-error.css">
<?php elseif(is_page('kanryo')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact-kanryo.css">
<?php elseif(is_page('privacy')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/privacy.css">
<?php endif; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.typekit.net/tpe3qzy.css">
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178886235-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178886235-1');
</script>
</head>
<body>
<div id="wrapper">
<header id="site-header">
	<div id="site-header-inner">
	<div class="header-pc-menu-left">
		<ul class="main-nav">
				<li class="animation d4"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/lecture/' ) ); ?>"><img class="lecture" alt="講演依頼 LECTURE" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-lecture.svg"></a></li>
				<li class="animation d3"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/consulting/' ) ); ?>"><img class="consulting" alt="コンサル依頼 CONSULTING" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-consulting.svg"></a></li>
				<li class="animation d2"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/csr/' ) ); ?>"><img class="csr" alt="CSR展開 CSR" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-csr.svg"></a></li>
				<li class="animation d1"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/promotion/' ) ); ?>"><img class="promotion" alt="環境プロモーション PROMOTION" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-promotion.svg"></a></li>
		</ul>
	</div>
	<h1 class="site-title animation-title">
		<a class="site-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="site-logoimage" src="<?php echo( get_template_directory_uri() ); ?>/images/ecologist-logo.svg" alt="NPO法人 日本エコロジスト支援協会"/>
		</a>
	</h1>
	<div class="header-pc-menu-right">
		<ul class="main-nav">
				<li class="animation d1"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/collaboration/' ) ); ?>"><img class="collaboration" alt="学生連携 COLLABORATION" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-collaboration.svg"></a></li>
				<li class="animation d2"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/education/' ) ); ?>"><img class="education" alt="環境教育 EDUCATION" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-education.svg"></a></li>
				<li class="animation d3"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/management/' ) ); ?>"><img class="management" alt="イベント運営 MANAGEMENT" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-management.svg"></a></li>
				<li class="animation d4"><a class="main-nav-link" href="<?php echo esc_url( home_url( '/performance/' ) ); ?>"><img class="performance" alt="活動実績 PERFORMANCE" src="<?php echo( get_template_directory_uri() ); ?>/images/header-icon-performance.svg"></a></li>
		</ul>
	</div>
	</div>
	<div class="hamburger">
		<div>
		<span></span>
		<span></span>
		<span></span>
		</div>
	</div>
	<nav id="header-navi">
    <div class="header-navi">
	<ul>
		<li><a href="<?php echo esc_url( home_url( '/lecture/' ) ); ?>">講演依頼 LECTURE</a></li>
		<li><a href="<?php echo esc_url( home_url( '/consulting/' ) ); ?>">コンサル依頼 CONSULTING</a></li>
		<li><a href="<?php echo esc_url( home_url( '/csr/' ) ); ?>">CSR展開 CSR</a></li>
		<li><a href="<?php echo esc_url( home_url( '/promotion/' ) ); ?>">環境プロモーション PROMOTION</a></li>
		<li><a href="<?php echo esc_url( home_url( '/collaboration/' ) ); ?>">学生連携 COLLABORATION</a></li>
		<li><a href="<?php echo esc_url( home_url( '/education/' ) ); ?>">環境教育 EDUCATION</a></li>
		<li><a href="<?php echo esc_url( home_url( '/management/' ) ); ?>">イベント運営 MANAGEMENT</a></li>
		<li><a href="<?php echo esc_url( home_url( '/performance/' ) ); ?>">活動実績 PERFORMANCE</a></li>
	</ul>
    </div>
	</nav>
</header>