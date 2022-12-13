<?php 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

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
    
    <form action="" method='GET'>
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="mail" name="mail">
        <input type="number" placeholder="age" name="age">
        <button type="submit">Submit</button>
    </form>

    <?php 
    
    if(strlen($name) > 3 && strpos($mail, '.') != false && strpos($mail, '@') != false && is_numeric($age)) {

        echo ('Accesso riuscito');
    
    }else{
        
        echo ('Accesso negato');
    };

    
    ?>

</body>
</html>