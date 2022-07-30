<?php
$idlist=$_POST['idlist'];
$namelist=$_POST['namelist'];
$title=$_POST['title'];
include('database.php');
$sql="INSERT INTO taches(name , list_id) VALUES('$title', '$idlist')";
$result=mysqli_query($conn, $sql);
if($result){
    header("location: ./taches.php?idlist= $idlist&namelist=$namelist");
}
?>

