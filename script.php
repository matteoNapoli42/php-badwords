<?php
$userInput = $_GET['insertedSentence'];
$censuredWord = $_GET['censoredWord'];
$applyCensorship = str_replace($censuredWord, ' *** ', $userInput);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS BAN</title>
</head>

<body>
    <div>
        <h3>Frase Inserita :</h3>
        <p>
            <?php echo $userInput ?>
        </p>
        <h5>
            <?php echo strlen($userInput) ?>
        </h5>
    </div>

    <div>
        <h3>Parola da censurare : </h3>
        <p>
            <?php echo $censuredWord ?>
        </p>

        <p>
            paragrafo censurato :
            <?php echo $applyCensorship ?>
        </p>
        <h5>lunghezza paragrafo censurato :
            <?php echo strlen($applyCensorship) ?>
        </h5>
    </div>

</body>

</html>