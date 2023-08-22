<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Estruturas condicionais </h1>
 
   <?php
$idade = 22;

if ($idade >= 18) 
 if ($idade <= 21) {
    echo "Você é um adulto jovem";
} else {
    echo "Você é um adulto";
} 
else {
    echo "Você é menor de idade";
}
   ?>
</body>
</html>