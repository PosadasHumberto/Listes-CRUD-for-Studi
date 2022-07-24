<?php
include('database.php');
if($_GET){                                              //si les données arrivent via GET
    $nameList = $_GET['namelist'];
    $idList = $_GET['idlist'];
}
if($_POST){                                             //si les données arrivent via POST
    $nameList=$_POST['namelist'];
    $idList=$_POST['idlist'];
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title> ToDo listes  avec PHP</title>
</head>
<body class="bg-dark">

<h1 class="text-center m-4 p-4  text-warning "><?php echo $nameList; ?></h1>

<div class="w-50 m-auto">
    <form action="addTask.php" method="post" autocomplete="off">

        <label class="text-white my-1" for="title">Tâche :</label>
        <input class="form-control border border-warning" type="text" name="title" id="title" required placeholder="Ecrire le nom de la tâche">
        <input id="idlist" name="idlist" type="hidden" value="<?php echo $idList?>">
        <input id="namelist" name="namelist" type="hidden" value="<?php echo $nameList?>">
        <button class="btn btn-success my-2">Rajouter</button>
    </form>
</div>

<hr class="w-50 m-auto text-warning">

<div class="w-50 m-auto">
    <h1 class="text-warning text-center m-4 p-4">Tâches</h1>
    <table class="table text-white bg-secondary table-hover">
        <thead>
        <tr>
            <th scope="col">identifiant</th>
            <th scope="col">Tâches</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include('database.php');
        $sql="SELECT * FROM taches WHERE list_id = '$idList'";
        $result=mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id_tache'];
                $title=$row['name'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title ?></td>
                    <td><a href="edit.php?id=<?php echo $id ?>" class="btn btn-success btn-sm" role="button">Modifier</a></td>
                    <td><a href="supprimer.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" role="button">Supprimer</a></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div class="w-50 m-auto">
    <a href="index.php" class="btn btn-danger btn-sm" role="button">Revenir a la page principale</a>
<div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
