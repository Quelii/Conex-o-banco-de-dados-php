<?php

include "conn.php";
$id = 3;



//prepare
$stmt = $conn->prepare("DELETE FROM aula02 WHERE id =:id");
//trocar
$stmt->bindParam(":id",$id);

//executar
$stmt->execute();


echo "cadastro apagado com sucesso";
echo "<a href='index.php'>Clique para Voltar";

?>