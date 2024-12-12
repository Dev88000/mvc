<?php
    // affichage des projets
    function getAllProjet() {
        $req_P = getBdd()->prepare('SELECT * FROM projet');
        $req_P->execute();
        $projet = $req_P->fetchAll(PDO::FETCH_ASSOC);
        $req_P->closeCursor();
        return $projet;
    }
    
    // création du projet
    function creationProjetBDD($id, $user_id, $titre, $projet) {
        $req_C_P = getBdd()->prepare('INSERT INTO projet (id, user_id, titre, projet) VALUES(:id, :user_id, :titre, :projet)');
        $req_C_P->execute(['id' => $id, 'user_id' => $user_id, 'titre' => $titre, 'projet' => $projet]);
    }
    
    // modification du projet
    function upDateProjetBDD($id, $titre, $projet) {
        $req_M_P = getBdd()->prepare('UPDATE projet SET titre = :titre, projet = :projet WHERE id = :id');
        $req_M_P->execute(['id' => $id, 'titre' => $titre, 'projet' => $projet]);
    }

    // suppression du projet
    function deleteProjet($id) {
        $bdd = getBdd();
        $req = $bdd->prepare('DELETE FROM projet WHERE id = ?');
        return $req->execute([$id]);
    }
?>