<?php
  require_once "class/Crud.php";

  $crud = new Crud;

  $delete = $crud->delete("customer", $_POST["id"], "customer-list.php");

  header("Location: customer-list.php?");

?>