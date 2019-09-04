<?php
session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$modelo = $_POST['Modelo'];

if ($modelo != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM modelo WHERE NOME_MODELO = :modelo");
  $sql->BindValue(":modelo", $modelo);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO modelo(NOME_MODELO) VALUE (:modelo)");
    $sql->BindValue(":modelo", $modelo);
    $sql->execute();

    if ($sql) {

      $_SESSION['sucesso'] = "cadastro realizado";
  
    } else {

      $_SESSION['falha'] = "sql não realizado";
  
    }
  } else {

    $_SESSION['falha'] = "este modelo já está cadastrado";
     
  }
} else {

  $_SESSION['falha'] = "O campo modelo está vazio";
  
}

header("Location: ../../?pagina=admin&metodo=modelo");

