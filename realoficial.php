<?php


session_start();
    $valor = 0;
    $msg= "";
    $ponto= 0;
    $acertos = "";
    $botao='';
    $validacao = "";


    //Estrutura para fazer com que o botão passe para a próxima pergunta

    if(isset($_POST['botao2'])){
        $valor = $_POST['valor'] + 1;
    }

    if(isset($_POST["ponto"])){
    }
 

    //Array contendo as perguntas
    $perguntas = array ("Qual a idade dela?", "Quando ela nasceu?", "Qual o apelido que os fãs brasileiros deram à Taylor Swift?",
    "Quantos álbuns de estúdio da Taylor foram lançados até agora?", "Qual é o nome do primeiro álbum da cantora?
    ", "Qual foi o último relacionamento da Taylor?", "Qual foi o álbum mais vendido da Taylor?",
    "Qual é o nome da tour atual que a Taylor está fazendo?", "Qual seu número da sorte?
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


    $posicao = array(3, 1, 1, 2, 1, 2, 4, 3, 3, 4);

    function validarResposta($alternativa, $posicaoResposta, $i){
        global $ponto;
        
           if ($alternativa==$posicaoResposta){
               $ponto = $_POST["ponto"]+100;
              return "Parabéns, você acertou e ganhou 100 pontos!!! :)";
           }else{
               $ponto = $_POST["ponto"];
               return "Que pena, você errou e não ganhou pontos!!! :(";
               }
           }
        
        //Estrutura para mostrar se a questão marcada foi a correta ou errada, caso o usuário selecione o botão responder
           if(isset($_POST["responder"])){
               $botao = $_POST["responder"];
               
       //Chamando a função de validação da resposta
               if(isset($_POST["res"])){
                   $validacao= validarResposta($_POST["res"], $posicao[$valor], $_POST["ponto"] );
                   //acho que isso resolve meus problemas $valor = $_POST["valor"]+1;
                   }$msg=" ".$validacao;
               }
    //Função para exibir as perguntas
    

//Função para validar a resposta
function exibirQuestao($i){
        global $perguntas, $respostas, $ponto, $msg;
?>
    <form action="realoficial.php" method="post"><br>
    <?php echo $msg?><br>
    <h2><i class="fa-solid fa-trophy"></i><label>Pontos: <input type="text" name="ponto" value="<?php echo $ponto; ?>"</h2></label>
    <h1 class="perg" >Pergunta <?php echo $i+1?></h1>
    <h2 class="pergunta"><?php echo $perguntas[$i]?></h2>
    <div class="alternativa">
        <input type="radio" name="res" value="1"><?php echo($respostas[$i][0])?></br>
    </div>
    <div class="alternativa">
        <input type="radio" name="res" value="2"><?php echo($respostas[$i][1])?></br>
    </div>
    <div class="alternativa">
        <input type="radio" name="res" value="3"><?php echo($respostas[$i][2])?></br>
    </div>
    <div class="alternativa">
        <input type="radio" name="res" value="4"><?php echo($respostas[$i][3])?></br>
    </div>
    
    <button name="responder" value="responder">Responder</button>
    
</form>
<?php
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
    <!--Página de perguntas do quiz. É aqui que as perguntas e as alternativas serão exibidas-->
     <!--Cabeçalho-->
     <header class="container">
      <div class="logo">
        <img src="imagens/logo.png" width="250" height="auto" alt="logo do quiz">
      </div>
    </header>
     <!--Exibe o nome do jogador-->
    <div class="icones contpag">
        <h2><i class="fa-solid fa-user"></i>
        <?php echo "Jogador: " . $_SESSION["nomeJogador"];?>
    </h2>
    </div>
        <div class="perguntas contpag">
        <?php exibirQuestao($valor);?><br>
        </div>

    <div class="contpag">
    <form action="realoficial.php" method="post">
        <input type="hidden" name="valor" value="<?php echo $valor ?>">
        <button name="botao2" value="+">Próxima</button><br>
    </form></div>

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