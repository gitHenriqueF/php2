<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="./estilo.css">
    <title>Alterar Contato</title>
    <script language="JavaScript">
        function cancelar() {
            event.preventDefault();
            window.location = "./index.php";
        }
    </script>
</head>
<body>
    <?php 
       require_once "conexao.php"; 
       try {
           $stmt = $conn->prepare("SELECT * FROM contatos WHERE codigo =".$_GET["codigo"]);
           $stmt->execute();
           $contatos = $stmt->fetch(PDO::FETCH_ASSOC);
           $conn = null;
       } catch(PDOException $e) {
          echo "<pre>";
          echo "Erro ao executar".$e->getMessage();
          echo "</pre>";
       }
    ?>
    <h1>Alterar Contato: <?=$contatos["codigo"]."-".$contatos["nome"]?></h1>
    <br>
    <form action="salvaralteracaocontatos.php" method="get">
        <input id="icodigo" name="codigo" type="hidden" value="<?=$contatos['codigo']?>">
        <label for="inome">Nome: </label>
        <input type="text" id="inome" name="nome"size="100" value="<?=$contatos['nome']?>"required>
        <br><br>
        <label for="itelefone">Telefone: </label>
        <input type="number" id="itelefone" name="telefone"size="100" value="<?=$contatos['telefone']?>"required>
        <br><br>
        <label for="iemail">Email: </label>
        <input type="text" id="iemail" name="email"size="100" value="<?=$contatos['email']?>"required>
        <br><br>
        <button name="salvar" id="bsalvar" type="submit">Salvar</button> 
        <button name="bcancelar" id="bcancelar"
        type="reset" onclick="cancelar()">Cancelar</button>
    </form>
</body>
</html>