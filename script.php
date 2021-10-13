<?php
include ("index.php");

session_start();
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";
$categorias[] = "Idoso";



$msg_nome = "O nome não pode estar vazio";
$msg_idade = "A idade não pode estar vazia";
$err_nome = "O nome é muito pequeno";
$err_nome2 = "O nome é muito Grande";
$err_idade3 = "A idade deve ser um Numero";
$err_idade4 = "Já viu idade com letras o cegonha kkkkkk";
$err_idade = "A idade deve ser entre 0 e 120 anos ";
$err_idade2 = "Tu já Morreu Brother";
$nome = $_POST["nome"];
$idade = $_POST['idade'];
$i = 0;

//Validação de dados
if(empty($nome)){
    $_SESSION["mensagem-de-erro"] = "o nome não pode estar vazio";
    return;
}elseif(empty($idade)){
    echo '<script>alert("'.$msg_idade.'");</script>';
    return;
}

if(strlen($nome)<3){
    echo '<script>alert("'.$err_nome.'");</script>';
    return;
}elseif($idade>120){
    echo '<script>alert("'.$err_idade.'");</script>';
    echo '<script>alert("'.$err_idade2.'");</script>';
    return;

}elseif(strlen($nome)>40){
    echo '<script>alert("'.$err_nome2.'");</script>';
    return;
}elseif(!is_numeric($idade)){
    echo '<script>alert("'.$err_idade3.'");</script>';
    echo '<script>alert("'.$err_idade4.'");</script>';
    return;

}

//processamento de dados
if($idade<=12){

    
    for($i = 0; $i < sizeof($categorias) ; $i++){

        if($categorias[$i] == "infantil")
        {
            echo 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
        }else{

        }
            
        
    }
}else if($idade <=18){

    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == "Adolescente")
        {
            echo 'O nadador, '. $nome.', compete na categora '.$categorias[$i];
        }
        
    
}
}else if($idade <= 59){

    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == "Adulto"){
            echo 'O nadador '. $nome. ', compete na categora '.$categorias[$i];
    }
        
    
}
}else{
    echo "O nadador, $nome, compete na categoria Idoso";
}


?>