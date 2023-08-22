    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>
<?php 
    $num01 = filter_input(INPUT_POST, "txtNumero1");
    $num02 = filter_input(INPUT_POST, "txtNumero2");
    $resul = ($num01+$num02);  

    ?>
    <h1> Exemplo de Formulário </h1>
    <form method="post">
        <Label>Numero 1: <input type="text" name="txtNumero1"/></Label> <br>
        <Label>Numero 2: <input type="text" name="txtNumero2"/></Label> <br>
        <br>
        <input type="submit" name ="btnCalcular" value="Calcular">
    </form>
    <h1>resultado </h1>
    <?php
    echo $resul;
    ?>
</body>
</html>