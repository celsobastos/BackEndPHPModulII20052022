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

$nome = "Celso Bastos 22";
$sql = "INSERT INTO alunos (name) VALUES (?)";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(1, $nome);
$result = $stmt->execute();
if ($result) {
    echo 'Alunos Inserido 1';
}
