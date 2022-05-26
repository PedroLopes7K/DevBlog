<?php

include_once('helpers/Url.php');
include_once('data/categories.php');
include_once('data/posts.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- estilos -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">

  <!-- fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <title>Dev Blog</title>
</head>

<body>
  <header>

    <a href="<?= $BASE_URL ?>" id="Logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt=" Logo">
    </a>

    <nav>
      <ul id="navBar">
        <li><a href="<?= $BASE_URL ?>">Home</a></li>
        <li><a href="">Categorias</a></li>
        <li><a href="">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>Contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>
</body>