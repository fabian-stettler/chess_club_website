<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="author" content="Fabian Stettler">
        <meta name="description" content="This web page is a testing web page for my HSLU TIP project. With it I wan to learn HTML and CSS [Vereinsgeschichte]">
        <title>
            Kontakte
        </title>
        <link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
    <header>
            <h1 class="mainTitle">Der fliegende Läufer</h1>
        <nav>
            <ul class="headerNav">
            <li>
                <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="vereinsgeschichte.php">Vereinsgeschichte</a>
                </li>
                <li>
                    <a href="aktuelles.php">Aktuelles</a> <!--this is an internal link of a page-->
                </li>
                <li>
                    <a href="kontakte.php">Kontakte <img src="image/bishop.png" alt="navIcon" title ="bishop" width="60" height="60"></a> <!--this is an internal link of a page-->
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
                <h2>Kontakte</h2>
        </article>

        <article class="boxInformations">
        <figure>
                <img src="image/WickiMartin.jpg" alt="Persönlichkeiten1" width="450" height="300" title="president" loading="lazy">
                <!--loading atttribute lazy does mean that the browser does not load the image if it is not seen by the user -->
                <figcaption>
                    Präsident: Wicki Martin
                </figcaption>
        </figure>
        <figure>
                <img src="image/markusMueller.jpg" alt="Persönlichkeiten2" width="250" height="300" title="VicePresident" loading="lazy">
                <!--loading atttribute lazy does mean that the browser does not load the image if it is not seen by the user -->
                <figcaption>
                    Vizepräsident: Markus Müller
                </figcaption>
        </figure>
        <figure>
                <img src="image/MarylinMonroe.jpg" alt="Persönlichkeiten3" width="250" height="300" title="juniorLeader" loading="lazy">
                <!--loading atttribute lazy does mean that the browser does not load the image if it is not seen by the user -->
                <figcaption>
                    Leiterin Junioren: Marylin Monroe
                </figcaption>
        </figure>
        </article>

        
        </main>
        
</body>
</html>