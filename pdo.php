<?php

try {
    $host = '127.0.0.1';
    $port = '3306';
    $dbname = 'impactacurso';
    $dsn = "mysql:host=$host;dbname=$dbname";
    $conexao = new PDO($dsn, 'root' , '123456789');
} catch (PDOException $error) {
    echo $error->getMessage();
}


// $nome = "Celso";
// $result = $conexao->exec("INSERT INTO alunos (name) VALUES ('$nome')");
// if ($result) {
//     echo 'Inserido com sucesso';
// }

$nome = "Pedro Augusto <script>";
$sql = "INSERT INTO alunos (name) VALUES (?)";

$statement = $conexao->prepare($sql);
$statement->bindValue(1, $nome);
$result = $statement->execute();
if ($result) {
    echo 'Alunos Inserido';
}
