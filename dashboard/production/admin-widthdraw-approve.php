<?php
include("../../dbconfig.php");
if($_POST['name']=="approve"){
    $id = $_POST['id'];
    $sql = "select * from `joinus-data` where id='$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $money = $row['widthdraw'];
    $sql = "update `joinus-data` set wallet=wallet-'$money' , widthdraw=0 where u_id='$id'";
    $conn->query($sql);
}
if($_POST['name']=="decline"){
$id = $_POST['id'];
$sql = "select * from `joinus-data` where id='$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $money = $row['widthdraw'];
$sql = "update `joinus-data` set widthdraw=0 where u_id='$id'";
    $conn->query($sql);
}



?>