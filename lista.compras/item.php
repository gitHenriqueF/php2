<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Nro:<?php echo($_GET["lista"])?></title>
</head>
<body>
    <h1> Lista de Compras - Nro:
        <?php echo($_GET["lista"]);?>
    </h1>
    <?php 
       try {
        require_once "conexao.php";
           //Realizar Consulta a tabela item
           $parametro = ['lista' => $_GET['lista']];
           $stmt = $conn->prepare("SELECT * FROM item WHERE codigo_lista = :lista");
           $stmt->execute($parametro);
           echo("<br><ul>");
           foreach ($stmt as $linha) {
               echo("<li>".$linha["codigo"]." - "
               .$linha["datahora"]." - "
               .$linha["descricao"]." - "
               .$linha["quantidade"] 
               ."</li>");
           }
           echo("</ul><br>");
       } catch(PDOException $e) {
        echo "<pre>";
        echo "Erro ao executar".$e->getMessage();
        echo "</pre>";
       }
    ?>
    <br>
    <a href="/php2/lista.compras/index.php">Voltar</a>
</body>
</html>