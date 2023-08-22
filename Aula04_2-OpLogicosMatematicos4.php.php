<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Operadores Lógicos Matemáticos </h1>
   <?php
$idade = 20;
$temautorizacao = true;
$tempermissao = true;

if (($idade >= 18 && $temautorizacao)|| $tempermissao) {
    echo "Pode acessar este conteúdo";
} else {
    echo "Não pode acessar este conteúdo";
}
?>
</body>
</html>