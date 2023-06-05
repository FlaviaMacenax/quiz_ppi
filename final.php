<?php

session_start();

$txt = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim do Quiz!</title>
</head>
<body>
    
    <div class = "mesagem-final">
        <h1>"Você chegou ao final do quiz, "<?php echo $_SESSION["nomeJogador"];?> "!"</h1>
    </div>

</body>
</html>