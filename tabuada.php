<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
    <style> 

    .verde
    {
        background-color:lightgreen;
    }

    .amarelo
    {
        background-color:lightyellow;
    }





    </style>
</head>
<body>
    <?php 
        $nome = $_POST["nome"];
        echo($nome);
        $valor = $_POST["valor"];

        for($x=1;$x<=10;$x++)
        {
            if($x%2 == 0)
            { 
                echo("<div class='verde'>");
            }
            else
            {
                echo("<div class='amarelo'>");
            }
           
            echo($valor*$x);
            echo("</div> <br>");
        }
       
         
    ?>
</body>
</html>