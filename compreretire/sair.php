<?php
/**
 * Created by PhpStorm.
 * User: almartos
 * Date: 08/11/2018
 * Time: 11:06
 */
include_once('../util/config.php');
    session_destroy();
    header('Location: '.PATH.'index.php');
?>