// Funções específicas 
function validaForm(){
    var nome =document.getElementById('nome') .value;
    var idade =document.getElementById('idade') .value;

    document.getElementById('msg-erro').innerHTML = '';
    
    if (validaCampos(nome, idade) == false) {
        document.getElementById('msg-erro').innerHTML = 'Preencha os campos obrigatórios (*)';
        return false;
    }
        if(validaFaixaValor(idade) == false){
        document.getElementById('msg-erro').innerHTML = 'Idade deve estar entre 6 e 100';
        return false;
    }

    document.form1.action = 'grava.php';
    document.form1.submit();

}

function validaCampos(nome, idade){
    var vazio = 0;

    if(nome == '') vazio++;
    if(idade =='') vazio++;

    if(vazio > 0){
        return false;
    }
    return true;
    
}

function categoriaAluno(idade) {
    var categoria = ""

    if (idade >= 6 && idade <= 9) categoria = "Kids";
    if (idade >= 10 && idade <= 14) categoria = "Infantil";
    if (idade >= 15 && idade <= 17) categoria = "Juvenil";
    if (idade >= 18 && idade <= 44) categoria = "Adulto";
    if (idade >= 45) categoria = "Senior";

    document.getElementById('categoria').value = categoria;

}