<?php 

$arrayNumbers = randomNumbers(15);

function randomNumbers($nItems){
    $array = [];
    
    for($i = 0; $i < $nItems; $i++){
        
        $number = rand(1,100);
        if(!in_array($number, $array)){
            $array[] = $number;
        }else{
            $i--;
        };

    };

    echo '<pre>';
    var_dump($array);
    echo '<pre/>';

};

?>