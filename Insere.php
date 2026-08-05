<?php
require_once "conect.php";

$nomep = $_POST['nomep'];
$preco = $_POST['preco'];
$desi = $_POST['desi'];

$sql = "INSERT produto (nome, preco, desi) VALUES (:n, :p, :ds)";
$stmt = $pdo -> prepare($sql);
$stmt -> execute( [
':n' => $nomep,
':p' => $preco,
':ds' => $desi
]);

echo "Add o produto de id " . $pdo -> lastInsertId();

?>
