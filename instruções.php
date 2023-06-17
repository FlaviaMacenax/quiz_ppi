<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importação da fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Importação dos ícones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Ícone da barra do navegador-->
    <link rel="icon" type="image/x-icon" href="imagens/icon.png">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="estilo_quiz.css" />
    <title>Como jogar?</title>
</head>
<body>
     <!--Página de instruções com informações de como funciona e como jogar o quiz-->
        <!-- Cabeçalho -->
        <header class="container">
            <div class="logo">
                <img src="imagens/logo.png" width="275" height="auto" alt="logo do quiz">
            </div> 
        </header>

        <!-- Botão voltar-->
        <section class="menu contpag">
            <div class="voltar">
                <a href="menu.php">Voltar</a>
            </div>
        </section>

        <!-- Instruções -->
        <section class="contpag secao-instru">
            <div class="instruções">
                <h2>Como jogar? <i class="fa-solid fa-circle-info fa-bounce"></i></h2>
                    <p>O Taylor Swift Quiz é um jogo de perguntas e respostas, onde para cada pergunta lhe são fornecidas quatro 
                    alternativas e apenas uma é correta. Você deve descobrir qual opção é a correta para conseguir acumular 
                    a maior quantidade de pontos.</p>
                    <p id="ultimo">É necessário que você insira seu nome e o envie para iniciar uma partida. Para cada resposta certa você 
                        ganha 100 pontos e uma resposta errada não lhe faz ganhar pontos. Será que você é um verdadeiro swifter?</p>
            </div>
            <div class="instruções">
                <img src="imagens/iconquiz.png" width="550px" height="auto" alt="ícone das instruções">
            </div>
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