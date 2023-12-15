<?php 
    $icon = '../Public/assets/icons8-connexion-100-noir.png';
    $titleMenu = 'Connexion';
    ob_start();
?>
<section class="row">
    <div class="col-5">
    	<h1 class="m-4 text-white">Connectez-vous</h1>
		<form method="post" action="index.php?action=getUsersConnexion">
		<div class="input-group mb-3">
  			<input class="form-control" type="email" name="email" placeholder="Votre adresse email" required>
			<div class="input-group-append">
    			<span class="input-group-text">@*****.com</span>
  			</div>
		</div>
		<div class="input-group mb-3">
			<input type="password" name="password" placeholder="Mot de passe" required class="form-control">
			<div class="input-group-append">
    			<span class="input-group-text">********</span>
  			</div>
		</div>
			<button type="submit" class="btn btn-primary">Connexion</button>
		</form>
	</div>
</section>
<?php
    $content = ob_get_clean();
    require 'View/base.php';
?>