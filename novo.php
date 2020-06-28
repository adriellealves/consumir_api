<!DOCTYPE html>
<html>
<head>
    <title>Nova Noticia</title>
</head>
<body>

<?php
require "menu.php";

?>
<br><br><br>

<form method="post" onsubmit="return enviar()">

    <input type="text" placeholder="Titulo da postagem" id="title"/><br><br>
    <input type="text" placeholder="Descrição" id="description"/><br><br>
    <input type="datetime-local"  id="postdate"/><br><br>
    <input type="text" placeholder="Autor" id="author"/><br><br>
    <button type="submit">Enviar</button>

</form>
<script>

    function enviar() {
        var parametros={

            title:document.getElementById('title').value,
            description:document.getElementById('description').value,
            postdate:document.getElementById('postdate').value,
            author:document.getElementById('author').value

        };
        var request = new XMLHttpRequest();
        request.open('POST','http://165.22.142.228:1602/send-feed');
        request.send(JSON.stringify(parametros));
        return false;
    }

</script>


</body>
</html>

