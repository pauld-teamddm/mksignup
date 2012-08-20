<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $this->prepare('pageTitle'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="/style.css" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/bootstrap/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/bootstrap/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/bootstrap/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/bootstrap/ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/">MarioKart 64 Tournament</a>
					<div class="nav-collapse">
						<ul class="nav pull-right">
					<?php
						$pages = array('index' => array('/', 'Signup'), 'rules' => array('/rules', 'Rules'), 'players' => array('/players', 'Participants'));
						$onPage = $this->get('onPage');
						foreach ($pages as $name => $pageinfo) {
							$liClass = ($name == $onPage) ? ' class="active"' : '';
							$href = ($name == $onPage) ? '#' : $pageinfo[0];
							echo "<li{$liClass}><a href='{$href}'>{$pageinfo[1]}</a></li>\n";
						}
					?>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">
		<?php
			fMessaging::show('success', fURL::get(), 'alert alert-success');
			$this->place('body');
		?>
			<hr/>
			<footer class="footer">
				<p><small>MK64 Tournament, 2012, run by <a href="mailto:pauld@teamddm.com">PD</a>.</small></p>
			</footer>
		</div> <!-- /container -->
		
		<script src="/bootstrap/js/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>