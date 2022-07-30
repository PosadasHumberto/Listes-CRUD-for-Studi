<?php
$id=$_POST['id'];
$title=$_POST['title'];
include 'database.php';
$sql="UPDATE taches SET name='$title' WHERE id_tache=$id";
$result=mysqli_query($conn, $sql);
if($result){
    //echo "<script>alert('La tache a été modifié correctement');</script>";
    header("location: ./index.php");
}
