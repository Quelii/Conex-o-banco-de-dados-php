<?php
    include "conn.php";

    $name =$_POST ['name'];
    $email = $_POST ['email'];
    $tel = $_POST['tel'];

//preparar
$stmt = $conn->prepare("INSERT INTO aula02(name, email, tel) VALUES(:name,:email, :tel)");


//trocar
$stmt ->bindParam(':name',$name);
$stmt ->bindParam(':email',$email);
$stmt ->bindParam(':tel',$tel);



//executar
$stmt->execute();


?>