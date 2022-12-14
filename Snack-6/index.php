<?php 

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$arrayKeys = array_keys( $db );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

<?php for( $i = 0; $i < count( $arrayKeys ); $i++ ){ ?>

        <?php if( $arrayKeys[$i] == 'teachers'){ ?>
               
            <div class="grey">
               <?php for( $k=0; $k < count( $db['teachers']); $k++ ){ ?>
                <ul>
                    <li>
                        <?php echo $db['teachers'][$k]['name'] . ' - ' . $db['teachers'][$k]['lastname'] ?>
                    </li>
                </ul>
               <?php } ?>
            </div>

        <?php } else { ?>

            <div class="green">
               <?php for( $k=0; $k < count( $db['teachers']); $k++ ){ ?>
                <ul>
                    <li>
                        <?php echo $db['pm'][$k]['name'] . ' - ' . $db['pm'][$k]['lastname'] ?>
                    </li>
                </ul>
               <?php } ?>
            </div>
        <?php  } ?> 

    <?php } ?>
    
    
    


</body>
</html>