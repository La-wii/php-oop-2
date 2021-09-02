<?php

//require_once 'Users.php';
require_once 'GoldenUsers.php';

$Pippo = new User ('Pippo','Teresa','Via Procioni 1, Milano');
$Pippo->setDiscount(60);

$Ciccio = new User ('Ciccio','Rossi','Via Gatti 10, Milano');
$Ciccio->setDiscount(30);

$Priscilla = new GoldenUser ('Priscilla', 'Verdi', 'Via Panda 20, Milano');
$Priscilla->setGoldenDiscount('30%');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Nome cliente: 
        <?php echo $Pippo->getPrintedInfo();
        ?>
    </p>
    <p>
        Sconto: 
        <?php echo $Pippo->getDiscount() . '%';
        ?>
    </p>
    <hr>
    <p>
        Nome cliente: 
        <?php echo $Ciccio->getPrintedInfo();
        ?>
    </p>
    <p>
        Sconto: 
        <?php echo $Ciccio->getDiscount() . '%';
        ?>
    </p>

    <hr>
    <p>
        Nome cliente: 
        <?php echo $Priscilla->getPrintedInfo();
        ?>
    </p>
    <p>
        Sconto: 
        <?php echo $Priscilla->setGoldenDiscount() . '%';
        ?>
    </p>
    
</body>
</html>