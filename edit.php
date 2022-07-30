<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title> Modifiez votre tâche</title>
</head>
<body class="bg-dark">

<?php
include 'database.php';
$id=$_GET['id'];
$sql="SELECT * FROM taches WHERE id_tache=".$id;
$result = mysqli_query($conn, $sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $title=$row['name'];
}
?>

<h1 class="text-center m-4 p-4  text-warning ">Modifier votre tâche <br> <?php echo $title ?></h1>

<div class="w-50 m-auto">
    <form action="editComportement.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="title">Titre</label>
            <input class="form-control" type="text" name="title" id="title" value="<?php global $title; echo $title ?>" placeholder="Modifiez le nom de votre tâche"
                   Required>
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        </div>
        <button class="btn btn-success mt-3">Modifier</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

