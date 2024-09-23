<!DOCTYPE html>
<html>
    <head>
        <title>Enviando dados de alunos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h2>Dados do Aluno</h2>
        <form name="form1" action="" method="post">
            <label for="nome">Nome completo*:</label>
            <input type="text" name="nome" id="nome" placeholder="nome..."/>
            <label for="idade" >Idade *:</label>
            <input type="number" name="idade" id="idade" min="6" max="100"
            placeholder="idade..." onblur="categoriaAluno(this.value);"/>
            <label for="categoria">Categoria *:</label>
            <input type="text" name="categoria" id="categoria" placeholder="categoria..." readonly/>
            <input type="button" value="Enviar" onclick="validaForm();"/>
            <span id="msg-erro" class="fonte-erro-padrao"></span>
        </form>
    </body>
</html>

<script src="js/funcoes.js"></script>
<script src="js/funcoesdealunos.js"></script>



