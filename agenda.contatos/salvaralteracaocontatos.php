<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="./estilo.css">
    <title>Salvar Alteração Contatos</title>
</head>
<body>
    <?php 
    require_once "conexao.php";

    try {
        $parametro = ['codigo' => $_GET['codigo']
                     ,'nome'=> $_GET['nome']
                     ,'telefone'=> $_GET['telefone']
                     ,'email'=> $_GET['email']];
        $stmt = $conn->prepare("UPDATE contatos SET nome = :nome, telefone = :telefone, email = :email WHERE contatos.codigo = :codigo");
        if ($stmt->execute($parametro)) {
            echo "Alteração bem sucedida !";
        };
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