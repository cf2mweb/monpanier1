<?php
// MonPanier V1
include_once('monpanier/jcart.php');
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>Mon panier</title>

		<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />

		<link rel="stylesheet" type="text/css" media="screen, projection" href="monpanier/css/monpanier.css" />

	</head>
	<body>
		<div id="wrapper">
			<h2>Mon panier</h2>

			<div id="sidebar">
				<div id="monpanier"><?php $jcart->display_cart();?></div>
			</div>

			<div id="content">

				<form method="post" action="" class="monpanier">
					<fieldset>
						<input type="hidden" name="secure_monpanier" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="id-panier" value="1" />
						<input type="hidden" name="nom-panier" value="Balle de football" />
						<input type="hidden" name="prix-panier" value="25.00" />
						<input type="hidden" name="url-panier" value="" />

						<ul>
							<li><strong>Balle de football</strong></li>
							<li>Prix: 25.00 €</li>
							<li>
								<label>Nombre: <input type="text" name="nb-panier" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="ajouter-panier" value="ajouter au panier" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="monpanier">
					<fieldset>
						<input type="hidden" name="secure_monpanier" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="id-panier" value="2" />
						<input type="hidden" name="nom-panier" value="Batte de baseball" />
						<input type="hidden" name="prix-panier" value="19.50" />
						<input type="hidden" name="url-panier" value="" />

						<ul>
							<li><strong>Batte de baseball</strong></li>
							<li>Prix: 19.50 €</li>
							<li>
								<label>Nombre: <input type="text" name="nb-panier" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="ajouter-panier" value="ajouter au panier" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="monpanier">
					<fieldset>
						<input type="hidden" name="secure_monpanier" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="id-panier" value="3" />
						<input type="hidden" name="nom-panier" value="Stick de Hockey" />
						<input type="hidden" name="prix-panier" value="33.25" />
						<input type="hidden" name="url-panier" value="" />

						<ul>
							<li><strong>Stick de Hockey</strong></li>
							<li>Prix: 33.25 €</li>
							<li>
								<label>Nombre: <input type="text" name="nb-panier" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="ajouter-panier" value="ajouter au panier" class="button tip" />
					</fieldset>
				</form>

				<div class="clear"></div>


				<?php
					echo '<pre>';
					var_dump($_SESSION['jcart']);
					echo '</pre>';
				?>
			</div>

			<div class="clear"></div>
		</div>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="monpanier/js/monpanier.min.js"></script>
	</body>
</html>