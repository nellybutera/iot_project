<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
            font-family: 'Roboto';
        }
        a{
            text-decoration: none;
            text-align: center;
            font-size: 1em;

        }
        p{
            text-align: center;
        }
        div{
            /* background-color: black; */
            margin-top: 10%;
            margin-left: 35%;
            padding: 5%;
            color: Black;
            height: 5em;
            width: 20%;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php

    require_once 'db_connection.php';

    $device =  $_POST['device'];
    $temperature = $_POST['temperature'];

    $insertQuery = mysqli_query($conn,"INSERT INTO nelly_sensordata( device, temperature) VALUES ('$device','$temperature');");
    if($insertQuery){
        echo "<div>";
        echo "   <h1>Data Recorded</h1>";
        echo "<a href=\"http://localhost/iot/fetched_data.php\"><p>View Collected Data</p></a>";
        echo "</div>";

    }else{
        echo " " . mysqli_error($conn);
    }

    
?>