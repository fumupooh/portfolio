<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>
    <?php if (is_front_page()): ?>
        <?php bloginfo('name'); ?>
    <?php elseif (is_home()): ?>
        <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>
    <?php elseif (is_page()): ?>
        <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>
    <?php elseif (is_single()): ?>
        <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>
    <?php elseif (is_404()): ?>
        ページが見つかりません｜<?php bloginfo('name'); ?>
    <?php else: ?>
        <?php bloginfo('name'); ?>
    <?php endif; ?>
	</title>
  <link rel="shortcut icon" href="https://portfolio.fumulog.com/wp-content/themes/portfolio/img/favicon.ico">
  <meta name="description" content="A portfolio site of Fumi Kuranishi.">
	<meta property="og:title" content="Fumi Kuranishi">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://portfolio.fumulog.com/">
	<meta property="og:image" content="https://portfolio.fumulog.com/wp-content/themes/portfolio/img/ogp.jpg">
	<meta property="og:site_name" content="Fumi Kuranishi">
	<meta property="og:description" content="A portfolio site of Fumi Kuranishi.">
	<meta name="twitter:card" content="summary">
  <meta name="twitter:image" content="https://portfolio.fumulog.com/wp-content/themes/portfolio/img/ogp.jpg">
  <!-- Adobe Fonts -->
  <script>
    (function(d) {
      var config = {
        kitId: 'pmh4ayf',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <link rel="stylesheet" href="https://use.typekit.net/bnb6rfs.css">
  <!-- /Adobe Fonts -->
	<?php wp_head(); ?>
</head>
<body>
<header>
</header>