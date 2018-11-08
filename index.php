<?php
include_once('util/config.php');

?>
    <link href="chat.css?1" rel="stylesheet" type="text/css"/>

<?php

if (@$_SESSION['sala']) {
    if ($_SESSION['nome'] == 'Cliente') {
        //include_once('compreretire/index.php');
        header('Location: compreretire/index.php');
    } else {
        include_once('view/formChat.php');
        //header('Location: '.PATH.'view/formChat.php');
    }
} else {
    include_once('view/formLogin.php');
    //header('Location: '.PATH.'view/formLogin.php');    
}

?>
