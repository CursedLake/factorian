<?php 
$view->inc('elements/header.php');
?>

<!--contenu html-->
<div class="row slider_accueil">
	<div class="col-md-12">
		<?php
			$a = new Area('Slider');
			$a->enableGridContainer();
			$a->display($c);
		?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6 col-xl-4 services">
			<?php
				$a = new Area('service1');
				//$a->enableGridContainer();
				$a->display($c);
			?>
		</div>
		<div class="col-12 col-sm-6 col-xl-4 services">
			<?php
				$a = new Area('service2');
				//$a->enableGridContainer();
				$a->display($c);
			?>
		</div>
		<div class="col-12 col-xl-4 liste_services">
			<?php
				$a = new Area('liste-services_content');
				//$a->enableGridContainer();
				$a->display($c);
			?>
		</div>
	</div>
</div>

<div class="row CTA">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6">
				<?php
					$a = new Area('CTA_content');
					$a->display($c);
				?>
			</div>
			<div class="col-12 col-sm-6 CTA_button">
				<?php
					$a = new Area('CTA_button');
					$a->display($c);
				?>
			</div>
		</div>
	</div>
</div>

<div class="container contenu">
	<div class="row">
		<div class="col-md-12">
			<?php
				$a = new Area('Content');
				$a->enableGridContainer();
				$a->display($c);
			?>			
		</div>
	</div>
</div>

<?php
$view->inc('elements/footer.php');
 ?>