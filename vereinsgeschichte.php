<!DOCTYPE html>
<html lang="en">
<head>
        
        <!-- Here we find metadata about the page-->
        <meta charset="UTF-8">
        <meta name="author" content="Fabian Stettler">
        <meta name="description" content="This web page is a testing web page for my HSLU TIP project. With it I wan to learn HTML and CSS [Vereinsgeschichte]">
        <title>
            Vereinsgeschichte
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
                <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="vereinsgeschichte.php">Vereinsgeschichte <img src="image/bishop.png" alt="navIcon" title ="bishop" width="60" height="60"></a>
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
                <h2>Vereinsgeschichte</h2>
    </article>
<article class="boxInformations">
                <h3 class="historyYear">1999:</h3>
                <p class=historyText>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium nisi a recusandae itaque commodi, aliquid sunt voluptatum. Architecto temporibus quisquam, ex sit molestias ad mollitia, quibusdam fugit doloremque, distinctio placeat?</p>
                <h3 class="historyYear">2002:</h3>
                <p class=historyText>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque et minus possimus minima quasi reprehenderit, unde vel aliquam veniam sapiente voluptatem fuga ratione quos, dignissimos eum ducimus, excepturi dolores consequatur.</p>
                <h3 class="historyYear">2010:</h3>
                <p class=historyText>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi accusantium nam quia inventore laudantium officiis aliquam cum corrupti voluptates! Reprehenderit quaerat exercitationem possimus adipisci quam eaque obcaecati neque aperiam asperiores.</p>
                <h3 class="historyYear">2020:</h3>
                <p class=historyText>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi assumenda sapiente consectetur fugit debitis, veritatis sequi quidem temporibus labore exercitationem delectus! Quam, doloribus facere! Quasi non ut repudiandae illum tempore?</p>
                <h3 class="historyYear">2022:</h3>
                <p class=historyText>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quam voluptas odio repudiandae assumenda reprehenderit voluptatem optio, laboriosam mollitia delectus molestias, tempora ducimus. Aliquam, reiciendis ut deleniti exercitationem architecto mollitia!</p>
                <hr>
                <img src="image/chessHistory.jpeg" alt=">historyChess" title="pictureHistory" width="450" height="300">
            </article>

            
    </main>

</body>
</html>