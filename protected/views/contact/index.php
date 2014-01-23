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
					<p>
						<h1>新浪微博:</h1>
						<a href = "<?php echo $contact['a']?>">http://weibo/hejunbiz</span>
					</p>
					<p>
						<h1>腾讯微博:</h1>
						<span>t.qq.com/hejunbiz</span>
					</p>
				</div>
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