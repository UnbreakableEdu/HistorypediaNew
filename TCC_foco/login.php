<?php
require_once "connect.php";

$query = "SELECT iduser, email, senha FROM user WHERE email=:email AND senha=:senha";

$stmt = $con->prepare($query);

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt->bindValue(':email', $email);
$stmt->bindValue(':senha', $senha);

$stmt->execute();
$usersAmount = $stmt->rowCount();
$user = $stmt-> fetch(PDO::FETCH_ASSOC);

if ($usersAmount == 0){
    print "Email ou senha incorretos";
}else{
    session_start();

    $_SESSION['logged'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('location: index.php');
}
?>