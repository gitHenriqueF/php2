<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="./estilo.css">
    <title>Incluir Contato</title>
    <script language="JavaScript">
        function cancelar() {
            event.preventDefault();
            window.location = "./index.php";
        }
    </script>
</head>
<body>
    <h1>Incluir Lista</h1>
    <br>
    <form action="salvarcontato.php" method="get">
        <label for="inome">Nome: </label>
        <input type="text" id="inome" name="nome" placeholder="Nome do contato" size="100" required>
        <br><br>
        <label for="itelefone">Telefone: </label>
        <input type="number" id="itelefone" name="telefone" placeholder="Telefone do contato" size="100" required>
        <br><br>
        <label for="iemail">E-mail: </label>
        <input type="text" id="iemail" name="email" placeholder="E-mail do contato" size="100" required>
        <br><br>
        <button name="salvar" id="bsalvar" type="submit">Salvar</button>&nbsp;
        <button name="bcancelar" id="bcancelar" type="reset" onclick="cancelar()">Cancelar</button>
    </form>
</body>
</html>