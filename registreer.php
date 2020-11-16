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

<head>
    <title> Overlay Signup form</title>
    <link rel="stylesheet" href="Register.css"
</head>
<body>
         <div class="rgd">
             <h2 class="titleregister">Ik ben nieuw hier</h2>
            <form action="" method="POST">
                <label class="label2">Voornaam*</label>
                <input type="text" name="firstname" placeholder="Voornaam">
                <label class="label2">Achternaam*</label>
                <input type="text" name="lastname" placeholder="Achternaam">
                <label class="label2">E-mailadres*</label>
                <input type="email" name="email" placeholder="E-mailadres" required>
                <label class="label2">Wachtwoord*</label>
                <input type="password" name="password" placeholder="Wachtwoord" required>
                <label class="label2">Herhaling Wachtwoord*</label>
                <input type="password" name="matchingpassword" placeholder="Bevestig-wachtwoord" required>
                <input type="submit" value="Registreren" class="regiregi"><br><br>
                <div class="emails">
                    <input type="checkbox" name="emails" value="emailakoord">
                    Ja, hou me per e-mail op de hoogte van de laatste trends en speciale aanbiedingen. (niet verplicht)
                </div>
            </form>
        </div>
</body>