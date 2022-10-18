<?php
    include 'Practica3.php';
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
        $person1 = new Person();
        $person1->setName("Israel","green","eye");
        echo $person1->name, $person1->eyeColor,$person1->eye;
        $person2 = new Person();
        $person2->setName("Rigiel","gold","eyed");
        echo $person2->name, $person2->eyeColor,$person2->eye;
    ?>
</body>
</html>