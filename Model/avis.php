<?php
    // affichage des avis
    function getAllAvis() {
        $req_A = getBdd()->prepare('SELECT * FROM avis');
        $req_A->execute();
        $avis = $req_A->fetchAll(PDO::FETCH_ASSOC);
        $req_A->closeCursor();
        return $avis;
    }

    // création de l'avis
    function creationAvisBDD($id, $user_id, $titre, $avis) {
        $req_C_A = getBdd()->prepare('INSERT INTO avis(id, user_id, titre, avis) VALUES(:id, :user_id, :titre, :avis)');
        $req_C_A->execute(['id' => $id, 'user_id' => $user_id, 'titre' => $titre, 'avis' => $avis]);
    }

    // suppression de l'avis
    function deleteAvis($id) {
        $bdd = getBdd();
        $req = $bdd->prepare('DELETE FROM avis WHERE id = ?');
        return $req->execute([$id]);
    }
?>