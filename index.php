<?php
 $badword = $_GET['censura'];
$song = "Se mi guardo nello specchio
Con il tempo che è passato
Sono solo un po' più ricco
Più cattivo e più invecchiato
È l'amara confessione
Di un cantante di successo
Forse è l'ultima occasione
Che ho di essere me stesso
Quando ho smesso di studiare
Per campare d'illusioni
Sono stato il dispiacere
Di parenti e genitori
Ero uno di quei figli
Sognatori adolescenti
Che non vogliono consigli
E rispondono fra i denti
Vaffanculo
Vaffanculo
Ma la musica è cattiva
È una fossa di serpenti
E per uno che ci arriva
Quanti sono i fallimenti
Mi diceva quella gente
Che s'intende di canzoni
Hai la faccia da perdente
Mi dispiace, non funzioni Masini
Vaffanculo
Vaffanculo
Non importa se ho pianto e sofferto
Questa vita fa tutto da sé
E nella musica ho solo scoperto
Il bisogno d'amore che c'è
Chi lo sa che cosa è vero
In un mondo di bugiardi
Non si può cantare il nero
Della rabbia coi miliardi
Siamo tutti conformisti
Travestiti da ribelli
Siamo lupi da interviste
E i ragazzi sono agnelli
Che ti scrivono il dolore
Nelle lettere innocenti
E la loro religione
È di credere ai cantanti
Ma li trovi una mattina
Con la foto sul giornale
In quell'ultima vetrina
Con la voglia di gridare al mondo
Vaffanculo
Vaffanculo
Mi dimetto da falso poeta
Da profeta di questo fan club
Io non voglio insegnarvi la vita
Perché ognuno la impara da sé
Me ne andrò nel rumore dei fischi
Sarò io a liberarvi di me
Di quel pazzo che grida nei dischi
Il bisogno d'amore che c'è
Ora basta, io sto male
Non è giusto, vaffanculo
Nello specchio questa sera
Ho scoperto un altro volto
La mia anima è più vera
Della maschera che porto
Finalmente te lo dico
Con la mia disperazione
Caro mio peggior nemico
Travestito da santone
Vaffanculo
Vaffanculo";
$song2 = str_replace($badword, "xxx", $song);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad_Words</title>
</head>
<body>
    <h1>Vaff*** di Marco Masini</h1>
    <p><?php echo $song; ?></p>
    <p><?php echo $song2; ?></p>
    <h3>Lunghezza del testo: <?php echo strlen($song)?></h3>
</body>
</html>