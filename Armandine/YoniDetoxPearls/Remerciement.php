<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Remerciement pour votre achat</title>
</head>
<body>
    <div class="container">
        <h1>Merci d'avoir passé commande !</h1>
        <p>Nos livreurs sont opérationnels de 7h30 à 19h.</p>
        <?php
            $quantite = $_GET['quantite'];
            $produits_achetes = $_GET['produits_achetes'];
            echo "<p>Ils vous contacteront bientôt pour apporter vos $quantite $produits_achetes.</p>";
        ?>
    </div>
</body>
</html>
