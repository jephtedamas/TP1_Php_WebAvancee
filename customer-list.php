<?php
    require_once "class/Crud.php";
    $crud = new Crud;
    $crud1 = new Crud;
    $select = $crud->select("customer");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('./vues/header.php'); ?>

<nav><?php include('./vues/nav.php'); ?></nav>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($select as $row){
?>
        <tr>
            <td><a href="customer-edit.php?id=<?php echo $row["id"];?>"><?php echo $row["nom"]; ?></a></td>
            <td><?php echo $row["adresse"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
        </tr>
<?php
    }
?>
    </tbody>
</table>


<?php include('./Vues/footer.php'); ?>
</body>
</html>