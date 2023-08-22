<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Estruturas condicionais </h1>
 
   <?php
$loginValido = true;
$idade = 22;

if ($loginValido) { 
 if ($idade >= 18) {
    if ($idade <= 21) {
        echo "Bem vindo(a), adulto jovem!";
} else {
    echo "Bem vindo (a), adulto!";
} 
} else {
    echo "Acesso negado. Você é menor de idade";
}
 } else {
    echo "Acesso negado. Login inválido";
 }
   ?>
</body>
</html>