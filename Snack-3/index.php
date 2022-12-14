<?php 

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giacomo Poretti',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Aldo Baglio',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Gerry Scotti',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Giovanni Storti',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Mario Rossi',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys($posts);

for($i = 0; $i < count($posts); $i++){
    
    echo $keys[$i];
    echo '<br/>';
    
    for($k = 0; $k < count($posts[$keys[$i]]); $k++){
        echo $posts[$keys[$i]][$k]['title'];
        echo '<br/>';
        echo $posts[$keys[$i]][$k]['author'];
        echo '<br/>';
        echo $posts[$keys[$i]][$k]['text'];
        echo '<br/>';
        echo '<br/>';

    }
};
    
    




?>
