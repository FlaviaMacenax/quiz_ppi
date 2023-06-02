<?php
$perguntas = array ("Qual a idade dela?", "Quando ela nasceu?", "Qual o apelido que os fãs brasileiros deram à Taylor Swift?", 
"Quantos álbuns de estúdio da Taylor foram lançados até agora?", "Qual é o nome do primeiro álbum da cantora?
", "Qual foi o último relacionamento da Taylor?", "Qual foi o álbum mais vendido da Taylor?", 
"Qual é o nome da tour atual (maio/2023) que a Taylor está fazendo?", "Qual é o número da sorte da Srta. Swift?
", "Quantos grammys ela ganhou?"
);
$respostas = array(
    array ("27 anos", "30 anos", "33 anos", "36 anos"),
    array ("13 de dezembro de 1989", "27 de março de 1986", "23 de outubro de 1989", "17 de fevereiro de 1986"),
    array ("Loirinha", "Loirona", "Lourena", "Loucona"),
    array ("13", "10", "7", "5"),
    array ("Taylor Swift", "Reputation", "Lover", "Evermore"),
    array ("Harry Styles", "Joe Alwyn", "Joe Jonas", "Tom Hiddleston"),
    array ("Folklore", "Red", "1989", "Midnights"),
    array ("Taylor swift tour", "Evermore tour", "The eras tour", "Midnights tour"),
    array ("10", "22", "13", "7"),
    array ("7", "8", "11", "12")
)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Taylor Swift</title>
</head>
<body>

    <h1>Pergunta 1</h1>
    <h2><?php echo $perguntas[0]?></h2>

    <form action="quiz_ppi" method="post">
    <input type="radio" name="respts" value="1"><?php echo($respostas[0][0])?></br>
    <input type="radio" name="respts" value="2"><?php echo($respostas[0][1])?></br>
    <input type="radio" name="respts" value="3"><?php echo($respostas[0][2])?></br>
    <input type="radio" name="respts" value="4"><?php echo($respostas[0][3])?></br> 
    </form>
</body>
</html>