<?php
include("read.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
        
        <!-- Here we find metadata about the page-->
        <meta charset="UTF-8">
        <meta name="author" content="Fabian Stettler">
        <meta name="description" content="This web page is a testing web page for my HSLU TIP project. With it I wan to learn HTML and CSS [Vereinsgeschichte]">
        <title>
            Gaestebuch
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
                    <a href="vereinsgeschichte.php">Vereinsgeschichte</a>
                </li>
                <li>
                    <a href="aktuelles.php">Aktuelles</a> <!--this is an internal link of a page-->
                </li>
                <li>
                    <a href="kontakte.php">Kontakte</a> <!--this is an internal link of a page-->
                </li>
                <li>
                    <a href="Gaestebuch.php">Gästebuch <img src="image/bishop.png" alt="navIcon" title ="bishop" width="60" height="60"></a>
                </li>
            </ul>
        </nav>  
        <hr> <!--entspricht einer Trennlinie horizontal ruler-->
    </header>

    <main>
        <article class="boxTitle">
            <h2>Gästebuch</h2>
        </article>

    <article class="boxInformations">
    <article id="contact">
                <h3>Wir würden uns freuen über einen Eintrag in unserem Gästebuch.</h3>
                <form action="write.php" method="post">
                    <fieldset>
                        <legend>Deine Kontaktdaten</legend>
                <p>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Markus Müller" autocomplete="on" required> 
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="markus.müller@gmail.com" autocomplete="on" required> 
                </p>
                
                <label for="text">Deine Nachricht</label>
                <br>
                <textarea type="text" name="text" id="text" cols="70" rows="10" placeholder="Deine Nachricht" required></textarea>

                </fieldset>

            
            <br>

            <button type="submit">Submit</button>
            <!-- <button type="submit" formaction="https://httpbin.org/post" formmethod="post">Post</button> -->
            <!-- <button type="reset">Reset</button> -->
                </form>
                <hr>
            </article>
                <br>
            <h3 class="titleGaestebuch">Was haben die Leute bisher geschrieben?</h3>
            <p>
                <?php 
                $line=1;
                foreach($fetchData as $data){
                ?>
                
                <tr>
                    <td> <?php echo $line ?></td>
                    <td class="gaestebuchName"><?php echo $data['name']; ?></td>
                    <br>
                    <td> <?php echo $data['comment']; ?></td>
                    <td> <?php echo $data['date']; ?></td>
                    <br>
                </tr>
                <br>
                <?php $line = $line + 1; ?>
            

        <?php
        }
        ?>
    </article>

    


    </main>
    
</body>
</html>