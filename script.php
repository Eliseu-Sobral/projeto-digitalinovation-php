<?php
include ("index.php");
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";
$categorias[] = "Idoso";


$nome = $_POST["nome"];
$idade = $_POST['idade'];
$i = 0;
if($idade >= 6 && $idade <= 12){

    for($i = 0; $i <= count($categorias) ; $i++){

        if($categorias [$i] == "infantil") {
            print 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
        }
            
        
    }
}else if($idade >= 13 && $idade <=18){

    for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == "Adolescente"){
        echo 'O nadador, '. $nome.', compete na categora '.$categorias[$i];
    }
        
    
}
}else if($idade >=19 && $idade <= 59){

    for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == "Adolescente"){
        echo 'O nadador '. $nome. ', compete na categora '.$categorias[$i];
    }
        
    
}
}else{
    echo "O nadador, $nome, compete na categoria Idoso";
}


?>