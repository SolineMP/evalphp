<?php
// Load the header
require('templates/header.php');
 
// create a username and password

// check that the variable exists
if (isset($_POST) && !empty($_POST)) {

    // check that the variables are the right ones
    if (isset($_POST['name']) == "admin" && $_POST['password'] == "0000") {
        ?>
        <div>     
            <form action="index.php" method="GET">
                <input type="checkbox" name="flower" value="flower"> Pour des fleurs
                <input type="checkbox" name="loveMessage" value="message"> Pour un beau message
                <input type="checkbox" name="burger" value="burger">Pour un tacos gratiné
                <input type="submit">
            </form>
        </div>
        <?php
    $_SESSION["name"] = $_POST["name"];    
    } else {
        // return to the home page 
        header('location:index.php');
    }
} else {
    header('location:index.php');
}


// Load the fotter
require('templates/footer.php');