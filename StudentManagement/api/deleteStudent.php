<?php
$id = $_POST["sid"];
include '../../connection.php';
$sql = "DELETE FROM schoolstudents WHERE id = $id";
$getStudents = $dbh->prepare($sql) ;
$getStudents->execute();
?>
