<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Here we find metadata about the page-->
        <meta charset="UTF-8">
        <meta name="author" content="Fabian Stettler">
        <meta name="description" content="This web page is a testing web page for my HSLU TIP project. With it I wan to learn HTML and CSS">
        <title>
            Home
        </title>
        <link rel="stylesheet" href="main.css" type="text/css"> <!--the type of reference for main.css is a relative reference, because we have the file on our own server-->
        <link rel="icon" href="logo.png" type="image/x-icon">        
    </head>

    <body>
        <header>
            <h1 class="mainTitle">Der fliegende Läufer</h1>
        <nav>
            <ul class="headerNav">
            <li>
                <a href="home.php">Home <img src="image/bishop.png" alt="navIcon" title ="bishop" width="60" height="60"></a>
                </li>
                <li>
                    <a href="vereinsgeschichte.php">Vereinsgeschichte</a>
                </li>
                <li>
                    <a href="aktuelles.php">Aktuelles</a> <!--this is an internal link of a page-->
                </li>
                <li>
                    <a href="kontakte.php">Kontakte</a> <!--this is an internal link of a page-->
                </li>
                <li>
                    <a href="Gaestebuch.php">Gästebuch</a>
                </li>
            </ul>
        </nav>
        <hr> <!--entspricht einer Trennlinie horizontal ruler-->
        </header>

        
        <main>
            
            <article class="boxTitle">
                <h2>Home</h2>
            </article>
            

            <article class="boxInformations">
            <h3>Willkommen auf der Website des Schachclubs des fliegenden Läufers. 
            
            </h3>

            <p>Auf dieser Seite findest du unter anderem Informationen zu unserer Vereinsgeschichte, dem aktuellen Geschehen, wichtige Kontakte um mit uns in Kontakt zu treten und ein Gästebuch. In diesem Gästebuch kannst du uns auch eine Nachricht hinterlassen.</p>

            <p>
                Du kannst über die Navigationsleiste zu den verschiedenen Punkten navigieren.
                <br>
            </p>
            <hr>
            <p>Du hast noch nie Schach gespielt und möchtest dich ausprobieren? 
                <br>
                <br>
            Du kannst dich online gegen andere Spieler ausprobieren: <a href="https://lichess.org/" class="normalLink">Hier</a>
            <br>
            <br>
            </p>

            <p>
                Coole Tutorials findest du auch auf <a href="https://www.youtube.com/@GothamChess" class="normalLink">YouTube</a>
            </p>
            <hr>
            <br>
            <h3>Spiele gegen den Computer</h3>
            <iframe src="https://www.365chess.com/play_computer_online.php" height="500" width="500" frameborder="0" name="chess.com"> </iframe>

        </article>

        </main>

        

        <footer>

        </footer>

        
    </body>

</html>
