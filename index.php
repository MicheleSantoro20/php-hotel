<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
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

<?php 
?>
<form method="GET" action="index.php">
    <label for="parking">Parcheggio?</label>
    <select name="parcheggio" id="parking">
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>
    <button type="Submit">Avvia ricerca</button>
    <button type="Reset">Reset</button>

</form>

<table class="table table-hover table-dark">
    <thead>
        <tr>
            <?php
                foreach($hotels[0] as $chiave => $valore) {
                    echo '<th scope="col">' . $chiave . '</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($hotels as $hotel) {
                echo  '<tr>';
                if ($hotel['parking'] == true) {
                    $hotel['parking'] = 'Si';
                } else {
                    $hotel['parking'] = 'No';
                };
                foreach ($hotel as $chiave => $valore) {
                    echo  '<td>' . $valore . '</td>';
                };
                echo  '</tr>';
            };
        ?>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>

