<?php

include "conn.php";

$id = 2;
$name = "Queliane Bonfim de Oliveira Gramacho";
//prepara
$stmt = $conn->prepare("UPDATE aula02 SET name = :name WHERE id= :id");

//troca
$stmt ->bindParam(":id",$id);
$stmt ->bindParam(":name",$name);
//executa
$stmt->execute();


echo "Cadastro Alterado Com Sucesso";

echo "<a href='index.php'>aperte aqui para voltar<br>";

?>
