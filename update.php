<?php include 'inc/header.php' ?>
<?php require_once "db_connect.php";
require_once "upload_file.php";

$id = $_GET["x"];
$sql = "SELECT * FROM goods WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);


if (isset($_POST["update"])) {
    $Name = $_POST["Name"];
    $Description = $_POST["Description"];
    $Material = $_POST["Material"];
    $Price = $_POST["Price"];
    $Img = uploadFile($_FILES["Img"]);

    if ($_FILES["Img"]["error"] == 0) {
        if ($row["Img"] != "dummy.jpg") {
            unlink("photos/$row[Img]");
        }

        $sql = "UPDATE `goods` SET `Name`='$Name',`Material`='$Material',`Price`= `$Price`,`Img`='$Img[0]',`Description`='$Description' WHERE id = $id";
    } else {
        $sql = "UPDATE `goods` SET `Name`='$Name', `Description`='$Description', `Price`= $Price WHERE id = $id";
    }
    if (mysqli_query($connect, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
        product has been updated, {$Img[1]}</div>";
        header("refresh:3; url=index.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        error found, {$Img[1]}
      </div>";
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bags</title>
</head>

<body>
    <div class='container mt-5'>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="Name" value="<?= $row["Name"] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Picture</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Upload picture here" name="Img">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Material</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="It is made from...." name="Material" value="<?= $row["Material"] ?>">
            </div>
            <div class=" mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description" value="<?= $row['Description'] ?>">
                <label for=" exampleFormControlInput1" class="form-label">Price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="It costs....." name="Price" value="<?= $row["Price"] ?>">
            </div>
            <div class=" d-flex justify-content-center m-5 "><button name="update" type="submit" class="btn btn-warning">Update</button>
            </div>



        </form>
    </div>
</body>

</html>