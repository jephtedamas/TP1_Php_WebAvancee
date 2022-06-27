<?php
require_once "class/Crud.php";
$crud = new Crud;
$select = $crud->select("customer");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jephté Damas | TP1 </title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include('./vues/header.php'); ?>

  <nav><?php include('./vues/nav.php'); ?></nav>


  <main class="wrapper">

    <h2>Main content</h2>

    <section>
        <form action="customer-post.php" method="post">

          <label for="name">Nom</label>

          <input type="text" id="name" name="nom" maxlenght="30">

          <label for="add">Adresse</label>

          <input type="text"  id="add" name="adresse" maxlenght="45">

          <label for="email">Courriel</label>

          <input type="text" id="email" name="email" maxlenght="60">

          <input type="submit">

        </form>

    </section>


  </main>



  <?php include('./Vues/footer.php'); ?>
</body>
</html>