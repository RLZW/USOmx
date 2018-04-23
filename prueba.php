<?php

$dsn = 'dblib:host=<uso1.c7dhdhum783t.us-east-2.rds.amazonaws.com>;dbname=<USO_INTELIGENTE>';
$user = 'mota';
$password = 'JavierRM1';

try
{
    $pdo_object = new PDO($dsn, $user, $password);
}
catch (PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
}

$sql = "SELECT * from <some table>";
$pdo_statement_object = $pdo_object->prepare($sql);
$pdo_statement_object->execute();
// $result = $pdo_statement_object->fetch(PDO::FETCH_ASSOC);
$result = $pdo_statement_object->fetchAll();
print_r($result);
?>