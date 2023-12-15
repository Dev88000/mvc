
<section class="w-100">
	<div class="w-100">
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
		<button type="submit" class="btn btn-primary">S'inscrire</button>
		</form>
	</div>
</section>