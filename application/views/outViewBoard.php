<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<script type="text/javascript" src="<?= base_url('js/jquery-ui.min.js') ?>"></script>
<link type="text/css" rel="stylesheet" href="<?= base_url('css/jquery-ui.min.css') ?>" />
<link type="text/css" rel="stylesheet" href="<?= base_url('css/jquery-ui.theme.min.css') ?>" />
<style type="text/css">
#sitebody {width: 100%; margin: 0 auto; font-size: 13px;}
#header {background-color: #FFD4D4; height: 80px; text-align: center; line-height: 80px; margin-top: 5px;}
#sidebar_left {background-color: #FFECC9; width: 15%; height: 450px; text-align: center; line-height: 400px; float: left;}
#sidebar_right {background-color: #FFECC9; width: 15%; height: 450px; text-align: center; line-height: 400px; float: right;}
#content {margin-left: 120px; margin-right: 120px; height: 450px; background-color: #F2FFF2; text-align: center; line-height: 400px;}
#footer {clear: both; background-color: #FFD4D4; height: 80px; text-align: center; line-height: 80px;}
</style>
<body>
	<div id="sitebody">
		<div id="header">header</div>
		<div id="sidebar_left">sidebar_left</div>
		<div id="sidebar_right">sidebar_right</div>
		<div id="content">content</div>
		<div id="footer">footer</div>
	</div>
</body>
</html>