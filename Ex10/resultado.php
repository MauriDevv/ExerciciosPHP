<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 10</title>
</head>
<body>
    <div>
        <div class="box">
       
    
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        list($ano, $mes, $dia) = explode("-", $data);
    
        if (checkdate($mes, $dia, $ano)) {
            echo "A data $data é válida!";
        } else {
            echo "A data $data não é válida!";
        }
    } else {
        echo "Nenhuma data foi enviada!";
    }

}
?>


<BR>
    </div>
    <a class="bt" href="index.php"> Voltar </a>
        </div>
</body>
</html>