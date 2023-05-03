<?php
    include("conecta.php"); //Faz a conexão com a base de dados
    
    $cpf   = $_POST["cpf"]; //Pega o input do cpf
    $nome  = $_POST["nome"];
    $idade = $_POST["idade"];

    //Vamos ver qual botao foi pressionado:
    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO alunos VALUES('$cpf','$nome',$idade)");
        $resultado = $comando->execute();
        header("Location: index.html");  //Volta
    }

    if(isset($_POST["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM alunos WHERE cpf='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html");  //Volta
    }
    if(isset($_POST["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE alunos SET  nome='$nome', idade=$idade WHERE CPF='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html");  //Volta
    }

?>