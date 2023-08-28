<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio do Dado</title>
</head>
<body>
    <h1>Sorteio do Dado</h1>
    <form action="" method="get">
        <button id="bjogar" name="jogar" value="jogar" type="subimt">
            JOGAR DADO
        </button>
    </form>
    <?php
        if ((!empty($_GET['jogar'])) and $_GET['jogar'] == "jogar")  {
            echo "Dado arremessado<br><br>";
            $dado = mt_rand(1,6);
            echo "<img src='dados/$dado.png' width='320px'>";
        } else {
            echo "clique no botão para Jogar";
        }
    ?>
</body>
</html>