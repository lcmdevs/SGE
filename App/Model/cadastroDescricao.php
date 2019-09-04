<?php

session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$descri = $_POST['descricao'];

if ($descri != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM descricao WHERE DESC_DESCRICAO = :descri");
  $sql->BindValue(":descri", $descri);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO descricao(DESC_DESCRICAO) VALUE (:descri)");
    $sql->BindValue(":descri", $descri);
    $sql->execute();

    if ($sql) {

      echo $_SESSION['sucesso'] = "cadastro realizado";
    } else {

      echo $_SESSION['falha'] = "sql não realizado";
    }
  } else {

    echo $_SESSION['falha'] = "este modelo já está cadastrado";
  }
} else {

  echo $_SESSION['falha'] = "O campo modelo está vazio";
}
