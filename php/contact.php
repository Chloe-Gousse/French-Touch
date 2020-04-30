<?php

// On inclut le fichier contenant les données du site
// ($nav et $navBis)
include 'inc/data.php';
include 'post-contact.php';

// ! Le rendu se fait toujours à la fin
// Inclusion des templates (convention, tpl.php = templates)
include 'inc/header.tpl.php';
include 'inc/contact.tpl.php';
include 'inc/footer.tpl.php';