<?php

$conexao = mysqli_connect(hostname: "localhost:3306",username: "root",password: "",database: "alunosdb");
$query = "select * from alunos";
$resultado = mysqli_query(mysql: $conexao, query: $query);




?>

<html>
    <head>
        <title>Listando dados de alunos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css"> 
    </head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Categoria</th>
        </tr>

        <?php
            while ($aluno = mysqli_fetch_assoc($resultado)) {
        ?>
             <tr>
                 <td><?=$aluno['nome']?></td>
                 <td><?=$aluno['idade']?></td>
                 <td><?=$aluno['categoria']?></td>
             </tr>
             <?php
            }
            ?>
    </table>
</body>
</html>