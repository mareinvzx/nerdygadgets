<?php
include __DIR__ . "/header.php";

if(isset($_POST["email"]) && isset($_POST["password"])) {
    if($_POST["email"]!="" && $_POST["password"]!="") {
        // Check de database of deze logingegevens overeenkomen
    } else {
        // Bericht de gebruiker dat email en/of wachtwoord niet overeenkomen
    }
    
} else {
    // Bericht de gebruiker dat email en/of wachtwoord niet zijn ingevuld
}
?>


    <div class="loginFrame">
        <div class="loginArea">
            <form action="" method="POST">
                <input type="text" name="firstname" placeholder="Naam (bijv. Jan)">
                <input type="text" name="lastname" placeholder="Achternaam (bijv. Ree)">
                <input type="email" name="email" placeholder="naam@voorbeeld.com" required>
                <input type="password" name="password" placeholder="Wachtwoord" required>
                <input type="password" name="matchingpassword" placeholder="Bevestig wachtwoord" required>
                <input type="submit" value="Registreer"><br><br>
                <a href="login.php"> Hebt u al een account? Log dan nu in</a>
            </form>
        </div>
    </div>
</body>