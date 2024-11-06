<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Exercício 1</title>
</head>
<body>
    <div>
        <fieldset>
            <legend>Soma de Números</legend>
            <form method="post">
                <br>
                <label for="numero1">Número 1</label>
                <input placeholder="Primeiro número para soma" type="number" name="numero1" id="numero1" required>
                <br><br>
                <label for="numero2">Número 2</label>
                <input placeholder="Segundo número para soma" type="number" name="numero2" id="numero2" required>
                <br><br>
                <input class="submit" type="submit">
                <input class="submit" type="reset" value="Redefinir">
               
                <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
    
        $resultado = $numero1 + $numero2;
        

    echo "<h3>Resultado: $numero1 + $numero2 = $resultado</h3>";
} 
?>
</form>
</fieldset>
<a class="bt" href="../index.html">Ir para Lista</a>
</div>
</body>
</html>