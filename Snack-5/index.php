<?php 

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestiae, aspernatur sapiente minima est voluptas facere explicabo nisi ea. Repudiandae inventore! Neque ipsam animi ad itaque similique perferendis nam non';

$paragraph = explode('.', $text);



for($i = 0; $i < count($paragraph); $i++){

    echo $paragraph[$i];
    echo '<br/>';

};

?>

