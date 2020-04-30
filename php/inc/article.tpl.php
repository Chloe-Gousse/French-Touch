        <main class="right">
            <!-- emmet: h2+article>a+h3+div>(img+strong+time)+p+a -->
            <h2 class="right__title"><?php echo $post['title']; ?></h2>

            <article class="post post--solo">
                <a href="" class="post__category post__category--color-<?= $post['category'] ?>"><?= $post['category'] ?></a>
                <div class="post__meta">
                    <img class="post__author-icon" src="<?= $post['avatar'] ?>" alt="">
                    <strong class="post__author"><?= $post['author'] ?></strong>
                    <time datetime="<?= $post['published_datetime'] ?>">le <?= $post['published_date'] ?></time>
                </div>
                <p>
                    <?= $post['text'] ?>
                </p>
                <a href="index.php" class="post__link">Retour accueil</a>
            </article>
        </main>