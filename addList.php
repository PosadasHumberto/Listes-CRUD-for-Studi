<?php
$listname=$_POST['listname'];

include('database.php');
$sql="INSERT INTO listes(name) VALUES('$listname')";
$result=mysqli_query($conn, $sql);
if($result){
    $sql2="SELECT * FROM listes where name = '$listname'";
    $result2=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_assoc($result2)) {
        $idlist = $row['id'];
        $namelist = $row['name'];
    }
    header("location: ./index.php");
    //header("location: ./taches.php?idlist='$idlist&namelist=$namelist");
    //header("location: ./taches.php?idlist= $idlist&namelist=$namelist");
    //echo "<script> alert('La tache a été crée');</script>";
}
?>
