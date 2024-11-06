<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 7</title>
</head>
<body>
    <div>
        <div class="box">

        <?php
function calcularMedia($numeros) {
    $arrayNumeros = array_map('trim', explode(',', $numeros));

    $arrayNumeros = array_filter($arrayNumeros, 'is_numeric'); 
    
    // Calcula a média dos números
    $soma = array_sum($arrayNumeros);
    $media = $soma / count($arrayNumeros);

    return $media;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];

    if (!empty($numeros)) {
        $media = calcularMedia($numeros);
        echo "A média dos números inseridos é: $media";
    } else {
        echo "Por favor, insira uma lista de números.";
    }
}
?>
        </div>
        <a class="bt" href="index.php"> Voltar </a>
        </div>
</body>
</html>