<?php
require_once '../connection.php';
$id = $_POST['id'];
$name = $_POST['name'];

$sql = 'UPDATE `batch` SET `name` = :name WHERE `id` = :id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt->execute();
header('Location: ../../administrator/batch.php?type=success&message=Successfully Updated');

