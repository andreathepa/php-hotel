<?php

    include __DIR__."/partials/template/hotels.php";

    if (isset($GET['parking'])){
        foreach($hotels as $index => $hotel){
            echo $hotel['parking'];
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP HOTEL</title>
</head>
<body>

    


    

    <header>
        <div class="container p-3">
            <div><h1>LIST HOTELS</h1></div>
    </header>

    <div class="container mt-3">
        <div class="row">
            <div class="col-5">
                <form action="index.php" method="GET">
                    <label class="control-label">Parcheggio</label>
                    <select name="parking" class="form-control">
                        <option value="">Seleziona hotel con parcheggio o non</option>
                        <option value="0">No</option>
                        <option value="1">Sì</option>
                    </select>
                    <div class="mt-2">
                        <button class="btn btn-primary" type="submit">Invia ricerca</button>

                    </div> 
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table style="width:100%" class="text-center table table-striped table-hover border">
            
                    <thead>
                        <tr class="main-tr">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Parking</th>
                            <th>Vote</th>
                            <th>Distance to center</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php foreach($hotels as $hotel) { ?>
                        <tr>
                            
    
                            <td><p><?php echo $hotel['name'] ?></p></td>
                            <td><p><?php echo $hotel['description'] ?></p></td>
                            <td><p><?php echo $hotel['parking'] ?></p></td>
                            <td><p><?php echo $hotel['vote'] ?></p></td>
                            <td><p><?php echo $hotel['distance_to_center'] ?></p></td>
    
                            
                        </tr>
                        <?php } ?>
                        

                    </tbody>
            
                </table>

            </div>
        </div>
    </div>

</body>
</html>
