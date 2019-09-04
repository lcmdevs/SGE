<?php
session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$cor = $_POST['cor'];

if ($modelo != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM cor WHERE NOME_COR = :cor");
  $sql->BindValue(":cor", $cor);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO cor(NOME_COR) VALUES (:cor)");
    $sql->BindValue(":cor", $cor);
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
