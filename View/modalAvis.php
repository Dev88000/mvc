<section class="w-100">
	<div class="w-100">
	<?php if (isset($_SESSION['prenom'])) { ?>
		<form>	
        <button type="button" name="creation_avis" class="btn btn-primary m-3" data-bs-target="#creation_avis" data-bs-toggle="modal">Ajouter un avis</button>
		</form>
		<?php } else { ?>
			<button class="btn btn-success m-3" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Connectez-vous</button>
        <?php } ?>	
	</div>
</section>