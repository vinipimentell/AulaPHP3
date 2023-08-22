<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>  

    <h1> Operadores Lógicos Matemáticos </h1>
   <?php
    $temIngresso = false;
    $temConvite = true; 
    
    if ($temIngresso || $temConvite) {
        echo "Pode entrar no evento";
    } else {
            echo "Não pode entrar no evento";
        }
   ?>
</body>
</html>