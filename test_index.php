<?php 
    session_start();
    define('INDEX', '');
    
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php");

    $db = new MyDB();
    $db->connect();

    switch ($_GET[option]) {
        case 'page':
            include($_SERVER['DOCUMENT_ROOT']."/com/page.php");
            break;
        
        default:
            include($_SERVER['DOCUMENT_ROOT']."/com/home.php");
            break;
    }

    include($_SERVER['DOCUMENT_ROOT']."/template.php");
    $db->close();
    ?>