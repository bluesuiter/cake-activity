<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('/bootstrap/css/bootstrap.min.css');
	echo $this->Html->css('/bootstrap/css/bootstrap-responsive.min.css');
	echo $this->Html->css('cake.generic');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>

	<!-- load jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php echo $this->Html->link('Cake Activity', "/", array('class' => 'brand')); ?>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<?php if (empty($member['id'])) {
							echo $this->element('Menu/logged-out-member');
						} else {
							echo $this->element('Menu/logged-in-member');
						} ?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">

		<?php echo $this->fetch('content'); ?>


	</div> <!-- /container -->
	<?php
	echo $this->Html->script('/bootstrap/js/bootstrap.min.js');
	?>
</body>

</html>