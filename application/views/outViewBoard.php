<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>

<script src="<?= base_url('js/jquery-1.11.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery-ui.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>

<link type="text/css" rel="stylesheet" href="<?= base_url('css/jquery-ui.min.css') ?>" />
<link type="text/css" rel="stylesheet" href="<?= base_url('css/jquery-ui.theme.min.css') ?>" />
<link type="text/css" rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
<link type="text/css" rel="stylesheet" href="<?= base_url('css/bootstrap-theme.min.css') ?>" />
<link type="text/css" rel="stylesheet" href="<?= base_url('css/accordionmenu.css') ?>" />
<script>
$(function() {
});
</script>
<style type="text/css">
#sitebody {
	width: 100%;
	margin: 0 auto;
	font-size: 13px;
}

#header {
	background-color: #FFD4D4;
	height: 80px;
	text-align: center;
	line-height: 80px;
	margin-top: 5px;
}

#sidebar_left {
	background-color: #FFECC9;
	width: 30%;
	height: 450px;
	text-align: center;
	line-height: 400px;
	float: left;
}

#sidebar_right {
	background-color: #FFECC9;
	width: 15%;
	height: 450px;
	text-align: center;
	line-height: 400px;
	float: right;
}

#content {
	margin-left: 120px;
	margin-right: 120px;
	height: 450px;
	background-color: #F2FFF2;
	text-align: center;
	line-height: 400px;
}

#footer {
	clear: both;
	background-color: #FFD4D4;
	height: 80px;
	text-align: center;
	line-height: 80px;
}
</style>
</head>

<body>
	<div id="sitebody">
		<div id="header">header</div>
		<div id="sidebar_left">
			<ul class="accordion">
				<li id="one3" class="files"><a href="#one3">My Files<span>495</span></a>
					<ul class="sub-menu">
						<li><a href="#one3"><em>01</em>Dropbox<span>42</span></a></li>
						<li><a href="#one3"><em>02</em>Skydrive<span>87</span></a></li>
						<li><a href="#one3"><em>03</em>FTP Server<span>366</span></a></li>
					</ul></li>
				<li id="two3" class="mail"><a href="#two3">Mail<span>26</span></a>
					<ul class="sub-menu">
						<li><a href="#two3"><em>01</em>Hotmail<span>9</span></a></li>
						<li><a href="#two3"><em>02</em>Yahoo<span>14</span></a></li>
						<li><a href="#two3"><em>03</em>Gmail<span>3</span></a></li>
					</ul></li>
				<li id="three3" class="cloud"><a href="#three3">Cloud<span>58</span></a>
					<ul class="sub-menu">
						<li><a href="#three3"><em>01</em>Connect<span>12</span></a></li>
						<li><a href="#three3"><em>02</em>Profiles<span>19</span></a></li>
						<li><a href="#three3"><em>03</em>Options<span>27</span></a></li>
					</ul></li>
				<li id="four3" class="sign"><a href="#four3">Sign Out</a>
					<ul class="sub-menu">
						<li><a href="#four3"><em>01</em>Log Out</a></li>
						<li><a href="#four3"><em>02</em>Delete Account</a></li>
						<li><a href="#four3"><em>03</em>Freeze Account</a></li>
					</ul></li>
			</ul>
		</div>
		<div id="sidebar_right">sidebar_right</div>
		<div id="content">content</div>
		<div id="footer">footer</div>
	</div>
</body>
</html>