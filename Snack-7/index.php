<?php 

$students = [
[
    'nome' => 'tizio',
    'cognome' => 'rossi',
    'voti' => [ 5, 7, 8, 4, 10]
],
[
    'nome' => 'carlo',
    'cognome' => 'bianchi',
    'voti' => [ 3, 7, 9, 4, 6]
],
];

for($i = 0; $i < count($students); $i++){

    $avgScore = array_sum( $students[$i]['voti'] )/ count($students[$i]['voti']);
    
    echo $students[$i]['nome'] . ' - ' . $students[$i]['cognome'] . ' la media dei voti è : ' . $avgScore;
    echo "<br/>";

}




?>