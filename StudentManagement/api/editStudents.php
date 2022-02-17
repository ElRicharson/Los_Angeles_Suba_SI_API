<?php
$id = $_POST["sid"];
include '../../connection.php';
$sql = "UPDATE schoolstudents SET name =
:name,lastname = :lastname,grade = :grade,debt = :debt,branch = :branch WHERE id = $id";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":name",$_POST["name"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":lastname",$_POST["lastname"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":grade",$_POST["grade"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":debt",$_POST["debt"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":branch",$_POST["branch"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
