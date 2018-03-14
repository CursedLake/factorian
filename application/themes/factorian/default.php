<?php $view->inc('elements/header.php') ?>

<?php
	$a = new Area('contenu');
	$a->enableGridContainer();
	$a->display($c);
?>

<?php $view->inc('elements/footer.php') ?>