<section class="w-100">
	<div class="w-100">
		<form method="post" action="index.php?action=creationArticle">	
		<div class="input-group mb-3">
			<input type="text" name="titre" placeholder="Votre titre" required class="form-control" aria-label="titre" aria-describedby="basic-addon2">
		</div>	
		<div class="input-group mb-3">
			<textarea type="text" name="article" placeholder="Votre article" required class="form-control" aria-label="article" aria-describedby="basic-addon2"></textarea>
		</div>
		<!-- <div class="input-group mb-3">
			<input type="date" name="article_date" required class="form-control" aria-label="article_date" aria-describedby="basic-addon2">
		</div> -->
		<button type="submit" name="creation_article" class="btn btn-primary">Ajouter</button>
		</form>
	</div>
</section>