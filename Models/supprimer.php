<?php
include('database.php');
$id=$_GET['id'];
$sql="DELETE FROM taches WHERE id_tache=$id";
$result=mysqli_query($conn, $sql);
if($result){
    header("location: ./index.php");
}
