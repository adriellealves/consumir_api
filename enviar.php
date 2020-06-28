<!DOCTYPE html>
<html>
<head>
    <title>Enviar Mensagem</title>
</head>
<body>
<?php
require "menu.php";

?>
<br><br><br>


<form method="post" onsubmit="return enviar_amigo()">

    <input type="text" placeholder="De" id="origem"/><br><br>
    <input type="text" placeholder="Para" id="destino"/><br><br>
    <input type="text" placeholder="Descrição" id="description"/><br><br>
    <input type="url" placeholder="API link" id="api"/><br><br>
    <button type="submit">Enviar</button>

</form>

<script>

    function enviar_amigo(){

        var parametros={

            from:document.getElementById('origem').value,
            to:document.getElementById('destino').value,
            message:document.getElementById('description').value,
            apiurl:document.getElementById('api').value

        };

            var request= new XMLHttpRequest();
            request.open('POST','http://165.22.142.228:1602/send-message-friend');
            request.send(JSON.stringify(parametros));

            return false;
    }


</script>


</body>
</html>