<?php 
	$icon = '../Public/assets/icons8-inscription-100-noir.png';
    $titleMenu = 'Inscription';
    ob_start();
?>
<section class="row">
	<div class="col-5">
    	<h1 class="m-4 text-white">Inscrivez-vous</h1>
		<?php
			if (isset($_GET['error'])) {
				if (isset($_GET['message'])) {
					echo '<div class="alert error">'.htmlspecialchars($_GET['message']).'</div>';
				}
			}
			else if (isset($_GET['success'])) {
				echo '<div class="alert success">Vous êtes désormais inscrit. <a href="index.php">Connectez-vous</a>.</div>';
			}
		?>
		<form method="post" action="index.php?action=getUsersInscription">
		<div class="input-group mb-3">
			<input type="text" name="nom" placeholder="Votre nom" required class="form-control" aria-label="username" aria-describedby="basic-addon2">
			<div class="input-group-append">
    			<span class="input-group-text" id="basic-addon2">exemple = Doe</span>
  			</div>
		</div>
		<div class="input-group mb-3">
			<input type="text" name="prenom" placeholder="Votre prénom" required class="form-control" aria-label="username" aria-describedby="basic-addon2">
			<div class="input-group-append">
    			<span class="input-group-text">exemple = John</span>
  			</div>
		</div>
		<div class="input-group mb-3">
  			<input class="form-control" type="email" name="email" placeholder="Votre adresse email" required aria-label="Username" aria-describedby="basic-addon1">
			<div class="input-group-append">
    			<span class="input-group-text">@*****.com</span>
  			</div>
		</div>
		<div class="input-group mb-3">
			<input type="password" name="password" placeholder="Mot de passe" required class="form-control" aria-label="username" aria-describedby="basic-addon2">
			<div class="input-group-append">
    			<span class="input-group-text" id="basic-addon2">********</span>
  			</div>
		</div>
			<button type="submit"  class="btn btn-primary">S'inscrire</button>
		</form>
	</div>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>