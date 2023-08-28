<!DOCTYPE html>
<html lang="en">
    <!--Transformando codigo de JS para PHP-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC PHP</title>
</head>
<body>
    <h1>Cálculo IMC PHP</h1>
    <br>
    <form action="#" method="get" onsubmit="fImc()">
        <label for="iNome">Nome</label>
        <input type="text" id="iNome">
        <br>
        <label for="iPeso">Peso (em kg)</label>
        <input type="number" id="iPeso" step="0.01">
        <br>
        <label for="iAltura">Altura (em metors)</label>
        <input type="number" id="iAltura" step="0.01">
        <br>
        <br>
        <button type="submit">Calcilar IMC</button>
        <br>
        <br>
        <div id="dResultado">Resultado...</div>
    </form>

    <?php
    function fImc() {
        
    }
    ?>
</body>
</html>