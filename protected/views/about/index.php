<!DOCTYPE html>
<html lang="zh-cn" dir="ltr">
	<head>
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="description" content="<?php echo $head['title']?>" />
		<meta name="robots" content="<?php echo $head['robots']?>" />
		<meta name="Author" Content="<?php echo $head['author']?>">
		<meta name="keywords" Content="<?php echo $head['keywords']?>">
		<meta name="viewport" content="<?php echo $head['viewport']?>">
		<script src="/static/javascript/jquery.js"></script>
		<link rel="alternate" type="application/rss+xml" href="<?php echo $head['alternate']['href']?>" title="<?php echo $head['alternate']['title']?>" />
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	    <link rel="stylesheet" href="/static/css/js.css" />
		<link rel="stylesheet" href="/static/css/main.css" />
	</head>
	<body class="home">
		<header class="site">
			<nav class="group">
				<div class="logo">
					<h1>关于</h1>
				</div>
				<ul id="nav">
					<li><a href="/about">关于</a></li>
					<li><a href="/life">生活</a></li>
					<li><a href="/album">专辑</a></li>
					<li><a href="/footprints">足迹</a></li>
					<li><a href="/jobs">工作</a></li>
					<li><a href="/contact">联系</a></li>
					<li><a href="/blog">博客</a></li>
				</ul>
			</nav>	
		</header>
		<section class="con">
			<article class="group">
				<div>
					<h1>头为犁！</h1>
					<p>战略，创新，执行 – 为美好明天！</p>
					<a href="/talk" class="button looking-closer">详细<span class="icon-arrow-right"><pseudo>><pseudo></span></a>
				</div>
				<img src="/static/images/pflugschar.jpg" alt="Abbildungs eines Pflugschars" />
			</article>
		</section>
		
		<footer class="page">
			<section class="group">
				<article>
					<h2>学习</h2>
					<p>让学习成为一种习惯</p>
				</article>
				<article>
					<h2>工作</h2>
					<p>只为美好明天</p>
				</article>
				<article>
					<h2>生活</h2>
					<p>回归自然，享受美好</p>
				</article>
			</section>
		</footer>
	</body>
</html>