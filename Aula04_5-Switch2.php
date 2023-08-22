<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Estruturas switch case em PHP </h1>
 
   <?php
$nota = 85;

switch (true) { 
 case ($nota >= 90):
    echo "Excelente";
 break;
      case ($nota >=70):
        echo "Você foi bem";
        break;
            default:
            echo "É uma boa ideia estudar mais para a próxima vez.";
        }
   ?>
</body>
</html>