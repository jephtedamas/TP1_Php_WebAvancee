<?php
  require_once "class/Crud.php";

  $crud = new Crud;

  $insert = $crud->insert("customer", $_POST);

  header("Location: customer-list.php?id=$insert");


?>