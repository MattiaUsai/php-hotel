<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-md pt-5">
    <h1 class="text-center mb-5">Tabella di hotel</h1>
    <!-- TABELLA HOTEL -->
    <table class="table ">
        <thead>
            <!-- INTESTAZIONE TABELLA -->
            <tr>
            <th scope="col">Nome Hotel</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Valutazione</th>
            <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <!-- INIZIO FOREACH -->
            <?php foreach($hotels as $hotel) {?> 
            <tr>
                <!-- NOME HOTEL -->
                <th scope="row"><?php echo $hotel['name'];?></th>
                <!-- DESCRIZIONE HOTEL -->
                <td><?php echo $hotel['description'];?></td>
                <!-- PARCHEGGIO HOTEL CON CONDIZIONE  -->
                <td><?php if($hotel['parking']) {echo '&checkmark;';}else{echo '&cross;';} ;?> </td>
                <!-- VOTO HOTEL -->
                <td><?php echo $hotel['vote'];?></td>
                <!-- DISTANZA DAL CENTRO DELL'HOTEL -->
                <td><?php echo $hotel['distance_to_center'];?></td>
            </tr>
            <?php } ?><!--FINE FOREACH-->
        </tbody>
    </table>

</div>
</body>
</html>