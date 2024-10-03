<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $colore = 'g';
        function scegliColore($colore) {
            switch ($colore) {  
                case 'r':
                    return 'red';
                break;
                case 'g':
                    return 'green';
                break;
                case 'b':
                    return 'blue';
                break;
                default:
                    return 'black';
                break;
            }
        }
        $colore = scegliColore($colore);
            echo "<p style='color:$colore'>Questo paragrafo ha la propietà color con valore $colore</p>";
    ?>
</body>
</html>