<?php

$nome = $_GET['Natale'];

// creo un paragrafo
$frase = "Ma qualcosa era destinato a cambiarlo per sempre: l’incontro ravvicinato nella notte di Natale con tre strane figure, che rappresentavano i tre spiriti del Natale. Lo spirito del Natale passato, quello del Natale presente e quello del futuro, tutti insieme per sconvolgere le convinzioni del triste e burbero imprenditore, nell’affascinante scenario della Londra nel 1800. Questo romanzo di genere fantastico per ragazzi dedicato al Natale è di grande importanza ed è, senza dubbio, uno dei libri da leggere a bambini e ragazzi nel periodo di Natale, per due motivi: oltre ad essere uno splendido esempio di scrittura della narrativa per ragazzi, la storia in sé nasconde una feroce critica sociale al sistema capitalista dell’Inghilterra nell’Ottocento. Questa favola di Natale racconta e illustra, attraverso avventure e aneddoti, tematiche sociali e umane di rara profondità. Esistono tantissime versioni della storia del “Canto di Natale” riadattata, perfette per bambini di ogni età.";

// salvo in una varibile la lunghezza originale del paragrafo
$frase_originale = strlen($frase);

// sostituisco una parola del paragrafo con degli asterischi
$frase_replace = str_replace('Natale', '***', $frase);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-badwords</title>
    </head>
    <body>
        <h1>
            Buon <?php echo $nome ?>
        </h1>
        <p>
            <?php var_dump($frase_originale); ?>
        </p>
        <p>
            <?php echo $frase_replace ?>
        </p>

    </body>
</html>
