<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="/static/admin/css/manage.css">
		<script type="text/javascript" src="/static/js/jquery/jquery.js"></script>
		<title>Error <?php echo $code; ?></title>
	</head>
	<body>
		<h2>Error <?php echo $code; ?></h2>
		<div class = "error">
			<?php echo CHtml::encode($message); ?>
		</div>
	</body>
</html>