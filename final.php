<?php

session_start();

$txtActs = "";
$txtPts = "";

// Mensagens para acertos:

if ($_SESSION["acertos"] == 0) {
    $txtActs = "Que pena! Você não acertou nenhuma das questões";
}

if ($_SESSION["acertos"] >= 3) {
    $txtActs = "Boa tentativa, mas você acertou " . echo $_SESSION["acertos"] . " das 10 questões ";
}

if ($_SESSION["acertos"] >= 6) {
    $txtActs = "Olha só! Você acertou " . echo $_SESSION["acertos"] . " das 10 questões ";
}

if ($_SESSION["acertos"] >= 9) {
    $txtActs = "Uau! Você acertou " . echo $_SESSION["acertos"] . "das 10 questões ";
}

if ($_SESSION["acertos"] == 10) {
    $txtActs = "Parabéns!! Você acertou todas as questões";
}

//Mensagens para pontos:

if ($_SESSION["pontos"] == 0) {
    $txtPts = "e não ganhou nenhum ponto. Tente novamente!";
}

if (0 < $_SESSION["pontos"] >= 300) {
    $txtPts = "e acumulou " . echo $_SESSION["pontos"] . " pontos. Você ainda pode melhorar se tentar novamente!";
}

if (500 < $_SESSION["pontos"] >= 600) {
    $txtPts = "e acumulou " . echo $_SESSION["pontos"] . " pontos. Você está indo bem!";
}

if (700 < $_SESSION["pontos"] >= 900) {
    $txtPts = "e acumulou " . echo $_SESSION["pontos"] . " pontos. Você foi ótimo/a!";
}

if ($_SESSION["pontos"] == 1000) {
    $txtPts = "e acumulou 100 pontos. Você é um/a verdadeiro/a Swifter!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim do Quiz!</title>
</head>
<body>
    
    <div class = "mesagem-final">
        <h1>Você chegou ao final do quiz, <?php echo $_SESSION["nomeJogador"];?>!</h1>
    </div>

    <div>
        <?php echo $txtActs?>
        <?php echo $txtPts?>
    </div>

</body>
</html>