<?php

// Fonction permettant de retourner la liste de tous les articles
function getArticles() {
    $postsList = [
        // Numéro d'article => tableau des données de cet article
        1 => [
            'title' => 'Une œuvre poétique pleine de mélancolie...',
            'category' => '☆☆☆☆',
            'author' => 'Lorren Collison',
            'avatar' => '../images/icon-dar.png',
            'published_datetime' => '2020-02-10',
            'published_date' => '10 février 2020',
            'excerpt' => 'J’ai perdu mon corps est un film d’animation qui alterne plusieurs cycles d’une vie.',
            'text' => 'J’ai perdu mon corps est un film d’animation qui alterne plusieurs cycles d’une vie. En noir et blanc, Jérémy Clapin nous décrit l’enfance de Naoufel. En couleurs, son adolescence et sa rencontre avec Gabrielle. En couleurs également, le parcours pleins d’embûches d’une main coupée. Cette main vivante, semble dotée d’émotions et va puiser dans ses forces et sa réflexion pour retrouver son corps, pour retrouver Naoufel. Sur le papier, « J’ai perdu mon corps » pourrait être un film d’horreur ou bien une comédie. En réalité, il s’agit d’une œuvre poétique pleine de mélancolie sur le destin d’un jeune homme en devenir. Sélectionné à la Semaine de la Critique 2019, on espère sincèrement qu’il sera sélectionné par l’Académie des César pour le meilleur film d’animation français.'
        ],
        2 => [
            'title' => 'Du grand art...',
            'category' => '☆☆☆☆☆',
            'author' => 'John Marchill',
            'avatar' => '../images/icon-john.png',
            'published_datetime' => '2019-03-27',
            'published_date' => '27 mars 2019',
            'excerpt' => 'J\'ai Perdu Mon Corps est peut être le meilleur film que j\'ai vu cette année au cinéma.',
            'text' => " J'ai Perdu Mon Corps est peut être le meilleur film que j'ai vu cette année au cinéma. Une œuvre à la portée émotionnelle sans limite. Une écriture intelligente et pertinente. Une vision humaniste incroyable et subtile. Du grand art."
        ],
        3 => [
            'title' => 'Un joli moment, plein de mélancolie...',
            'category' => '☆☆☆',
            'author' => 'Olivier Hertz',
            'avatar' => '../images/icon-ohz.png',
            'published_datetime' => '2019-05-05',
            'published_date' => '5 mai 2019',
            'excerpt' => 'Précédé d\'une superbe rumeur et couverts de prix, voilà le premier film de Jérémy Clapin.',
            'text' => " Précédé d'une superbe rumeur et couverts de prix, voilà le premier film de Jérémy Clapin. Un long métrage d'animation dont j’attendais, du coup, beaucoup. Certes, tout est très bien fait. Techniquement, c'est superbe, très beau graphisme, simple, brut, réaliste, pour mise en scène efficace. Beau récit également, entre fantastique et histoire d'amour, poignante et émouvante, adaptée du roman Happy Hand de Guillaume Laurant (scénariste, entre autres, de Jean-Pierre Jeunet). Les personnages sont attachants et l'ont suit leur parcours avec un certain intérêt. Mais pour moi il manque un petit quelque chose pour en faire un grand film. Par conséquent, je suis un peu resté sur ma faim. Dans un autre genre, dans l'animation française cette année, j'ai préféré le très dur et magnifique Les hirondelles de Kaboul. J'ai perdu mon corps s'avère tout de même très réussi et sort des sentiers battus. Un joli moment, plein de mélancolie, de poésie, de sensibilité et d'humanité. Et un réalisateur à suivre de près..."
        ],
        4 => [
            'title' => 'Grosse déception...',
            'category' => '☆',
            'author' => 'Laetitia T.',
            'avatar' => '../images/icons8-rick-sanchez-48.png',
            'published_datetime' => '2020-03-27',
            'published_date' => '27 mars 2020',
            'excerpt' => 'Bon, esthétiquement ça se tient, bien même, mais alors côté scénario...',
            'text' => "Bon, esthétiquement ça se tient, bien même, mais alors côté scénario...c'est le règne du bétassou. Personnages complètement sommaires, gentils, gentils...on ne peut rien leur reprocher, mais on ne peut pas non plus se passionner pour eux; la complexité n'est pas interdite aux dessins animés, comme l'a prouvé Pixar ces dernières années. Et en plus, on n'a aucune explication donnée aux histoires de la main: que faisait elle dans le frigo de départ? Le scénariste a complètement oublié son histoire en chemin. Grosse déception."
        ],
        5 => [
            'title' => 'Une impression mitigée...',
            'category' => '☆☆',
            'author' => 'Enzo_Lill',
            'avatar' => '../images/icons8-kawaii-48.png',
            'published_datetime' => '2020-01-05',
            'published_date' => '5 janvier 2020',
            'excerpt' => 'Une impression mitigée... l\'histoire est très originale, la réalisation subtile, ...',
            'text' => "Une impression mitigée... l'histoire est très originale, la réalisation subtile, mais j'ai trouvé que le film était froid, déshumanisé, sans chaleur. D'autre part, pourquoi une animation aussi saccadée alors que les décors sont superbes?"
        ],
        6 => [
            'title' => 'Audacieux et étonnant....',
            'category' => '☆☆☆',
            'author' => 'Marine Quentin',
            'avatar' => '../images/icons8-kawaii-taco-64.png',
            'published_datetime' => '2019-02-09',
            'published_date' => '9 février 2019',
            'excerpt' => 'J\'ai perdu mon corps est sans doute la plus belle réussite animée française de 2019....',
            'text' => "J'ai perdu mon corps est sans doute la plus belle réussite animée française de 2019. Premier long-métrage de Jérémy Clapin, il met en scène à la fois une histoire d'amour entre deux jeunes adultes et les étranges pérégrinations d'une main à la recherche de son corps. Si deux qualificatifs sont indiscutables au film, ce sont ceux d'audacieux et d'étonnant. J'ai perdu mon corps sort des sentiers battus de l'animation, même ceux du genre indépendant qui pourtant en a d'habitude sous le coude pour proposer un cinéma novateur. Il n'hésite pas non plus à saisir frontalement son spectateur ; plusieurs scènes mettant en oeuvre la main sont particulièrement dérangeantes et contrastent avec les instants doux amers des deux protagonistes. Autre point positif : la bande-originale, étalée sur de longs moments sans dialogue, qui confère au film un aspect envoûtant. Il est cependant dommage que toute cette entreprise soit freinée par une fin un peu bâclée. Il s'agit donc d'une réussite qui toutefois se devra d'être confirmée au long-métrage suivant."
        ],

        7 => [
            'title' => 'Mené de main de maître...',
            'category' => '☆☆☆☆☆',
            'author' => 'Mathieu Soupil',
            'avatar' => '../images/icons8-utilisateur-femme-48.png',
            'published_datetime' => '2020-02-06',
            'published_date' => '6 février 2020',
            'excerpt' => 'Avec J\'ai perdu mon corps, Jérémy Clapin effectue une percée décisive sur le terrain de l\'animation.',
            'text' => 'Avec J\'ai perdu mon corps, Jérémy Clapin effectue une percée décisive sur le terrain de l\'animation. En contant simultanément le voyage d\'une main et celui rétrospectif de son propriétaire, le réalisateur (et coscénariste) nous invite pour une balade d\'une incroyable mélancolie. La grande beauté du film se niche dans sa simplicité, convoquant la dureté (du propos) et l\'onirisme dans le même monde. Il y a quelque chose d\'incroyablement poétique à voir la personnification d\'un membre tel un nouveau né qui prend peu à peu ses marques. Mais aussi de sonder les maux d\'un jeune homme malchanceux et rêveur qui cherche la paix intérieure. Le film a l\'intelligence de toujours lier les deux histoires par une interdépendance dans la vie de Naoufel (ses passions, ses souvenirs, son travail), rendant d\'autant plus prégnante l\'émotion. Qui est également décuplée par la composition musicale magnifique. Mené de main de maître, J\'ai perdu mon corps articule une belle histoire de recomposition mémorielle jusqu\'à son final poignant.'
        ],

        8 => [
            'title' => 'Histoire un peu plate...',
            'category' => '☆☆',
            'author' => 'Lilly863',
            'avatar' => '../images/icons8-utilisateur-femme-16.png',
            'published_datetime' => '2019-12-27',
            'published_date' => '27 décembre 2019',
            'excerpt' => 'Je n\'ai malheureusement pas réussi à accrocher à ce film d\'animation.',
            'text' => 'Je n\'ai malheureusement pas réussi à accrocher à ce film d\'animation. Je me suis même franchement ennuyé. A part cette idée, incongrue mais originale, de la main à la recherche de son propriétaire, j\'ai trouvé l\'histoire un peu plate, sans que la qualité de l\'animation ne permette de compenser.'
        ],

        9 => [
            'title' => 'Une idée originale ne fait pas forcément un bon film...',
            'category' => '☆',
            'author' => 'Marie B.',
            'avatar' => '../images/icon-cg.png',
            'published_datetime' => '2019-11-27',
            'published_date' => '27 novembre 2019',
            'excerpt' => 'On ne comprend pas le but ni le pourquoi de cette main...',
            'text' => 'On ne comprend pas le but ni le pourquoi de cette main qui semble bien décidée à retrouver son corps et il y a fort à parier que les scénaristes n\'y comprennent rien non plus. Une idée originale ne fait pas forcément un bon film et J\'ai perdu mon corps nous le prouve.'
        ],

        10 => [
            'title' => 'Un petit bijou...',
            'category' => '☆☆☆☆☆',
            'author' => 'Hubert Dermont',
            'avatar' => '../images/icon-lk.jpg',
            'published_datetime' => '2020-04-23',
            'published_date' => '23 avril 2020',
            'excerpt' => 'S\'il fallait découvrir le film d\'animation pour adultes, il faudrait commencer par cette œuvre',
            'text' => 'S\'il fallait découvrir le film d\'animation pour adultes, il faudrait commencer par cette œuvre aussi surprenante que brillante. Un petit bijou dans un écrin subtil et original !'
        ],

        11 => [
            'title' => 'Un film éblouissant.',
            'category' => '☆☆☆☆',
            'author' => 'Jules March',
            'avatar' => '../images/icon-bv.png',
            'published_datetime' => '2020-04-14',
            'published_date' => '14 avril 2020',
            'excerpt' => 'Un film éblouissant. On se laisse porter par des images magnifiques...',
            'text' => 'Un film éblouissant. On se laisse porter par des images magnifiques où l’on retrouve un Paris un peu gris mais profond et poétique. Un rythme souvent haletant et parfois plus onirique lorsque reviennent les souvenirs d’une enfance heureuse. Un vrai suspense : comment cette main a été amputée ? Evadée d’un hôpital, elle entreprend une traversée de la ville à la recherche de son corps. De son côté, son propriétaire, Naoufel, tombé amoureux de Gabrielle, cherche désespérément à changer une vie devenue absurde et à échapper à son destin. Y parviendra-t-il ? Le titre du livre de Guillaume Laurant (à qui l’on doit aussi Le fabuleux destin d’Amélie Poulain) donne un indice : Happy Hand…'
        ],
    ];
    // Debug
    // print_r($postsList);exit;

    return $postsList;
}

// fonction permettant de retourner les infos d'un seul article
function getSingleArticle($id) {
    // On récupère tous les articles
    $articlesList = getArticles();

    // On vérifie si l'id demandé existe
    if (array_key_exists($id, $articlesList)) {
        // On récupère les données de l'article
        $article = $articlesList[$id];

        // On retourne ce tableau
        return $article;
    }
    else {
        return false;
    }
}