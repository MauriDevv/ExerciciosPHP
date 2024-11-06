<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 8</title>
</head>
<body>
    <div>
        <div class="box">
<?php
        function verificarAnoBissexto($ano) {
    // Um ano é bissexto se for divisível por 4, mas não por 100, exceto se for divisível por 400
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true; 
    } else {
        return false; 
    }
}

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST['ano'];

 if (is_numeric($ano)) {
    if (verificarAnoBissexto($ano)) {
        echo "O ano $ano é bissexto.";
    } else {
        echo "O ano $ano não é bissexto.";
    }
} else {
    echo "Por favor, insira um ano válido.";
}

}
?>


<BR>
    </div>
    <a class="bt" href="index.php"> Voltar </a>
        </div>
</body>
</html>