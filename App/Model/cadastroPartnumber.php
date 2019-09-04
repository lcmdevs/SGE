<?php
session_start();

include_once '../../lib/Database/Conection.php';

$conn = new Conexao();
$conn->conectar();

$partNumber = $_POST['partNumber'];

if ($modelo != null) {

  global $pdo;
  $sql = $pdo->prepare("SELECT * FROM partnumber WHERE NUM_PARTNUMBER = :partnumber");
  $sql->BindValue(":partNumber", $partNumber);
  $sql->execute();

  if ($sql->rowCount() == 0) {

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO partnumber(NUM_PARTNUMBER) VALUES (:partNumber)");
    $sql->BindValue(":partNumber", $partNumber);
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
