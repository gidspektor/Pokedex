<?php

session_start();

if($_SESSION['login'] !== 1){
    header('Location: ../../index.php');
}

require_once '../../vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1; dbname=pokedex', 'root');

$pokedex = new \Pokedex\classes\Pokedex($db);

?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <title>
        PokeBees- Pokedex
    </title>
</head>
<body>
<h2>PokeBees Pokedex</h2>
    <div class="container">
        <?php echo $pokedex->displayPokemon() ?>
    </div>
</body>
</html>