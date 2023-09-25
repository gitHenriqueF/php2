<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php 
    require_once "conexao.php";
    try {
        $stmt = $conn->prepare("SELECT * FROM contatos");
        $stmt->execute();
       echo("<br><ul>");
       foreach ($stmt as $linha) {
           echo("<li>");
           //echo("<a href='item.php/?contatos=".$linha["codigo"]."'>".$linha["codigo"]);
           echo(" - ".$linha["nome"]."</a>");
           echo("&nbsp;&nbsp;");
           echo("<button onclick='alterar(".$linha["codigo"].")'><img src='pencil.png'></button>");
           echo("&nbsp;&nbsp;");
           echo("<button onclick='apagar(".$linha["codigo"].")'><img src='lixeira.png'></button></li>");
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
    <button name="bincluir" id="bincluir" type="button" onclick="incluir()">Novo contato</button>
</body>
</html>