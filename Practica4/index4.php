<?php
    include 'Practica4.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propierties and Methods</title>
</head>
<body>
    <?php
        $person1 = new Person("Daniel","Brown",33);
        echo $person1->name;
        echo $person1->eyeColor;
        echo $person1->age;
        $person1->setName("Berrier");
        echo $person1->name;
        echo $person1->getName();
    ?>
</body>
</html>