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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP HOTEL</title>
</head>
<body>
    <div class="container">
        <h1>Hotels List:</h1>
        <div class="row">
            <div class="col-12">
                <?php foreach($hotels as $hotel) { ?>
                <h2><?php echo $hotel['name'] ?></h2>
                <h5><?php echo $hotel['description'] ?></h5>
                <h5><?php echo $hotel['parking'] ?></h5>
                <h5><?php echo $hotel['vote'] ?></h5>
                <h5><?php echo $hotel['distance_to_center'] ?></h5>


                <?php } ?>
            </div>


            
        </div>
    </div>

    <table style="width:100%">

        <?php foreach($hotels as $hotel) { ?>

        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Parking</th>
            <th>Vote</th>
            <th>Distance to center</th>
        </tr>
        <tr>
            <td><p><?php echo $hotel['name'] ?></p></td>
            <td><p><?php echo $hotel['description'] ?></p></td>
            <td><p><?php echo $hotel['parking'] ?></p></td>
            <td><p><?php echo $hotel['vote'] ?></p></td>
            <td><p><?php echo $hotel['distance_to_center'] ?></p></td>

        </tr>
        <?php } ?>

    </table>
</body>
</html>