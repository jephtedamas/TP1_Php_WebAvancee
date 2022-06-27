<?php
  require_once "class/Crud.php";

  $crud = new Crud;
  $customer = $crud->selectId("customer","id", $_GET["id"]);

  foreach($customer as $key=>$value){
    $$key = $value;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>


<body>
<h1>Customer</h1>
    <form action="customer-edit-post.php" method="post">
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <label for="name">Nom</label>
    <input type="text" id="name" name="nom" maxlenght="30" value="<?php echo $nom; ?>">
    <label for="add">Adresse</label>
    <input type="text"  id="add" name="adresse" maxlenght="45" value="<?php echo $adresse; ?>">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" maxlenght="60" value="<?php echo $email; ?>">
    <input type="submit">
    </form>
    <hr>
    <form action="customer-delete.php" method="post">
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input type="submit" value="Delete">
    </form>

</body>
</html>