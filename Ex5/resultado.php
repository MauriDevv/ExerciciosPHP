<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 5</title>   

</head>
<body>
<div>
    <div class="box">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $textoo = $_POST['texto'];

        function verificarPalindromo($str) {
            $strLimpa = preg_replace("/[^A-Za-z0-9]/", "", strtolower($str));
            return $strLimpa === strrev($strLimpa);
        }

        // Chama a função e exibe o resultado
        if (verificarPalindromo($textoo)) {
            echo "<p><strong>'$textoo'</strong> é um palíndromo.</p>";
        } else {
            echo "<p><strong>'$textoo'</strong> não é um palíndromo.</p>";
        }
    }
    ?>
    </div>
    <a class="bt" href="index.php"> Voltar </a>
</div>
</body>
</html>