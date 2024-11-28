<?php
function downloadFile($filename) {
    // Chemin de base des fichiers
    $basePath = dirname(__DIR__) . '/dl/';
    $filepath = $basePath . basename($filename);
    
    // Vérification de sécurité
    if (!file_exists($filepath) || !is_file($filepath)) {
        die('Fichier non trouvé');
    }
    
    // Vérifier que le fichier est bien dans le dossier dl
    if (strpos(realpath($filepath), realpath($basePath)) !== 0) {
        die('Accès non autorisé');
    }
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    flush();
    readfile($filepath);
    exit;
}

if (isset($_GET['file'])) {
    downloadFile($_GET['file']);
}