      <main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Derniers commentaires postés</h2>
        <div class="posts">
<?php foreach ($articles as $postId=>$currentPost) : ?>
          <article class="post">
            <a href="" class="post__category post__category--color-<?= $currentPost['category'] ?>"><?= $currentPost['category'] ?></a>
            <h3><?= $currentPost['title'] ?></h3>
            <div class="post__meta">
              <img class="post__author-icon" src="<?= $currentPost['avatar'] ?>" alt="">
              <strong class="post__author"><?= $currentPost['author'] ?></strong>
              <time datetime="<?= $currentPost['published_datetime'] ?>">le <?= $currentPost['published_date'] ?></time>
            </div>
            <p>
              <?= $currentPost['excerpt'] ?>
            </p>
            <a href="article.php?id=<?= $postId ?>" class="post__link">Lire la suite</a>
          </article>
<?php endforeach; ?>
        </div>
      </main>