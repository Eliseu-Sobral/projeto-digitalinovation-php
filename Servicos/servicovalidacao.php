<?php

//Validação de dados


function validaNome(string $nome): bool
{
    $msg_nome = '<script>alert("O nome não pode estar vazio");</script>';
    $err_nome = '<script>alert("O nome é muito pequeno");</script>';
    $err_nome2 = '<script>alert("O nome é muito grande");</script>';
    if(empty($nome)){
        $_SESSION["mensagem-de-erro"] = $msg_nome;
        return false;
    }else if(strlen($nome)<3){
        $_SESSION["mensagem-de-erro"] = $err_nome;
        return false;
    }else if(strlen($nome)>40){
        $_SESSION["mensagem-de-erro"] = $err_nome2;
        return false;
    }
return true;
}

function validaIdade(string $idade): bool
{
    $msg_idade = '<script>alert("A idade não pode estar vazia");</script>';
    $err_idade3 = '<script>alert("A idade deve ser um numero");</script>';
    $err_idade2 = '<script>alert("A idade deve ser entre 0 e 120 anos");</script>';
    if(empty($idade)){
        $_SESSION["mensagem-de-erro"] = $msg_idade;
        return false;
    }elseif($idade>120){
        $_SESSION["mensagem-de-erro"] = $err_idade2;
        return false;
    
    }elseif(!is_numeric($idade)){
        $_SESSION["mensagem-de-erro"] = $err_idade3;
        return false;
    
    }
return true ;
}
