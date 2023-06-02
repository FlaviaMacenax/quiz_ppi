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
);


$msg = "";


if(isset($_POST["responder"])){
    $botao = $_POST["responder"];


        if($_POST["respostas"] == "c"){
            $msg = "Resposta Correta. Parabéns!";
        }else{
            $msg = "Resposta Incorreta. Tente novamente!";
        }
}


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


    <form action="quiz.php" method="post">
    <h1>Pergunta 1</h1>
    <h2><?php echo $perguntas[0]?></h2>
    <input type="radio" name="respostas" value="e"><?php echo($respostas[0][0])?></br>
    <input type="radio" name="respostas" value="e"><?php echo($respostas[0][1])?></br>
    <input type="radio" name="respostas" value="e"><?php echo($respostas[0][2])?></br>
    <input type="radio" name="respostas" value="c"><?php echo($respostas[0][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <?php echo $msg?>
    </form>
   




    <form action="quiz.php" method="post">
    <h1>Pergunta 2</h1>
    <h2><?php echo $perguntas[1]?></h2>
    <input type="radio" name="respostas" value="e"><?php echo($respostas[1][0])?></br>
    <input type="radio" name="respostas" value="c"><?php echo($respostas[1][1])?></br>
    <input type="radio" name="respostas" value="e"><?php echo($respostas[1][2])?></br>
    <input type="radio" name="respostas" value="e"><?php echo($respostas[1][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <?php echo $msg?>
    </form>


    <form action="quiz.php" method="post">
    <h1>Pergunta 3</h1>
    <h2><?php echo $perguntas[2]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[2][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[2][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[2][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[2][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 4</h1>
    <h2><?php echo $perguntas[3]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[3][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[3][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[3][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[3][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 5</h1>
    <h2><?php echo $perguntas[4]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[4][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[4][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[4][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[4][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 6</h1>
    <h2><?php echo $perguntas[5]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[5][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[5][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[5][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[5][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 7</h1>
    <h2><?php echo $perguntas[6]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[6][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[6][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[6][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[6][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 8</h1>
    <h2><?php echo $perguntas[7]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[7][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[7][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[7][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[7][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 9</h1>
    <h2><?php echo $perguntas[8]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[8][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[8][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[8][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[8][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>




    <form action="quiz.php" method="post">
    <h1>Pergunta 10</h1>
    <h2><?php echo $perguntas[9]?></h2>
    <input type="radio" name="respostas" value="0"><?php echo($respostas[9][0])?></br>
    <input type="radio" name="respostas" value="1"><?php echo($respostas[9][1])?></br>
    <input type="radio" name="respostas" value="2"><?php echo($respostas[9][2])?></br>
    <input type="radio" name="respostas" value="3"><?php echo($respostas[9][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    </form>
</body>
</html>