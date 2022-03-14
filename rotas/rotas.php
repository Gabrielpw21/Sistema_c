<?php 
    $pg = "";
    if(isset($_GET['pg']) && !empty($_GET['pg'])){
        $pg = addslashes($_GET['pg']);
    }

    switch ($pg) {
        case 'Cardápio': require 'cardapio.php';break;        
        case 'Contato': require 'contato.php';break;
        case 'Entrar': require 'login.php';break;
        
        default: require 'home.php';
    }
?>   