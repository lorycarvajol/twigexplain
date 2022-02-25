<?php

require_once __DIR__.'/bootstrap.php';

// Create a product list
$products = [
    [
        'name'          => 'ROLLS-ROYCE SILVER GHOST',
        'description'   => 'Considérée comme le modèle le plus abouti de Rolls-Royce, la Silver Ghost 40/50 HP sera la voiture qui marquera au fer la réputation de la marque britannique. Elle est l’une des premières à réduire le bruit de son moteur. Avec sa carrosserie argentée, elle fait l’effet d’un joyau qui se déplace.',
        'value'         =>  57000000.00,
        'date_register' => '2017-06-22',
    ],
    [
        'name'          => 'JAGUAR TYPE-E',
        'description'   => 'En 2021, la Jaguar Type-E fête ses 60 ans d’existence. Ce coupé est devenu à l’époque une véritable icône grâce à ses performances mais également son prix deux fois moins cher face à la concurrence. Enzo Ferrari avouera même que c’est la plus belle voiture du monde. ',
        'value'         =>  700000.00,
        'date_register' => '2017-10-25',
    ],
    [
        'name'          => 'FERRARI TESTAROSSA',
        'description'   => 'Présentée sous les projecteurs du Lido de Paris sur les Champs-Élysées en avant-première du Mondial de l\'automobile de Paris en 1984, elle est l’une des dernières créations d’Enzo Ferrari. Ses phares escamotables, ses entrées d\'air latérales dans les portières, ses ailes arrière et sa vitesse de pointe de 290 km/h ont séduit les amateurs de la marque au cheval cabré.',
        'value'         =>  100000.00,
        'date_register' => '2017-06-23',
    ],
];

// Render our view
echo $twig->render('index.html', ['products' => $products] );