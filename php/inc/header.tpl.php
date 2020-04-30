<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Touch</title>
    <link rel="shortcut icon" href="../images/video.ico" type="image/x-icon">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">French Touch</h1>

          <div class="left__paragraph">
            <h2 class="left__subtitle"><strong class="left__subtitle"> J'AI PERDU MON CORPS</strong></h2>
            <a href="https://www.youtube.com/watch?v=PEmvj6lduE8" target="_blank" id="trailer"><h2 class="left__subtitle"><strong class="left__subtitle-strong"> >> Bande Annonce << </strong></h2></a>

          <img src="../images/player.png" alt="player" id="player">

        </div>
        
        <nav>
          <ul class="left__nav">
<?php foreach ($nav as $currentLinkAnchor=>$currentLinkURL) : ?>
            <li class="left__nav-item"><a href="<?= $currentLinkURL ?>" class="left__nav-link"><?= $currentLinkAnchor ?></a></li>
<?php endforeach; ?>
          </ul>
        </nav>

      </header>