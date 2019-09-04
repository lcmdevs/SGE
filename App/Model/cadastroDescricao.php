<?php
session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$descri = $_POST['descricao'];

if ($modelo != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM descri WHERE DESC_DESCRICAO = :descri");
  $sql->BindValue(":descri", $descri);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO descri(DESC_DESCRICAO) VALUES (:descri)");
    $sql->BindValue(":descri", $descri);
    $sql->execute();

    if ($sql->execute()) {

      $_SESSION['sucesso'] = "cadastro realizado";
      header("Location: ");


    } else {

      $_SESSION['falha'] = "sql não realizado";
      header("Location: ");

    }
  } else {

    $_SESSION['falha'] = "este modelo já está cadastrado";
    header("Location: ");

  }
} else {

  $_SESSION['falha'] = "O campo modelo está vazio";
  header("Location: ");

}
