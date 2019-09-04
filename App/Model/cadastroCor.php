<?php
session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$cor = $_POST['cor'];

if ($cor != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM cor WHERE NOME_COR = :cor");
  $sql->BindValue(":cor", $cor);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO cor(NOME_COR) VALUE (:cor)");
    $sql->BindValue(":cor", $cor);
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

header("Location: ../../?pagina=admin&metodo=cor");
