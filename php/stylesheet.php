<?php
    if((basename($_SERVER['PHP_SELF'], '.php') == 'notes') 
    or (basename($_SERVER['PHP_SELF'], '.php') == 'mac-table')
    or (basename($_SERVER['PHP_SELF'], '.php') == 'neighbourhoods-in-home')){
        echo'<link rel="stylesheet" href="../style/style.css">';
    }else{
        echo'<link rel="stylesheet" href="style/style.css">';
    }
?>