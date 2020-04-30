<?php

// On inclut le fichier contenant les données du site
// ($nav et $navBis et $postsList)
include 'inc/data.php';

// On inclut le fichier de fonction
include 'inc/functions.inc.php';

// J'ai besoin de la liste de tous les articles
$articles = getArticles();

// Etape 2 :
// - on a découper le code html de index.html en 3 fichiers de templates
// - puis, ici, on réassemble les 3, avec 3 include
// Inclusion des templates (convention, tpl.php = templates)
include 'inc/header.tpl.php';
include 'inc/home.tpl.php';
include 'inc/footer.tpl.php';