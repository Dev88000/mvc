<?php
session_start();


// Récupération de tous les projets pour affichage dans le tableau
$allProjet = function_exists('getAllProjet') ? getAllProjet() : [];

// Récupération de tous les avis pour affichage dans le tableau
$allAvis = function_exists('getAllAvis') ? getAllAvis() : [];

// Organisation des vérifications en groupes
$verifications = [
    'Vérifications Globale' => [
        'Informations' => [
            'Nombre total de projets' => ['check' => isset($allProjet), 'value' => isset($allProjet) ? count($allProjet) : 0],
            'Nombre total d\'avis' => ['check' => isset($allAvis), 'value' => isset($allAvis) ? count($allAvis) : 0]
        ]
    ],
    '' => [
        'Informations Utilisateurs' => [
            'Session ID' => ['check' => isset($_SESSION['id']), 'value' => $_SESSION['id'] ?? 'Non défini'],
            'Session NOM' => ['check' => isset($_SESSION['nom']), 'value' => $_SESSION['nom'] ?? 'Non défini'],
            'Session PRENOM' => ['check' => isset($_SESSION['prenom']), 'value' => $_SESSION['prenom'] ?? 'Non défini'],
            'Session MAIL' => ['check' => isset($_SESSION['email']), 'value' => $_SESSION['email'] ?? 'Non défini']
        ]
    ]
];

echo "<div style='display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0;'>";
echo "<div style='width: 90%; max-width: 1400px;'>";

// Pour chaque groupe principal
foreach ($verifications as $mainTitle => $groups) {
    echo "<div style='margin-bottom: 40px;'>";
    echo "<h2 style='color: #264653; margin-bottom: 20px;'>$mainTitle</h2>";
    
    // Pour chaque sous-groupe
    foreach ($groups as $groupTitle => $conditions) {
        echo "<div style='margin-bottom: 30px;'>";
        echo "<h3 style='color: #2a9d8f; margin-bottom: 10px;'>$groupTitle</h3>";

        echo "<table border='3' style='border-collapse: collapse; width: 100%; margin-bottom: 20px;'>";
        echo "<tr style='background-color: #264653; color: white;'>";
        echo "<th style='padding: 10px;'>Condition</th>";
        echo "<th style='padding: 10px;'>Statut</th>";
        echo "<th style='padding: 10px;'>Valeur</th>";
        echo "</tr>";

        $rowColor = true;
        foreach ($conditions as $label => $data) {
            $backgroundColor = $rowColor ? '#f8f9fa' : '#e9ecef';
            echo "<tr style='background-color: $backgroundColor;'>";
            echo "<td style='padding: 8px; border: 1px solid #ddd;'>$label</td>";
            echo "<td style='padding: 8px; border: 1px solid #ddd; color: " . 
                 ($data['check'] ? '#2a9d8f' : '#e63946') . "; font-weight: bold;'>" . 
                 ($data['check'] ? 'OK' : 'ERREUR') . "</td>";
            echo "<td style='padding: 8px; border: 1px solid #ddd; white-space: pre-wrap;'>" . nl2br(htmlspecialchars($data['value'])) . "</td>";
            echo "</tr>";
            $rowColor = !$rowColor;
        }
        echo "</table>";
        echo "</div>";
    }
    echo "</div>";
}

echo "</div>";
echo "</div>";
?>