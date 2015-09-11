<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>website</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('main');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test Menu Gauche</title><!-- 
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css"> -->
	</head>
	<body>
		<nav name="leftmenu">
			<div>
				<?= $this->Html->image("logo-evea.png") ?>
			</div>
			<div>
				<ul name="liste-menu-gauche">
					<li class="selected">Home</li>
					<li>Reporting</li>
					<li>Mon profil</li>
					<li>Documents</li>
					<li>Liens</li>
				</ul>
			</div>
		</nav>
		
		<div name="page">
			<video "width: 1800px" "height: 700px" src="http://avada.tfusion.netdna-cdn.com/avada/agency/wp-content/uploads/sites/11/2014/11/home_app_creation.mp4" preload="auto" loop="" autoplay="" muted=""></video>
			<?= $this->fetch('content'); ?>
		</div>	
	</body>
</html>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
