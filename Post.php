<?php

include_once('templates/Header.php');

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;
  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>

<main class="post-container">
  <div class="content-container">
    <h1><?= $currentPost['title'] ?></h1>
    <p class="description"> <?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" />

    </div>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eligendi aspernatur repudiandae, consectetur officiis libero assumenda! Maiores nisi necessitatibus eum veritatis officiis quidem similique numquam? In possimus molestiae et deleniti.
      Obcaecati officia natus pariatur voluptate quisquam velit corrupti deserunt rem, consequatur alias saepe asperiores harum ab sequi odit aliquid perspiciatis ex adipisci suscipit sapiente. Quis velit non nihil dolor iusto.
      Repudiandae, eos ipsa. Sapiente, laudantium cumque officiis, beatae ex, minima fugit dolores esse aperiam repellat quidem voluptatem similique vitae dolore vero officia eaque nemo. Possimus iusto enim ea dolor quam?
      Eligendi distinctio in optio consectetur quos ipsam? Odit non exercitationem ipsum amet quam doloribus reiciendis totam eos. Quisquam, minus deleniti aliquid et, officia nostrum perferendis, sed nemo saepe repudiandae id.
    </p>
  </div>
  <aside class="nav-container">
    <h3>Tags</h3>
    <ul class="tags-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li>
          <a href="#">#<?= $tag ?></a>
        </li>
      <?php endforeach ?>
      </>
      <h3>Categorias</h3>
      <ul class="categories-list">
        <?php foreach ($categories as $category) : ?>
          <li>
            <a href="#"><?= $category ?></a>
          </li>
        <?php endforeach ?>
      </ul>
  </aside>
</main>

<?php
include_once('templates/Footer.php')
?>