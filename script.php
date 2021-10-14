<?php


session_start();
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";
$categorias[] = "Idoso";



$msg_nome = '<script>alert("O nome não pode estar vazio");</script>';
$msg_idade = '<script>alert("A idade não pode estar vazia");</script>';
$err_nome = '<script>alert("O nome é muito pequeno");</script>';
$err_nome2 = '<script>alert("O nome é muito grande");</script>';
$err_idade3 = '<script>alert("A idade deve ser um numero");</script>';
$err_idade4 = '<script>alert("Já viu idade com letras, ooo cegonha kkkkkkk");</script>';
$err_idade = '<script>alert("A idade deve ser entre 0 e 120 anos");</script>';
$err_idade2 = '<script>alert("Tu já morreu brother");</script>';
$nome = $_POST["nome"];
$idade = $_POST['idade'];
$i = 0;

//Validação de dados
if(empty($nome)){
    $_SESSION["mensagem-de-erro"] = $msg_nome;
    header("location:index.php");
    return;
}elseif(empty($idade)){
    $_SESSION["mensagem-de-erro"] = $msg_idade;
    header("location:index.php");
    return;
}

if(strlen($nome)<3){
    $_SESSION["mensagem-de-erro"] = $err_nome;
    header("location:index.php");
    return;
}elseif($idade>120){
    $_SESSION["mensagem-de-erro"] = $err_idade2;
    header("location:index.php");
    return;

}elseif(strlen($nome)>40){
    $_SESSION["mensagem-de-erro"] = $err_nome2;
    header("location:index.php");
    return;
}elseif(!is_numeric($idade)){
    $_SESSION["mensagem-de-erro"] = $err_idade3;
    header("location:index.php");
    return;

}

//processamento de dados
if($idade<=12){

    
    for($i = 0; $i < sizeof($categorias) ; $i++){

        if($categorias[$i] == "infantil")
        {
            $_SESSION["mensagem-de-sucesso"] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
            header("location:index.php");
            return;
            
        }else{

        }
            
        
    }
}else if($idade <=18){

    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == "Adolescente")
        {
            $_SESSION["mensagem-de-sucesso"] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
            header("location:index.php");
            return;
             
        }
        
    
}
}else if($idade <= 59){

    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == "Adulto")
        {
            $_SESSION["mensagem-de-sucesso"] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
            header("location:index.php");
            return;
    }
        
    
}
}else{
    $_SESSION["mensagem-de-sucesso"] = 'O nadador '.$nome. ' compete na categoria Idoso' ;
            header("location:index.php");
            return;
}


?>