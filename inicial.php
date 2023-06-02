<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo_quiz.css" />
    <title>O quanto você sabe sobre Taylor Swift?</title>
</head>
<body>
    <!-- Cabeçalho -->
    <header class="container">
      <div class="logo">
        <img src="imagens/rascunhos.png" width="200" height="106" alt="logo do quiz">
      </div> 
    </header>

    <!--Apresentação do quiz-->
  <section class="secao-1 container">
    <div class="apresentacao">
        <img src="imagens/iconeTS.png" width="325px" height="auto" alt="ícone de Taylor Swift">
    </div>

    <div class="texto-apresentacao">
        <h2>O quanto você sabe sobre a cantora americana Taylor Swift ?</h2>
    </div>
</section>
 
<!--Cadastro do nome do jogador-->
<section class="cadastro container">
    <form action="inicial.php" method="post" ></form>
    Qual seu nome? <input type="text" name="nome">
    <button type= "submit" name= "enviar">Enviar</button>
</section>

<!-- Opções do menu-->
<section class="secao-2 container">
  <h2>Menu inicial</h2>
  <div class="topicos">

      <div class="topico">
        <a href="quiz.php"><img src="imagens/iniciar.png" width="100px" height="auto" alt="icone de início"></a>
           INICIAR JOGO
      </div>

      <div class="topico">
          <a href="instruções.php"><img src="imagens/instruçoes.png"width="100px" height="auto" alt="ícone de instruções"></a>
          INSTRUÇÕES
      </div>

      <div class="topico">
          <a href="creditos.php"><img src="imagens/créditos.png" width="100px" height="auto" alt="ícone de créditos"></a>
          CRÉDITOS
      </div>

  </div>
</section>

</body>
</html>