<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Contato</title>
</head>
<body>
    <?php 
        require_once "conexao.php";
        try {
            //apagar contatos
            $parametro = ['codigo' => $_GET['codigo']];
            $stmt = $conn->prepare("DELETE FROM contatos WHERE contatos.codigo = :codigo");
            if ($stmt->execute($parametro)) {
                echo "Exclusão do contatos bem sucedida !<br>";
            };

            //Excibir voltar
            echo "<br>";
            echo "<a href='./index.php'>Voltar</a>";
        } catch(PDOException $e) {
            echo "<pre>";
            echo "Erro ao executar".$e->getMessage();
            echo "</pre>";
        }
    ?>
</body>
</html>