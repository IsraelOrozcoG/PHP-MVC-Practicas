<?php
    include 'Practica2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility and Inheritance</title>
</head>
<body>
    <?php
        $owner1 = new Person();
        $pet01 = new Pet();

        echo $owner1->owner();
        echo  $pet01->owner();
    ?>
</body>
</html>