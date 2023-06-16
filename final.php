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
   
 <!--Páginafinal. Exibe o número de pontos e de acertos do jogador-->
    <!-- Cabeçalho -->
    <header class="container">
      <div class="logo">
        <img src="imagens/logo.png" width="200" height="106" alt="logo do quiz">
      </div> 
    </header>

        <!-- Botão reiniciar-->
        <div class="botoes contpag">
            <a href='menu.php'><button>Reiniciar jogo</button></a>
        </div> 

        <section class="secao-final">
            <!-- Foto final-->
            <div class="final">
                <img src="imagens/taylors.png" alt="Imagem final" width="550px" height="auto">
            </div>

            <section class="mensagens">
                <!-- Mensagem que informa ao jogador os resultados-->
                <div class="final">
                    <h2>Você chegou ao final do quiz, Sarah!</h2>
                </div>
    
                <div class="resultado">
                    <?php echo $txtActs?>
                    <?php echo $txtPts?>
                </div>
            </section>
    </section>

     <!--Rodapé (deve mostrar a equipe de devs)-->
 <footer>
    <div id="footer_content">
      <div id="footer_contacts">
          <h1><img src="imagens/logo.png"  width="150" height="auto" alt="logo do quiz"></h1>
          <p>Conheça mais sobre a Taylor:</p>
 
          <div id= "footer_social_media">
              <a href="https://www.instagram.com/taylorswift/" class="footer-link" id="instagram">
                  <i class="fa-brands fa-instagram"></i>
              </a>
 
              <a href="https://www.youtube.com/@TaylorSwift" class="footer-link" id="youtube">
                  <i class="fa-brands fa-youtube"></i>
              </a>
 
              <a href="https://twitter.com/taylorswift13" class="footer-link" id="twitter">
                    <i class="fa-brands fa-twitter"></i>
              </a>
          </div>
      </div>
 
      <ul class="footer-list">
          <li>
              <h3>Desenvolvido por</h3>
          </li>
          <li>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZZzthsKLFKlgvhTndnzQSMvkLLKmRLBjLNCvmkxwfRDpZfVKjgVxcTXbMldWJQfwDwTgV" class="footer-link">Flávia Jamily</a>
          </li>
          <li>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZZzthsKLFKlgvhTndnzQSMvkLLKmRLBjLNCvmkxwfRDpZfVKjgVxcTXbMldWJQfwDwTgV" class="footer-link">Isabel Natalia</a>
          </li>
          <li>
              <a href="https://mail.google.com/mail/u/1/#inbox?compose=CllgCJTHVrhzfknrDbfrVrskLQpkcLlWmSgnWJpjCQtPwkDCDGBXXwCgFjxwtRgKtBWxnjNFsGq" class="footer-link">Sarah Lima</a>
          </li>
      </ul>
 
      <ul class="footer-list">
          <li>
              <h3>Créditos</h3>
          </li>
          <li>
              <p>Trabalho realizado para a disciplina de programação para internet</p>
          </li>
          <li>
              <p>Professor: Éberton Marinho</p>
          </li>
          <li>
              <p>Unidade 1</p>
          </li>
          <li>
            <p>IFRN- Campus Canguaretama</p>
          </li>
      </ul>
    </div>
  </footer>
</body>
</html>