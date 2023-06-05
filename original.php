<?php

session_start();
    $valor = 0;
    $msg=0;
    $pontos="";
    $acertos = "";

    $perguntas = array ("Qual a idade dela?", "Quando ela nasceu?", "Qual o apelido que os fãs brasileiros deram à Taylor Swift?",
    "Quantos álbuns de estúdio da Taylor foram lançados até agora?", "Qual é o nome do primeiro álbum da cantora?
    ", "Qual foi o último relacionamento da Taylor?", "Qual foi o álbum mais vendido da Taylor?",
    "Qual é o nome da tour atual (maio/2023) que a Taylor está fazendo?", "Qual é o número da sorte da Srta. Swift?
    ", "Quantos grammys ela ganhou?"
    );
    //Array das respostas
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


    function exibirQuestao($i){
        global $perguntas, $respostas, $_SESSION;
?>
    <section id="pergunta-1">
        <form action="original.php" method="post"><br>
        <h1>Pergunta <?php echo $i+1?></h1>
        <h2><?php echo $perguntas[$i]?></h2>
        <input type="radio" name="res1" value="27"><?php echo($respostas[$i][0])?></br>
        <input type="radio" name="res1" value="30"><?php echo($respostas[$i][1])?></br>
        <input type="radio" name="res1" value="33"><?php echo($respostas[$i][2])?></br>
        <input type="radio" name="res1" value="36"><?php echo($respostas[$i][3])?></br>
        <input type="submit" name="responder" class="botao" value="Responder">
        </form>
    </section>

<?php
    }   
//AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACHORO
    /*function validarResposta($alternativa, $resposta){
        if ($alternativa == $resposta){
            $pontos= $pontos+100;
            $acertos= $acertos+1;
        }else{
            $pontos= $pontos+0;
            $acertos= $acertos+0;
        }
    }
        if(isset($_POST["responder"])){
            $botao = $_POST["responder"];
            //validação das respostas
            if(isset($_POST["res1"])){
                if(validarResposta($_POST["res1"], "33")) {
                    $msg = "Parabéns, você acertou!";
                }else{
                    $msg = "Que pena, você errou!";
                    
                }
            }

    }*/

    if(isset($_POST['num'])){
        $valor = $_POST['num'];
    }

    if(isset($_POST['botao1'])){
        $valor = $_POST['num'] - 1;
    }

    if(isset($_POST['botao2'])){
        $valor = $_POST['num'] + 1;
    }
    if(isset($_POST['botao1']) && $valor = $_POST['num'] < 1){
        ;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Taylor Swift</title>
</head>
<body>
    <h3><?php echo "Jogador: " . $_SESSION["nomeJogador"];?></h3>
    <?php

        exibirQuestao($valor);
    ?>
    <form action="original.php" method="post">
        <input type="hidden" name="num" value="<?php echo $valor ?>">
        <button id="botao" name="botao1" value="-">Anterior</button>

        <button name="botao2" value="+">Próxima</button>
    </form>

</body>
</html>
