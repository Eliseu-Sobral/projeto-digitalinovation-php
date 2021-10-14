<?php


session_start();
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";
$categorias[] = "Idoso";






$err_idade4 = '<script>alert("Já viu idade com letras, ooo cegonha kkkkkkk");</script>';


$nome = $_POST["nome"];
$idade = $_POST['idade'];
$i = 0;



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