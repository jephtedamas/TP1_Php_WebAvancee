<?php
  require_once "class/Crud.php";

  $crud = new Crud;

  $update = $crud->update("customer", $_POST, "id", $_POST["id"]);

  header("Location: customer-list.php?");
?>