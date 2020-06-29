<!DOCTYPE html>
<html>
    <head>
        <title>ISCC - Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/vitrine.css">
    </head>
    <body>
        <?php include('header.php') ?>
        <main class="contact">
            <h2>Contact</h2>
            <form method="GET">
                <input type="text" class="text" name="name" placeholder="Votre nom" required>
                <input type="text" class="text" name="email" placeholder="Votre email" required>
                <textarea type="text" name="suggestion" placeholder="Comment améliorer mon site ?" required></textarea><br>
                <input class="button" type="submit" value="Envoyer">
            </form>
        </main>
        <?php include('footer.php') ?>
    </body>
</html>