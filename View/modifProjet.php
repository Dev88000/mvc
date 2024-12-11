<section class="w-100">
	<div class="w-100">
	<form method="post" action="index.php?action=modificationProjet">	
			<div class="input-group mb-3">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="text" name="titre" placeholder="Votre titre" required class="form-control" aria-label="titre" aria-describedby="basic-addon2">
			</div>	
			<div class="input-group mb-3">
				<textarea type="text" name="projet" placeholder="Votre projet" required class="form-control" aria-label="projet" aria-describedby="basic-addon2"></textarea>
			</div>
			<button type="submit" name="modif_projet" class="btn btn-primary">Modifier votre projet</button>
		</form>
	</div>
</section>