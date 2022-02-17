<?php
include '../../connection.php';
$sql =
"INSERT INTO schoolstudents(name,lastname,grade,debt,branch)
VALUES (:name,:lastname,:grade,:debt,:branch)";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":name",$_POST["name"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":lastname",$_POST["lastname"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":grade",$_POST["grade"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":debt",$_POST["debt"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":branch",$_POST["branch"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>