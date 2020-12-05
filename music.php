<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'php/stylesheet.php'?>
    <title>Music</title>
</head>
<body>
<?php include 'php/header.php'?>
        <?php include 'php/navigation_bar.php'?>
    
    <main>
        <div class="top_spacer"></div>
        <aside>
            <ul>
                <li><a href="#">test</a></li>
                <li>2</li>
                <li>3</li>
            </ul>
        </aside>
<!-- Template for audio from GDrive
        song_name - song_artist (opt)[PIANO/etc]
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=" type="audio/mp3">
            </audio><span class="name"></span>
        </div>
         -->
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=1Ua_PZaP5MluDkPHy7As8GZs3Xy_04ikL" type="audio/mp3">
            </audio><span class="name">Judgelight - fripSide [PIANO]</span>
        </div>
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=1TUHm_7lzrx_7ZKJqsfSNGTNIDb4G1r4S" type="audio/mp3">
            </audio><span class="name">Takarajima - Akihito Matsuda</span>
        </div>
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=1BTLxwkyjDJmMRoggm50DXrhyXVqyCXOW" type="audio/mp3">
            </audio><span class="name">YAMABIKO - NakamuraEmi</span>
        </div>
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=1Bt87Y6bEt0CG9Cp9ZzWh2ghv1E-piTAf" type="audio/mp3">
            </audio><span class="name">Nevereverland - ナノ</span>
        </div>
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=1FrzDqelo-mbT-LBN-Jswuvlhq7I9S3nU" type="audio/mp3">
            </audio><span class="name">Don't - NakamuraEmi</span>
        </div>
        <div class="song">
            <audio controls preload="none">
                <source src="http://docs.google.com/uc?export=open&id=" type="audio/mp3">
            </audio><span class="name"></span>
        </div>
    </main>
    <br>
    <?php include 'php/footer.php'?>
</body>
</html>
