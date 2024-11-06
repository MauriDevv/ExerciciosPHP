<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 3</title>
</head>
<body>
    <div>
        <div class="box">

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];

        if ($numero1 % 2 === 0) {
            echo "$numero1 é par.";
        } else {
            echo "$numero1 é ímpar.";
        }
    }
    ?>

<BR>
    </div>
    <a class="bt" href="index.php"> Voltar </a>
        </div>
</body>
</html>