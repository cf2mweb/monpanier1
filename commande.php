<?php

// MonPanier V1

include_once('monpanier/config-loader.php');
include_once('monpanier/jcart.php');
@session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>MonPanier v1</title>

		<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />

		<link rel="stylesheet" type="text/css" media="screen, projection" href="monpanier/css/monpanier.css" />
	</head>
	<body>
		<div id="wrapper">
			<h2>Valider votre commande</h2>

			<div id="sidebar">
			</div>

			<div id="content">
				<div id="monpanier"><?php $jcart->display_cart();?></div>

				<p><a href="<?php echo $config['accueil']; ?>">&larr; Continuez vos achats</a></p>

				<?php
					echo '<pre>';
					var_dump($_SESSION['jcart']);
					echo '</pre>';
				?>
			</div>

			<div class="clear"></div>
		</div>

		<script type="text/javascript" src="monpanier/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="monpanier/js/monpanier.min.js"></script>
	</body>
</html>