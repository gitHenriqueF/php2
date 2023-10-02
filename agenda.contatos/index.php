<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="./estilo.css">
    <title>Agenda de contatos</title>
    <script language="JavaScript">
        function incluir() {
            event.preventDefault();
            window.location = "./incluircontato.php";
        }

        function apagar(codigo) {
            event.preventDefault();
            if (window.confirm("Confirma execlusão do contato: "+codigo)) {
                window.location = "./apagacontato.php?codigo="+codigo;    
            }
        }

        function alterar(codigo) {
            event.preventDefault();
            window.location = "./alterarcontato.php?codigo="+codigo;    
        }
    </script>
</head>
<body>
    <h1>Agenda de contatos</h1>
    <br>
    <form id="fbusca" action="index.php" method="get">
        <input id="ibusca" name="busca" placeholder="Digite algo para buscar">
        <button name="bbusca" value="busca"><img src="./img/lupa.png"></button> 
    </form>
    <?php 
    require_once "conexao.php";
    try {
        if (empty($_GET["busca"])) {
               //busca todos os dados da tabela
               $stmt = $conn->prepare("SELECT * FROM contatos");
        } else {
               //busca os dados da tabela, aplicando a busca digitada pelo usuário
               //Monta SQL com parametros da busca
               $sql = "SELECT * FROM contatos WHERE CODIGO = '".$_GET["busca"]
                      ."' OR NOME LIKE '%".$_GET["busca"]."%'";
               //echo $sql;
               echo "<strong>Pesquisando por: </strong><mark>".$_GET["busca"]."</mark>";
               $stmt = $conn->prepare($sql);
        }
        $stmt->execute();
       echo("<br><ul>");
       foreach ($stmt as $linha) {
           echo("<li>");
           //echo("<a href='item.php/?contatos=".$linha["codigo"]."'>".$linha["codigo"]);
           echo(" => ".$linha["nome"]."<br> Email: ".$linha["email"]."<br> Telefone: ".$linha["telefone"]."</a>");
           echo("&nbsp;&nbsp;");
           echo("<button onclick='alterar(".$linha["codigo"].")'><img src='./img/pencil.png'></button>");
           echo("&nbsp;&nbsp;");
           echo("<button onclick='apagar(".$linha["codigo"].")'><img src='./img/lixeira.png'></button></li>");
       }
       echo("</ul><br>");
       $conn = null;
     } catch(PDOException $e) {
      echo "<pre>";
      echo "Erro ao executar".$e->getMessage();
      echo "</pre>";
     }
    ?>
    <br>
    <img src="./img/mais.png">
    <button name="bincluir" id="bincluir" type="button" onclick="incluir()">Novo contato </button>
</body>
</html>