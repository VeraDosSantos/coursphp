<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav class="navbar navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">
                <img src="/public/img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                Les bases en PHP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-light" href="/">Accueil</a>
                </div>
            </div>
        </div>
    </nav>
    <h1>Ici ma page base!</h1>
    <?php
        echo '<h2>Les balises</h2>';
        echo '<p class="fst-italic text-secondary">Ici je suis dans les balises PHP.</p>';
    ?>
    <p>
		Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
		En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
	</p>
    <?php
        echo '<p>echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.</p>';
    ?>
    <h3>Différents affichage</h3>
    <?php
        echo '<p>Ici c\'est un echo</p>';
        print '<p>Ici c\'est un print</p>';
    ?>
    <p>echo accepte plusieurs arguments et ne retourne aucune valeur.</p>
    <?php
        echo '<p>valeur 1</p>', '<p>valeur 2</p>';
        print '<p>La différence majeure avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.</p>'
    ?>
    <h3>D'autres affichages</h3>
    <ul>
        <li>print_r, affiche des informations à propos d'une variable, de manière à ce qu'elle soit lisible.</li>
        <li>var_dump, affiche les informations structurées d'une variable, y compris son type et sa valeur.</li>
    </ul>
</body>
</html>