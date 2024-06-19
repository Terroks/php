<?php

if(isset($_POST["enviar"])){

    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $area2 = $_POST['area2'];
    $idade = $_POST['idade'];

    echo $nome . " " . $estado . " " . $area2 . " " . $idade;


}else{
echo "Não foi possivel enviar para o formulário";

}


?>