<?php
require_once "connect.php";

$query = "DELETE FROM user WHERE user.iduser = :iduser";

$stmt = $con->prepare($query);

$id = $_POST['iduser'];

$stmt->bindValue(':iduser', $id);

if ($stmt->execute()){
    echo "Registro deletado";
}else{
    echo "Registro deletado com sucesso";
}
?>


