<?php
    if((basename($_SERVER['PHP_SELF'], '.php') == 'notes') 
    or (basename($_SERVER['PHP_SELF'], '.php') == 'mac-table')
    or (basename($_SERVER['PHP_SELF'], '.php') == 'neighbourhoods-in-home')){
        echo '<header><h3><div class="header_link"><a href="../index.php">To the Main page</a></div></h3></header>';
    }else{
        echo '<header><h3><div class="header_link"><a href="index.php">To the Main page</a></div></h3></header>';
    }
?>