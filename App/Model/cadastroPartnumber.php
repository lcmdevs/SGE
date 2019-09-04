<?php
session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$partNumber = $_POST['partNumber'];

if ($partNumber != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM partnumber WHERE NUM_PARTNUMBER = :partNumber");
  $sql->BindValue(":partNumber", $partNumber);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO partnumber(NUM_PARTNUMBER) VALUE (:partNumber)");
    $sql->BindValue(":partNumber", $partNumber);
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

header("Location: ../../?pagina=admin&metodo=partnamber");
