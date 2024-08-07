<section class="w-100">
    <div class="w-100">
        <form method="post" action="index.php?action=supprimer">
            <input type="hidden" name="oui" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-success m-3">Oui</button>
            <button type="button" class="btn btn-danger m-3" data-bs-dismiss="modal">Non</button>    
        </form>
    </div>
</section>