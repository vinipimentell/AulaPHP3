<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Operações Relacionais </h1>

   <?php
$idade = 25;
$temcarteirademotorista = true;

if ($idade && $temcarteirademotorista) {
    echo "Pode dirigir";
} else {
    echo "Não pode dirigir";
}
   ?>
</body>
</html>