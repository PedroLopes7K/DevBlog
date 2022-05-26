<?php

include_once('templates/Header.php')
?>

<!-- <body> -->
<main>
  <div class="title-container">
    <h1>Dev Blog</h1>
    <p>O seu blog sobre programação</p>
  </div>
  <div class="posts-container">
    <?php foreach ($posts as $post) : ?>
      <div class="post-box">
        <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
        <h2 class="post-title">
          <a href="<?= $BASE_URL ?>Post.php?id=<?= $post['id'] ?>"> <?= $post['title'] ?></a>
        </h2>
        <p class="description"> <?= $post['description'] ?></p>

        <div class="tags-container">
          <?php foreach ($post['tags'] as $tag) : ?>
            <a href="#">#<?= $tag ?></a>
          <?php endforeach ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</main>

<?php
include_once('templates/Footer.php')
?>