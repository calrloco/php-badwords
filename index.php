<?php
/// parola presa in get in lowercase dall'input con name badword
$bword = strtoLower($_GET['badword']);
// sotituto parola
$substitute = '***';
// parole non ammesse
$parolacce = array('bastardo', 'maledetto', 'cretino', 'stronzo', 'cazzo', 'stronzata', 'vaffanculo', 'fanculo');
//elenco delle parole non ammesse con virgola e br
$elencoParoleVietate = implode(',<br>', $parolacce);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    <title>Prole Non Ammesse</title>
    <style>
        /*due *** di stile */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 20px;
            font-family: 'Happy Monkey', cursive;
        }

        div {
            width: 20%;
            height: 50%;
            background-color: tomato;
            margin: 100px auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <p>
            <!-- php mode -->
            <?php
            // controllo se submit e cliccato o meno//
            if (isset($_GET['submit'])) {
                /* echo la parola e la sostutisco se contiene un valore 
                contenuto in arr parolacce */
                $bwordChanged = str_replace($parolacce, $substitute, $bword, $count);
                echo $bwordChanged;
                // echo num parole non amesse se ce ne sono
                if ($count > 0) {
                    echo ' parole non ammesse: ' . $count;
                }
            } ?>
        </p>
        <form action="" name="bad-word" method="GET">
            <input type="text" name="badword">
            <input type="submit" name="submit" value="submit">
        </form>
        <p>Parole non ammesse:<br>
            <!-- php mode -->
            <?php
            //stampo parole non ammesse
            print_r($elencoParoleVietate);
            ?>.
        </p>
    </div>
</body>

</html>