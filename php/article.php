<?php

// On inclut le fichier contenant les données du site
// ($nav et $navBis et $postsList)
include 'inc/data.php';

// On inclut le fichier de fonction
include 'inc/functions.inc.php';

// Étape 3, tableau associatif représentant les données de l'article

// Je veux récupérer la donnée "id" envoyée en GET
// * article.php?id=XXX
$articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// ensuite, je récupère les données de l'article en question dans le tableau de tous les articles
$post = getSingleArticle($articleId);
// debug
// print_r($post);exit;

// ! Le rendu se fait toujours à la fin
// Inclusion des templates (convention, tpl.php = templates)
include 'inc/header.tpl.php';
include 'inc/article.tpl.php';
include 'inc/footer.tpl.php';
