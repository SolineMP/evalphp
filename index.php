<?php
// Load the header
require('templates/header.php');

// check that the session is open
if (isset($_SESSION["name"])) {
// check if the flower's boxe has been checked
    if (!empty($_GET["flower"])) {
    ?>
        <div>
            <img src="img/flower.jpg" alt="des fleurs" height="20%" width="20%">
        </div>
    <?php
    } else {

    }
    // check if the loveMessage's has been checked
    if (!empty($_GET["loveMessage"])) {
        ?>
        <div>
            <p>Le Php c'est bien! </p>
        </div>
        <?php
    } else {

    }
    // check if the burger's boxe has been checked
    if (!empty($_GET["burger"])) {
        ?>
        <div>
            <img src="img/tacos.jpeg" height="20%" width="20%" alt="un tacos gratiné">
        </div>
        <?php
    } else {

    }
// request the opening of the session    
} else {
    ?>
        <main>
            <form action="data.php" method="POST">
                <div class="homeForm">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Votre nom">
                </div>
                <div class="homeForm">
                    <label for="password">Le mot de passe</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="homeForm">
                    <input type="submit">
                </div>
            </form>
        </main>
    <?php
}


// Load the fotter
require('templates/footer.php');



