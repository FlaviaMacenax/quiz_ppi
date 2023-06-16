<?php

session_start();

$txtActs = "";
$txtPts = "";

// Mensagens para acertos:

if ($_SESSION["acertos"] == 0) {
    $txtActs = "Que pena! Você não acertou nenhuma das questões ";
}

if ($_SESSION["acertos"] >= 1 && $_SESSION["acertos"] <= 4) {
    $txtActs = "Olha só! Você acertou " . $_SESSION["acertos"]+1 . " questões de 10 ";
}

if ($_SESSION["acertos"] >= 5 && $_SESSION["acertos"] <= 7) {
    $txtActs = "Uau! Você acertou " . $_SESSION["acertos"]+1 . " questões de 10 ";
}

if ($_SESSION["acertos"] >= 8 && $_SESSION["acertos"] <= 10) {
    $txtActs = "Parabéns!! Você acertou " . $_SESSION["acertos"]+1 . " questões de 10 ";
}

//Mensagens para pontos:

if ($_SESSION["ponto"] == 0) {
    $txtPts = "e não ganhou nenhum ponto. Mas você pode tentar novamente!";
}

if ($_SESSION["ponto"] >= 100 && $_SESSION["ponto"] <= 400) {
    $txtPts = "e acumulou " . $_SESSION["ponto"]+100 . " pontos. Você foi bem, mas pode se dar melhor se tentar novamente!";
}

if ($_SESSION["ponto"] >= 500 && $_SESSION["ponto"] <= 700) {
    $txtPts = "e acumulou " . $_SESSION["ponto"]+100 . " pontos. Você foi ótimo(a)!";
}

if ($_SESSION["ponto"] >= 800 && $_SESSION["ponto"] <= 1000) {
    $txtPts = "e acumulou " . $_SESSION["ponto"]+100 . " pontos. Você é um(a) verdadeiro(a) Swifter!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Importação da fonte-->
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Importação dos ícones do rodapé-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Ícone da barra do navegador-->
    <link rel="icon" type="image/x-icon" href="imagens/icon.png">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="estilo_quiz.css" />
    <title>Fim do Quiz!</title>
</head>
<body>
   
        <!-- Botão voltar-->
        <section class="menu contpag">
             <div class="reiniciar ">
                <a href="menu.php">Reiniciar jogo</a>
            </div>
        </section>

    <div class = "mensagem-final">
        <h1>Você chegou ao final do quiz, <?php echo $_SESSION["nomeJogador"];?>!</h1>
    </div>

    <div>
        <?php echo $txtActs?>
        <?php echo $txtPts?>
    </div>

</body>
</html>