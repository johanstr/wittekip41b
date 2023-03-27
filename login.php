<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen | Webshop Het Gewitte Kippetje</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <section class="nav-branding">
            <img src="img/logo4.png" alt="Webshop" />
            <h1>Witte Kip</h1>
        </section>
        <section class="nav-items">
            <a href="login.php">Inloggen</a><br />
            <a href="register.php">Registeren</a>
        </section>
    </nav>

    <main>
        <form action="src/formhandlers/login.php" method="POST">
            <h1>Inloggen</h1>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
            </div>
            <div>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" id="wachtwoord" name="password" />
            </div>
            <button type="submit">Inloggen</button>
        </form>
    </main>
</body>
</html>