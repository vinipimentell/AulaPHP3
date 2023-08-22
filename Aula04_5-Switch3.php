<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Estruturas switch case em PHP </h1>
 
   <?php
$hora = 18;

switch (true) { 
 case ($hora >= 6 && $hora < 12):
    echo "Bom dia";
 break;
      case ($hora >=12 && $hora < 18):
        echo "Boa tarde";
        break;
            default:
            echo "Boa noite";
        }
   ?>
</body>
</html>