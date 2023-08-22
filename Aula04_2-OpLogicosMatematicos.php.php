<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Operadores Lógicos Matemáticos </h1>
   <?php
   $idade = 25;
   $temPermissao = true;

   if ($idade >= 18 && $temPermissao) {
    echo "Pode entrar na festa!";
   } else {
    echo "Não pode entrar na festa";
   }
   ?>
</body>
</html>