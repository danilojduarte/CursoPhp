<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Resultado</title>
</head>
<body>

        <!-- function ($_REQUEST) = è uma junção de $_GET | $_POST | $_COOKIES -->

    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET("nome");
            $s = $_GET("sobrenome");
            echo "<pÉ um prazer te conhecer, $nome $s! Este é o meu site!</p>"
        ?>
    </main>
    
</body>
</html>