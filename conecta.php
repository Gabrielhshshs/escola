<?php
    // DEFININDO O FUSO HORÁRIO:
    date_default_timezone_set('America/Sao_Paulo');
    
    // CONEXÃO COM A BASE DE DADOS: verifique sempre o dbname e o usuário e senha (root e "").
    try{
        $pdo = new PDO("mysql:dbname=escola;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }
?>