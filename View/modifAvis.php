<section class="w-100">
	<div class="w-100">
	<form method="post" action="index.php?action=modificationAvis">	
			<div class="input-group mb-3">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="text" name="titre" placeholder="Votre titre" required class="form-control" aria-label="titre" aria-describedby="basic-addon2">
			</div>	
			<div class="input-group mb-3">
				<textarea type="text" name="avis" placeholder="Votre avis" required class="form-control" aria-label="avis" aria-describedby="basic-addon2"></textarea>
			</div>
			<button type="submit" name="modif_avis" class="btn btn-primary">Modifier votre avis</button>
		</form>
	</div>
</section>