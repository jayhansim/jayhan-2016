<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
	<link rel="icon" sizes="192x192" href="<?php bloginfo('template_url'); ?>/img/icon-192x192.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">

	<?php if(is_page_template('portfolio.php')): ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/portfolio.css">
	<?php endif; ?>

	<script>var iAJSLoader={scripts:[],stateTracker:[],curGroupIndex:0,onCompleteCalled:!1,onComplete:function(){console.log("iJSLoader Completed!")},onStateChange:function(t,e,a,r){this.stateTracker[t]=this.stateTracker[t]||{},this.stateTracker[t].total=e.length;var o=!1;return function(){o||this.readyState&&"complete"!=this.readyState||(o=!0,iAJSLoader.stateTracker[t].loaded=iAJSLoader.stateTracker[t].loaded||0,iAJSLoader.stateTracker[t].loaded++,iAJSLoader.stateTracker[t].loaded==iAJSLoader.stateTracker[t].total&&iAJSLoader[r]())}},init:function(t){this.scripts=t,this.loadNextGroup()},loadNextGroup:function(){if(!this.scripts.length){if(this.onCompleteCalled)return;this.onCompleteCalled=!0}for(var t=this.scripts.shift(),e=0;e<t.length;e++){var a=t[e],r=document.createElement("script");r.type="text/javascript",r.async="async",r.src=a,r.onload=r.onreadystatechange=this.onStateChange(this.curGroupIndex,t,a,"loadNextGroup");var o=document.head||document.getElementsByTagName("script")[0];o.appendChild(r)}this.curGroupIndex++}};</script>
    <script>
        iAJSLoader.init([
            [
                "//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"
            ],
            [
                "<?php bloginfo('template_url'); ?>/js/base.min.js"
            ]
        ]);
    </script>
    <?php
		  if ( function_exists( 'wpcf7_enqueue_scripts' ) && is_page(141) ) {
		      wpcf7_enqueue_scripts();
		  }

		  if ( function_exists( 'wpcf7_enqueue_styles' ) && is_page(141) ) {
		      wpcf7_enqueue_styles();
		  }
		?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="container container--main">

		<!-- HEADER -->
		<header class="header" role="banner">
			<a href="<?php bloginfo("url"); ?>" class="header__title">
				<?php bloginfo('name'); ?>
			</a>
		</header>

		<?php if ( is_front_page() && !is_paged()): ?>
		  <h3 class="welcome">
		    Hi, my name is Jayhan Sim, I’m a product designer working in Singapore. View my works on <A href="https://www.behance.net/jayhan" class="link--behance" rel="external">Behance</a> and <a href="https://dribbble.com/jayhan" class="link-dribbble" rel="external">Dribbble</a>.
		  </h3>
		<?php endif ;?>

		<div class="content">