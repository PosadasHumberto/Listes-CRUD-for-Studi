

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center m-4 p-4  text-warning ">Bienvenue aux listes ToDo app</h1>
<div class="container">
    <div class="row ">
        <div class="col col-6 ">
            <div class="m-auto">
                <h2 class="text-center m-4 p-4 text-success">Créer une nouvelle liste</h2>
                <form action="addList.php" method="post" autocomplete="off">
                    <label class="text-white my-1" for="listname">Nom de la liste :</label>
                    <input class="form-control border border-warning" type="text" name="listname" id="listname" required placeholder="Ecrire le nom de la liste">
                    <button class="btn btn-success my-2">Accepter</button>
                </form>
            </div>
        </div>
        <div class="col col-5">
            <h2 class="text-center m-4 p-4 text-white">Ouvrir une liste existante</h2>

            <div class="">

                <?php
                include('database.php');
                $sql = "SELECT * FROM listes";
                $result = mysqli_query($conn, $sql);

                while($row=mysqli_fetch_assoc($result)) {
                    $idlist = $row['id'];
                    $namelist = $row['name'];
                    ?>
                        <div class="row mt-1">
                            <a href="taches.php?idlist=<?php echo $idlist ?>&namelist=<?php echo $namelist ?>" class="btn btn-primary btn-sm" role="button"><?php echo $namelist ?></a>
                        </div>



                <?php
                }
                ?>


            </div>

        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>