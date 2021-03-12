<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osadnicy - gra przeglądarkowa</title>
</head>
<body>
<?php 
    require('./class/Village.class.php');
    session_start();





    if(!isset($_SESSION['v'])) // jeżeli nie ma w sesji naszej wioski
    {
        echo "Tworzę nową wioskę...";
        $v = new Village();
        $_SESSION['v'] = $v;
        //reset czasu od ostatniego odświerzenia strony
        $deltaTime = 0;
    } 
    else //mamy już wioskę w sesji - przywróć ją
    {
        $v = $_SESSION['v'];
        //ilosc sekund od ostatniego odświerzenia strony
        $deltaTime = time() - $_SESSION['time'];
    }

    $v->gain($deltaTime);

    $_SESSION['time'] = time();

    var_dump($v);
?>
</body>
</html>