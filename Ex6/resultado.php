<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">

    <title>Resultado Exercício 6</title>
</head>
<body>
    <div>
        <div class="box">
            <?php 
               function calcularFatorial($numero) {
                   $fatorial = 1;
                   
                   for ($i = 1; $i <= $numero; $i++) {
                       $fatorial *= $i;
                   }
                   
                   return $fatorial;
               }
               
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   $numero = $_POST['fatorial'];
                   if (is_numeric($numero) && $numero >= 0) {
                       echo "O fatorial de $numero é: " . calcularFatorial($numero);
                   } else {
                       echo "Por favor, insira um número inteiro não negativo.";
                   }
               }
               ?>
        </div>
        <a class="bt" href="index.php"> Voltar </a>
    </div>
</body>
</html>