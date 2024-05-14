<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        mb_internal_encoding('UTF-8');
    ?>

    <form action="#" method="GET">
    Number: <input type="number" name="number"><br>
    <input type="submit">
    </form>

    <?php
        if(isset($_GET['number'])){
            $number = $_GET['number'];
            if ($number > 0){
                echo "Имеет положительный знак.";
            }
            else{
                echo "Имеет отрицательный знак.";
            }
        }
    ?>
</body>
</html>


