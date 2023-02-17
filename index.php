<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téléphone</title>
</head>
<body>
    <?php include "include/TradTel.php";?>
    <h1>Traduction : Texte -> Téléphone</h1>
    <form action="" method="post" id="formulaire">
        <label>Ce que vous voulez traduire</label>
        <input type="text" id="entree" name="entree" placeholder="Texte à traduire" required>

        <input type="submit" value="send">
    </form>
    <p>Résultat : <b><?php $resultatTrad = new TradTel($_POST['entree']);
    echo $resultatTrad->traduction(); ?></b></p>
</body>
</html>