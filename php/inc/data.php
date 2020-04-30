<?php

// On a crée ce fichier PHP afin de centraliser les données utiles pour les différentes pages du projet (ainsi, pas de copier-coller)

// etape 4

// tableau contenant les liens et titre de la navigation
$nav = [
    // Clé = le titre, l'ancre
    // Valeur = le lien
    'Home' => 'index.php',
    'Contact' => 'contact.php'
];

$navBis = [
    // Sous tableau avec titre et lien => $currentLinkInfos dans la template
    [
        'title' => 'Home',
        'url' => 'index.php'
    ],
   
    // Sous tableau avec titre et lien
    [
        'title' => 'Contact',
        'url' => 'contact.php'
    ]
];
