<?php
    if((basename($_SERVER['PHP_SELF'], '.php') == 'notes') 
    or (basename($_SERVER['PHP_SELF'], '.php') == 'mac-table')
    or (basename($_SERVER['PHP_SELF'], '.php') == 'neighbourhoods-in-home')){
    echo'<br>
    <nav>
        <div class="nav"><a href="#">Jap learn</a>
        <a href="../music.php">Music</a>
        <a href="#">Gallery</a>
        <a href="../projects.php">Projects</a>
        <a href="#">Want\'s things</a>
        <a href="#">Little wishes</a>
        <a href="notes.php">Notes</a>
    </nav>
    <br>';
    }else{
    echo'<br>
    <nav>
        <div class="nav"><a href="#">Jap learn</a>
        <a href="music.php">Music</a>
        <a href="#">Gallery</a>
        <a href="projects.php">Projects</a>
        <a href="#">Want\'s things</a>
        <a href="#">Little wishes</a>
        <a href="/notes/notes.php">Notes</a>
    </nav>
    <br>';
    }
?>
<!--        <span class="tech"><a href="stat.html">Stats</a></span></div> -->