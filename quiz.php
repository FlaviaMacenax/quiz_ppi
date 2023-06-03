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
$r = "";
$res = "";


if(isset($_POST["responder"])){
    $botao = $_POST["responder"];
    //validação das respostas
    if(isset($_POST["res1"])){
        if($_POST["res1"] == "33") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res2"])){
        if($_POST["res2"] == "13 de dezembro") {
        $msg = "Parabéns, você acertou!" ;
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res3"])){
        if($_POST["res3"] == "loirinha") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res4"])){
        if($_POST["res4"] == "10") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res5"])){
        if($_POST["res5"] == "Taylor Swift") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res6"])){
        if($_POST["res6"] == "Joe Alwyn") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res7"])){
        if($_POST["res7"] == "Midnights") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res8"])){
        if($_POST["res8"] == "The eras tour") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res9"])){
        if($_POST["res9"] == "13") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    if(isset($_POST["res10"])){
        if($_POST["res10"] == "12") {
            $msg = "Parabéns, você acertou!";
        }else{
            $msg = "Que pena, você errou!";
        }
    }
    
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  type="image/x-icon" href="imagens/logo.png">
    <title>Quiz - Taylor Swift</title>
</head>
<body>


    <form action="quiz.php" method="post">
    <h1>Pergunta 1</h1>
    <h2><?php echo $perguntas[0]?></h2>
    <input type="radio" name="res1" value="27"><?php echo($respostas[0][0])?></br>
    <input type="radio" name="res1" value="30"><?php echo($respostas[0][1])?></br>
    <input type="radio" name="res1" value="33"><?php echo($respostas[0][2])?></br>
    <input type="radio" name="res1" value="36"><?php echo($respostas[0][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 2</h1>
    <h2><?php echo $perguntas[1]?></h2>
    <input type="radio" name="res2" value="13 de dezembro"><?php echo($respostas[1][0])?></br>
    <input type="radio" name="res2" value="27 de março"><?php echo($respostas[1][1])?></br>
    <input type="radio" name="res2" value="23 de outubro"><?php echo($respostas[1][2])?></br>
    <input type="radio" name="res2" value="17 de fevereiro"><?php echo($respostas[1][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>

    <form action="quiz.php" method="post">
    <h1>Pergunta 3</h1>
    <h2><?php echo $perguntas[2]?></h2>
    <input type="radio" name="res3" value="loirinha"><?php echo($respostas[2][0])?></br>
    <input type="radio" name="res3" value="loirona"><?php echo($respostas[2][1])?></br>
    <input type="radio" name="res3" value="lourena"><?php echo($respostas[2][2])?></br>
    <input type="radio" name="res3" value="loucona"><?php echo($respostas[2][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 4</h1>
    <h2><?php echo $perguntas[3]?></h2>
    <input type="radio" name="res4" value="13"><?php echo($respostas[3][0])?></br>
    <input type="radio" name="res4" value="10"><?php echo($respostas[3][1])?></br>
    <input type="radio" name="res4" value="7"><?php echo($respostas[3][2])?></br>
    <input type="radio" name="res4" value="5"><?php echo($respostas[3][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 5</h1>
    <h2><?php echo $perguntas[4]?></h2>
    <input type="radio" name="res5" value="Taylor Swift"><?php echo($respostas[4][0])?></br>
    <input type="radio" name="res5" value="Reputation"><?php echo($respostas[4][1])?></br>
    <input type="radio" name="res5" value="Lover"><?php echo($respostas[4][2])?></br>
    <input type="radio" name="res5" value="Evermore"><?php echo($respostas[4][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 6</h1>
    <h2><?php echo $perguntas[5]?></h2>
    <input type="radio" name="res6" value="Harry Styles"><?php echo($respostas[5][0])?></br>
    <input type="radio" name="res6" value="Joe Alwyn"><?php echo($respostas[5][1])?></br>
    <input type="radio" name="res6" value="Joe Jonas"><?php echo($respostas[5][2])?></br>
    <input type="radio" name="res6" value="Tom Hiddleston"><?php echo($respostas[5][3])?></br>
    <input type="submit" name="res6" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 7</h1>
    <h2><?php echo $perguntas[6]?></h2>
    <input type="radio" name="res7" value="Folklore"><?php echo($respostas[6][0])?></br>
    <input type="radio" name="res7" value="Red"><?php echo($respostas[6][1])?></br>
    <input type="radio" name="res7" value="1989"><?php echo($respostas[6][2])?></br>
    <input type="radio" name="res7" value="Midnights"><?php echo($respostas[6][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 8</h1>
    <h2><?php echo $perguntas[7]?></h2>
    <input type="radio" name="res8" value="Taylor swift tour"><?php echo($respostas[7][0])?></br>
    <input type="radio" name="res8" value="Evermore tour"><?php echo($respostas[7][1])?></br>
    <input type="radio" name="res8" value="The eras tour"><?php echo($respostas[7][2])?></br>
    <input type="radio" name="res8" value="Midnights tour"><?php echo($respostas[7][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 9</h1>
    <h2><?php echo $perguntas[8]?></h2>
    <input type="radio" name="res9" value="10"><?php echo($respostas[8][0])?></br>
    <input type="radio" name="res9" value="22"><?php echo($respostas[8][1])?></br>
    <input type="radio" name="res9" value="13"><?php echo($respostas[8][2])?></br>
    <input type="radio" name="res9" value="7"><?php echo($respostas[8][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Próxima" class="botao" value="Próxima">
    </form>
    <?php echo $msg?>



    <form action="quiz.php" method="post">
    <h1>Pergunta 10</h1>
    <h2><?php echo $perguntas[9]?></h2>
    <input type="radio" name="res10" value="7"><?php echo($respostas[9][0])?></br>
    <input type="radio" name="res10" value="8"><?php echo($respostas[9][1])?></br>
    <input type="radio" name="res10" value="11"><?php echo($respostas[9][2])?></br>
    <input type="radio" name="res10" value="12"><?php echo($respostas[9][3])?></br>
    <input type="submit" name="responder" class="botao" value="Responder">
    <input type="submit" name="Resultado" class="botao" value="Resultado">
    </form>
    <?php echo $msg?>
</body>
</html>