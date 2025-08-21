<section class="w-100" style="max-height: 400px; overflow-y: auto;">
	<div class="w-100">		
		<div class="row">
		<?php
			foreach ($req_A as $avis) {
				$req_U_B_I = getUsersById($avis["user_id"]);
		?>
			<div class="col-12 col-sm-12 col-lg-12 col-xl-12 g-12">
				<div class="mb-2">
					<div class="card bg-info">
						<div class="card-body">
							<?php if (isset($_SESSION['prenom']) && (int) $_SESSION['id'] === (int) $avis['user_id']) { ?>
								<div class="d-flex justify-content-end">
									<button type="button" name="modif_avis" class="btn"><i class="fa-solid fa-pen text-warning"></i></button>
									<button type="button" name="supp_avis" class="btn" data-bs-target="#supp_avis_<?php echo $avis['id']; ?>" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa-solid fa-trash text-danger"></i></button>
								</div>
							<?php } ?>
							<h5 class="card-title"><?php echo $avis['titre']; ?></h5>
							<p class="card-text text-start"><?php echo $avis['avis']; ?></p>
							<p class="card-text text-dark text-end ">Poster par : <?php echo $req_U_B_I['prenom']; ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div> 
	</div>
</section>