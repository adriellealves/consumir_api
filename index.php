<!DOCTYPE html>
<html>
<head>
    <title>principal</title>
</head>
<body>
<?php
    require "menu.php";

?>
<br><br><br>
<div id="conteiner">



    </div>

<script>

    function listar() {
        var conteiner=document.getElementById('conteiner');
        var request= new XMLHttpRequest();
        request.onreadystatechange=function(){

            if(this.readyState==4 && this.status==200){
                var conteudo = JSON.parse(this.responseText);

                var html="<table border='1' cellpadding='0' cellspacing='0'> "+

                    "<tr style='background-color: chocolate;'>"+
                        "<td>Título</td>"+
                        "<td>Descrição</td>"+
                        "<td>Data da postagem</td>"+
                        "<td>Autor</td>"+
                    "</tr>";

                for (var i=0;i<conteudo.length;i++){

                    html+= "<tr>"+
                        "<td>"+conteudo[i].title+"</td>"+
                        "<td>"+conteudo[i].description+"</td>"+
                        "<td>"+conteudo[i].postdate+"</td>"+
                        "<td>"+conteudo[i].author+"</td>"+
                        "</tr>";

                }

                html+="</table>";

                conteiner.innerHTML=html;
            }else{
                conteiner.innerHTML="Carregando...";
            }

        };

        request.open('GET','http://165.22.142.228:1602/feednews');
        request.send();
    }
    listar();

</script>

</body>
</html>