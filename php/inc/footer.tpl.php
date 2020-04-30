
    </div>

<div class="nav-footer">
    <ul class="left_footer_nav">
            <?php foreach ($nav as $currentLinkAnchor=>$currentLinkURL) : ?>
                    <li class="left_footer_nav-item"><a href="<?= $currentLinkURL ?>" class="left_footer_nav-link"><?= $currentLinkAnchor ?></a></li>
            <?php endforeach; ?>
    </ul>
</div>


</body>
</html>