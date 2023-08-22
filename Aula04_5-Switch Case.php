<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadesPHP</title>
</head>
<body>

    <h1> Estruturas switch case em PHP </h1>
 
   <?php
$diadasemana = "quarta";

switch ($diadasemana) { 
 case "segunda":
    echo "Hoje é segunda-feira.";
 break;
      case "terça";
        echo "Hoje é terça";
        break;
        case "quarta";
            echo "Hoje é quarta";
            break;
            default ;
            echo "dia inválido";
        }
   ?>
</body>
</html>