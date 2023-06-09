<?php
//Iniciando a sessão para pegar dados da página
session_start();

$msg="";
$validacao="";
$ponto=0;
$valor = 0;
$botao = "";
$acertos = 0;
$foirespondido=false;


    if(isset($_POST["valor"])){
        $valor = $_POST["valor"];
    }
    if(isset($_POST["ponto"])){
        }
        if(isset($_POST["acertos"])){
        }
        //Armazenando os pontos para página final
        if(isset($_POST["ponto"])){
            $ponto = $_POST["ponto"];
            $_SESSION ["ponto"] = $ponto;
          }
          //Armazenando os acertos para página final
          if(isset($_POST["acertos"])){
            $acertos = $_POST["acertos"];
            $_SESSION ["acertos"] = $acertos;
          }

    //Array contendo as perguntas
        $perguntas = array ("Qual a idade dela?", 
            "Quando ela nasceu?", 
            "Qual o apelido que os fãs brasileiros deram à cantora?",
            "Quantos álbuns de estúdio da Taylor foram lançados?", 
            "Qual é o nome do primeiro álbum da artista?", 
            "Com que foi seu último relacionamento?", 
            "Qual foi o álbum mais vendido da cantora?",
            "Qual é o nome da tour atual da Taylor?",
            "Qual seu número da sorte?", 
            "Quantos grammys ela ganhou?"
        );

    //Array das alternativas
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
            array ("3", "5", "10", "11")
        );

    //Array das respostas corretas
        $posicao = array(3, 1, 1, 2, 1, 2, 4, 3, 3, 4);
    //Função responsável pela validação das respostas
            function validarResposta($alternativa, $posicaoResposta, $i){
                global $ponto, $acertos;
                    if($alternativa==$posicaoResposta){
                        $ponto = $_POST["ponto"]+100;
                        $acertos = $_POST["acertos"]+1;
                            return "Parabéns, você acertou a questão e ganhou +100 pontos 🥳 <br>";
                    }else{
                        $ponto= $_POST["ponto"];
                            return "Que pena, você errou e não marcou pontos ☹️<br>";}
            }
//Botão de passar para a próxima pergunta
    if(isset($_POST["proxima"])){
        $valor = $_POST["valor"]+1;
    }
    //Estrutura para mostrar se a questão marcada foi a correta ou errada, caso o usuário selecione o botão responder
        if(isset($_POST["responder"])){
            $botao = $_POST["responder"];

    //Chamando a função de validação da resposta
        if(isset($_POST["res"])){
         $validacao= validarResposta($_POST["res"], $posicao[$valor], $_POST["ponto"]);
            $foirespondido = true;
        }$msg= " ".$validacao;

    }

    //Função para exibir as perguntas
        function exibirQuestao($i){
            global $perguntas, $respostas, $valor, $ponto, $msg, $acertos, $foirespondido;
            if($i>9){
                $i=9;
                $valor=9;
            }
?>

    <form action="teste.php" method="post">
        <section class="secao-1 icones">
            <h2 class="user secao-1"><i class="fa-solid fa-user icon"></i>
            <!--Exibe o nome do jogador-->
            <?php echo "Jogador: " . "<div class=\"jogador\">", $_SESSION["nomeJogador"] ,"</div>";?></h2>
            <!--Exibe os pontos-->
            <h2 class="pontos secao-1"><i class="fa-solid fa-trophy icon"></i>
            <label>Pontos: </label><input type="text" name="ponto" value="<?php echo $ponto; ?>" readonly></h2>
        </section>
    <!--Mensagem de validação-->
        <?php echo "<div class=\"valid\">", $msg ,"</div>"; ?><br>
    <!--Exibição do número da pergunta e quantidade de pontos-->
        <h1 class="perg" >Pergunta <?php echo $i+1?><i class="fa-solid fa-circle-question fa-bounce inter"></i></h1>
        <h1 class="pergunta"><?php echo ($perguntas[$i])?></h1>
        <label><input type="hidden" name="valor" value="<?php echo $valor; ?>"></label>
        <input type="hidden" name="acertos" value="<?php echo $acertos; ?>">
    
        <div class="alternativa custom-radio">
            <input type="radio" id="radio-1" name="res" value="1"><label for="radio-1"><?php echo($respostas[$i][0])?></label></br> 
        </div>
        <div class="alternativa custom-radio">
            <input type="radio" id="radio-2" name="res" value="2"><label for="radio-2"><?php echo($respostas[$i][1])?></label></br>
        </div>
        <div class="alternativa custom-radio">
            <input type="radio" id="radio-3" name="res" value="3"><label for="radio-3"><?php echo($respostas[$i][2])?></label></br>
        </div>
        <div class="alternativa custom-radio ">
            <input type="radio" id="radio-4" name="res" value="4"><label for="radio-4"><?php echo($respostas[$i][3])?></label></br>
        </div>

    <!-- O esquema dos botões: se o botão responder não for clicado não passa para a próxima pergunta, caso ele for clicado o botão de próxima aparece-->
        <div class="botoes">
            <?php if(!$foirespondido){ ?>
                <input id="responder" type="submit" name= "responder" value="Responder">
            <?php } ?>
            <?php if($foirespondido){ ?>
                <input id="proxima" type="submit" name="proxima" value="Próxima">
            <?php } ?>
        </div>
    </form>


<?php  
//Quando chegar na pergunta 10 aparecerá um botão de ver o resultado do quiz
    if($valor==9){ ?>
        <div class="botoes"><a href='final.php'><button>Resultados</button></a></div>
        <?php }  
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
    <script src="script.js" defer></script>
</head>
<body>
    
<!--Áudio-->
<audio src="audio/willow.mp3" loop autoplay ></audio> 

<!--Página de perguntas do quiz. É aqui que as perguntas e as alternativas serão exibidas-->
    <!--Cabeçalho-->
    <header class="container">
        <div class="logo">
            <img src="imagens/logo.png" width="250" height="auto" alt="logo do quiz">
        </div>
    </header>

<!--Chamando a função de exibir as perguntas-->
        <div class="perguntas contpag">
            <?php exibirQuestao($valor);?><br>
        </div>

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
                        <a href="mailto:flavia.macena@escolar.ifrn.edu.br" class="footer-link" target="blank">Flávia Jamily</a>
                    </li>
                    <li>
                        <a href="mailto:isabel.natalia@escolar.ifrn.edu.br" class="footer-link" target="blank">Isabel Natalia</a>
                    <li>
                        <a href="mailto:lima.sarah@escolar.ifrn.edu.br" class="footer-link" target="blank">Sarah Lima</a>
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