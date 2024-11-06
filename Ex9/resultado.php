<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 9</title>
</head>
<body>
    <div>
        <div class="box">
<?php 


function contarPalavras($texto) {
    $palavras = array_filter(explode(' ', $texto), 'strlen'); 

    $contagem = array_count_values($palavras);

    return $contagem;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];

    if (!empty($texto)) {
        $resultado = contarPalavras($texto);

        // Exibe o resultado
        echo "<h2>Contagem de palavras:</h2>";
        foreach ($resultado as $palavra => $contagem) {
            echo "A palavra <strong>'$palavra'</strong> aparece <strong>$contagem</strong> vez(es).<br>";
        }
    } else {
        echo "Por favor, insira uma lista de palavras.";
    }
}

?>
<BR>
    </div>
    <a class="bt" href="index.php"> Voltar </a>
        </div>
</body>
</html>