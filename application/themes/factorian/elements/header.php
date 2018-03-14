<!DOCTYPE html>
<html>
<head>
	<?php Loader::element('header_required'); ?>
	<meta charset="utf-8">

	<link rel="stylesheet" href="<?php echo $view->getThemePath();?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $view->getThemePath();?>/css/edit.css">

	<!-- <script type="text/javascript" src="<?php /*echo $view->getThemePath();*/?>/js/bootstrap.js"></script> -->

</head>
<body>
<div class="<?= $c->getPageWrapperClass() ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo">
					<h1>FACTORIAN</h1>
				</div>
			</div>
			<div class="col-md-9">
				<div class="auto-nav">
					<?php
						$a = new Area('Menu');
						$a->enableGridContainer();
						$a->display($c);
					?>
				</div>
			</div>
		</div>
	</div>