<html>
<head>
    <title> Overlay Signup form</title>
    <link rel="stylesheet" href="Overlaystyles.css"
</head>


<div id="myOverlay" class="overlay">
    <div class = "wrap">
        <span class="closebtn" onclick="closeForm()" title ="Close Overlay"> &#215 </span>
        <h2> inloggen</h2>
        <form>
            <p class="p">Vul je gegevens in om in te loggen op je Nerdygedgets-account.</p>
            </p>
            <label class="label">E-mailadres</label>
            <input type="email" name="mail" placeholder="E-mailadres" class="one">
            <label class="label">Wachtwoord</label>
            <input type="password" placeholder="Wachtwoord" class="one">
            <input type="submit" value="Inloggen" class="one"><br><br>
            <a href="#" class="vergeten">Wachtwoord vergeten?</a>
            <hr class="lijn">
            <h2>Heb je nog geen Nerdygadgets-account?</h2>
            <input type="button" onclick="window.location.href='registreer.php'" value="Registreer dan nu" class="regi">
        </form>
    </div>
</div>
<button class="openbtn" onclick="openForm()">ClickHere to sign up</button>
<script>
    function openForm(){
        document.getElementById("myOverlay").style.display="block";
    }
    function closeForm(){
        document.getElementById("myOverlay").style.display="none";
    }
</script>
</body>
</html>

