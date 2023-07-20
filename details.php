<?php include 'inc/header.php';
require_once "db_connect.php";

$id = $_GET["x"];

$sql = "SELECT * FROM `goods` WHERE id = $id";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card main-card m-4">
        <div class="container text-center bg-warning">
            <div class="row text-container">
                <div class="col-md-8 background-text">
                    <div class="card-body text">
                        <h2 class="card-title"><?= $row["Name"] ?></h2>
                        <h4 class="card-title"><?= $row["Price"] ?>€</h4>
                        <p class="card-text"><small class="text-body-secondary"> <?= $row["Description"] ?></small></p>
                        <a class="btn btn-light btn-order">Order</a>
                    </div>
                </div>

                <div class="col-6 col-md-4"><img src="photos/<?= $row["Img"] ?>" width="420px" height="500px" alt=""></div>
            </div>
</body>

</html>