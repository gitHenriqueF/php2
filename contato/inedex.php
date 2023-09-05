<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="contato.css">
</head>
<body>
    <div class="container">
        <div class="container_left">
        <h1>CONTATO</h1>
        <br><br>
        <h3>Henrique Fernandes</h3>
        <br><br>
        <form>
            <label for="itelefone">Telefone: +55 (47) 9999-9999 </label>
            <label for="iEmail">E-mail: contato.php@unidavi.com.br </label>
        </form>
        <br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5017.992569219202!2d-49.64555537961524!3d-27.211093242262475!2m3!1f0!2f0!3f0!
                     3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dfb9ae021204f5%3A0xada6f95bdcb46273!2sUnidavi!5e0!3m2!1spt-BR!2sbr!4v1693849889731!5m2!1spt-BR!
                     2sbr"
                     width="900" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container_right">
            <div class="content">
            <form action="envio.php" method="post">
                <label for="inome">Nome: </label>
                <input name="nome" type="text" placeholder="Nome" id="inome">
                <label for="ifone">Fone: </label>
                <input name="fone" type="number" placeholder="Fone" id="ifone">
                <label for="iEmail">E-mail: </label>
                <input name="Email" type="text" placeholder="E-mail" id="iEmail">
                <label for="iassunto">Assunto: </label>
                <input name="assunto" type="text" placeholder="Assunto" id="iassunto">
                <label for="imensagem">Mensagem: </label>
                <textarea name="mensagem" id="imensagem" cols="30" rows="10" placeholder="Envie uma mensagem"></textarea>
                <button class="submit_btn">Enviar</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>