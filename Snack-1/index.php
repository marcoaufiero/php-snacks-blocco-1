<?php 

$matches = [
    [
        'mainTeam' => 'Milano',
        'opponentTeam' => 'Cantù',
        'mainScore' => 55,
        'opponentScore' => 60,
    ],
    [
        'mainTeam' => 'Genova',
        'opponentTeam' => 'Bari',
        'mainScore' => 70,
        'opponentScore' => 80,
    ],
    [
        'mainTeam' => 'Treviso',
        'opponentTeam' => 'Palermo',
        'mainScore' => 70,
        'opponentScore' => 80,
    ]

    ];

    for($i = 0; $i < count($matches); $i++){
        echo $matches[$i]['mainTeam'] . '-' . $matches[$i]['opponentTeam'] . '|' . $matches[$i]['mainScore'] . '-' . $matches[$i]['opponentScore'];
        echo '<br/>';
    };

?>