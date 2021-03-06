<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog管理后台</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/admin/init.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/admin_menu.js"></script>
</head>
<body>
	<ul class="menu">
		<li class="p">标签管理</li>
		<ul class="menu-list">
			<li><a href="tags/tagList.php" target="right">标签列表</a></li>
			<li><a href="tags/tagAdd.php" target="right">添加标签</a></li>
		</ul>
		<li class="p">内容管理</li>
		<ul class="menu-list">
			<li><a href="article/articleList.php" target="right">内容列表</a></li>
			<li><a href="article/articleAdd.php" target="right">添加内容</a></li>
		</ul>
	  <li class="p">栏目管理</li>
	  <ul class="menu-list">
		<li><a href="cate/cateList.php" target="right">栏目列表</a></li>
		<li><a href="cate/cateAdd.php" target="right">添加栏目</a></li>
	  </ul>
	  <li class="p">轮播管理</li>
	  <ul class="menu-list">
		<li><a href="player/playerList.php" target="right">轮播列表</a></li>
		<li><a href="player/playerAdd.php" target="right">添加轮播</a></li>
	  </ul>
	  <li class="p">图片管理</li>
	  <ul class="menu-list">
		<li><a href="picture/pictureList.php" target="right">图片列表</a></li>
		<li><a href="picture/pictureAdd.php" target="right">添加图片</a></li>
	  </ul>
		<li class="p">系统管理</li>
		<ul class="menu-list">
			<li><a href="tags.php?action=list" target="right">系统管理</a></li>
		</ul>
	</ul>

</body>
</html>