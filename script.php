<?php
include ("index.php");
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";
$categorias[] = "Idoso";

$msg_nome = "O nome não pode estar vazio";
$msg_idade = "A idade não pode estar vazia";
$err_nome = "O nome é muito pequeno";
$err_nome2 = "O nome é muito Grande";
$err_idade = "A idade deve ser entre 0 e 120 anos ";
$err_idade2 = "Tu já Morreu Brother";
$nome = $_POST["nome"];
$idade = $_POST['idade'];
$i = 0;

//Validação de dados
if(empty($nome)){
    echo '<script>alert("'.$msg_nome.'");</script>';
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
}

//processamento de dados
if($idade>=6 && $idade<=12){

    for($i = 0; $i <= count($categorias) ; $i++){

        if($categorias[$i] == "infantil")
        {
            print 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
        }
            
        
    }
}else if($idade >= 13 && $idade <=18){

    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == "Adolescente")
        {
            echo 'O nadador, '. $nome.', compete na categora '.$categorias[$i];
        }
        
    
}
}else if($idade >=19 && $idade <= 59){

    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == "Adolescente"){
            echo 'O nadador '. $nome. ', compete na categora '.$categorias[$i];
    }
        
    
}
}else{
    echo "O nadador, $nome, compete na categoria Idoso";
}


?>