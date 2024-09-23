<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade < 6 || $idade > 100){
    header('Location: erroidade.php');
    die();
}

// if ($idade < 6 || $idade > 100) {
//     die();
// }


$categoria = "";

    if ($idade >= 6 && $idade <= 9) $categoria = "Kids";
    if ($idade >= 10 && $idade <= 14) $categoria = "Infantil";
    if ($idade >= 15 && $idade <= 17) $categoria = "Juvenil";
    if ($idade >= 18 && $idade <= 44) $categoria = "Adulto";
    if ($idade >= 45) $categoria = "Senior";


$conexao = mysqli_connect(hostname: "localhost:3306",username: "root",password: "",database: "alunosdb");
$query = "insert into alunos (nome, idade, categoria) values ('{$nome}', {$idade},'{$categoria}')";
$resultado = mysqli_query(mysql: $conexao, query: $query);
var_dump(value: $resultado);

header('Location: lista.php');
die();

?>
