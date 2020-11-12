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
            <input type="email" name="email" placeholder="naam@voorbeeld.com" required>
            <input type="password" name="password" placeholder="Wachtwoord" required>
            <input type="submit" value="Inloggen"><br><br>

                <a id="regist" href="registreer.php"> Hebt u nog geen account? Registreer dan nu</a>
            </form>
        </div>

    </div>
</body>