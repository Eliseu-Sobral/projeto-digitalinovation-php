<?php
$categorias = [];
$categorias [] = "infantil";
$categorias [] = "Adolescente";
$categorias [] = "Adulto";
$categorias [] = "Idoso";


$nome = "Eduardo";
$idade = 13;

if($idade >= 6 && $idade <= 12){

    for($i = 0; $i <= count($categorias); $i++){

        if($categorias[$i] == "infantil"){
            echo "O nadador, $nome, compete na categora infantil";
        }
            
        
    }
}else if($idade >= 13 && $idade <=18){

    for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == "Adolescente"){
        echo "O nadador, $nome, compete na categora Adolescente";
    }
        
    
}
}else if($idade >=19 && $idade <= 59){

    for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == "Adolescente"){
        echo "O nadador, $nome, compete na categora Adulto";
    }
        
    
}
}else{
    echo "O nadador, $nome, compete na categoria Idoso";
}


?>

