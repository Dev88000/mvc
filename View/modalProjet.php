<section class="w-100">
	<div class="w-100">
	<?php if (isset($_SESSION['prenom'])) { ?>
		<form>	
        <button type="button" name="creation_projet" class="btn btn-primary m-3" data-bs-target="#creation_projet" data-bs-toggle="modal">Ajouter un projet</button>
		</form>
		<?php } else { ?>
			<button class="btn btn-success m-3" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connectez-vous</button>
        <?php } ?>	
	</div>
</section>