<?php
session_start();

$nomeJogador = "";
$msg = "";
$nome = false;

if(isset($_POST["enviar"])){
  $nome=true;
  
  //Nome do jogador
if(isset($_POST["nomeJogador"])){
  $nomeJogador = $_POST["nomeJogador"];
  $_SESSION ["nomeJogador"] = $nomeJogador;
}
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
    <title>Taylor Swift Quiz</title>
</head>
<body> 
    <!--Página de primeiro contato com o quiz. Ela deve pegar o nome do jogador, exibir instruções e direciona-lo para a página 
    das perguntas-->

<audio src="audio/shakeitoff.mp3" loop autoplay></audio>

    <!--Cabeçalho-->
    <header class="container">
      <div class="logo">
        <img src="imagens/logo.png" width="250" height="auto" alt="logo do quiz">
      </div> 
    </header>

    <!--Menu-->
  <section class="secao-1 container">
        <img src="imagens/taylormid.png" width="900" height="auto" alt="foto da Taylor Swift">
  
    <!--Opções do menu-->
    <form action="menu.php" method="post">
    <section class="opcoes contpag">
    <div class="itens campo">  <!--Onde o jogador deve colocar seu nome-->  
    <?php if(!$nome) { ?>
        <input type="text" id="nome" placeholder="QUAL SEU NOME?" name="nomeJogador" required>
        <button name="enviar">Enviar nome</button>  <?php } ?>
    
    <?php if($nome){?>
        <a href="teste.php">Iniciar jogo</a> <?php }?>
    </div>
    <div class="itens">
    <a href="instruções.php">Instruções</a> <!--Direciona o jogador para as instruções--> 
    </div>
    </section>
    </section>

   

    </form>

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
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsdDzZVhzWbvJxplVtLLlZbKRvnvrqcMjFqWKcDHLnBDLhHqhnmSnftJWZFMcQmXsHngwJLG" class="footer-link" target="blank">Flávia Jamily</a>
          </li>
          <li>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsdDzZVhzWbvJxplVtLLlZbKRvnvrqcMjFqWKcDHLnBDLhHqhnmSnftJWZFMcQmXsHngwJLG" class="footer-link" target="blank">Isabel Natalia</a>
          </li>
          <li>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsdDzZVhzWbvJxplVtLLlZbKRvnvrqcMjFqWKcDHLnBDLhHqhnmSnftJWZFMcQmXsHngwJLG" class="footer-link" target="blank">Sarah Lima</a>
          </li>
      </ul>
 
      <ul class="footer-list">
          <li>
              <h3>Ficha técnica</h3>
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