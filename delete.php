<?php
include 'includes/header.php';

if(isset($_GET['idventa'])){
    $idventa = $_GET['idventa'];
    $query = "DELETE FROM venta WHERE idventa= $idventa";
    $result= mysqli_query($conn, $query);
    if(!$result){
        die ("query failed");
    }

    $_SESSION['message']= 'Dato eliminado';
    $_SESSION['message_type']='danger';
    header('Location: index.php');

}





?>