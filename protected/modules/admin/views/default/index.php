<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="/static/admin/css/manage.css">
		<script type="text/javascript" src="/static/js/jquery/jquery.js"></script>
		<title>后台管理系统</title>
	</head>
	<body scroll="no">
		<div class="header">
			<div class="logo">bagecms.com</div>
		<div class="nav">
			<ul>
				<li index="0" class="active">
					<div>
						<a href="/index.php?r=admini/default/home" target="win" hidefocus="">首页</a>
					</div>
				</li>
				<li index="1">
					<div>
						<a href="/index.php?r=admini/config/index" target="win" hidefocus="">设置</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="logininfo">
			<span class="welcome">
				<img src="/static/admin/images/user_edit.png" align="absmiddle"> 欢迎, <em>hejun</em>
			</span>
			<a href="/index.php?r=admini/admin/ownerUpdate" target="win">修改密码</a> <a href="/index.php?r=admini/public/logout" target="_top">退出登录</a>
			<a href="/index.php" target="_blank">前台首页</a></div>
		</div>
		<div class="topline">
			<div class="toplineimg left" id="imgLine"></div>
		</div>
		<div class="main" id="main" style="height: 685px;">
			<div class="mainA">
				<div id="leftmenu" class="menu">
					<ul index="0" class="left_menu" style="display: block;">
						<li index="0" class="active">
							<a href="/index.php?r=admini/default/home" target="win">系统首页</a>
						</li>
						<li index="1">
							<a href="/index.php?r=admini/catalog/index" target="win">栏目管理</a>
						</li>
					</ul>
					<ul index="1" class="left_menu" style="display: none;">
						<li index="0">
							<a href="/index.php?r=admini/config/index" target="win">站点设置</a>
						</li>
						<li index="1"><a href="/index.php?r=admini/config/seo" target="win">SEO设置</a></li>
						<li index="2">
							<a href="/index.php?r=admini/config/upload" target="win">上传设置</a>
						</li>
						<li index="3">
							<a href="/index.php?r=admini/config/custom" target="win">自定义设置</a>
						</li>
					</ul>
					<ul index="2" class="left_menu" style="display: none;">
						<li index="0">
							<a href="/index.php?r=admini/post/index" target="win">内容管理</a>
						</li>
						<li index="1">
							<a href="/index.php?r=admini/post/comment" target="win">评论管理</a>
						</li>
						<li index="2">
							<a href="/index.php?r=admini/post/special" target="win">专题管理</a>
						</li>
						<li index="3">
							<a href="/index.php?r=admini/page/index" target="win">单页管理</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="mainB" id="mainB" style="width: 1280px;">
				<iframe src="/index.php?r=admini/default/home" name="win" id="win" width="100%" height="100%" frameborder="0"></iframe>
			</div>
		</div>
	</body>
</html>