<?php

// 1. Declara normalmente
function meuCarregadorDeClasses($classe) {
    echo "Tentando carregar: " . $classe;
    include '/' . $classe . '.php'; // como faz o caminho assim? Isso não é no Controllers?
}

// 2. Registra passando o nome entre aspas
spl_autoload_register('meuCarregadorDeClasses');


echo "deu certo até aqui";

$pdo = new conexaoBasic(); // esse troço da erro pq o banco não foi configurado


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
