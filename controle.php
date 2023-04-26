<?php 
echo var_dump($_POST);

$usuario = $_POST['usuario'];
$frase;
if($usuario == '1'){
    $frase = 'já ja pode sair 2210...';
}
 else if($usuario == '2'){
    $frase = 'aaaaaaaaaaaaa...';
}
else {
    $frase = 'bbbbbb...';
}

header("location:  ./vizualizar.php?frase=$frase");

?>