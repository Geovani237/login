<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123 && $usuario == 'Geovani') {
    echo "dados corretos";
}else{
    echo "dados incorretos";
}
?>
