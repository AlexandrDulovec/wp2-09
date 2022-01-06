<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getPES</title>
</head>
<body>
    <?php
    $pocetnakazenych = rand(1, 250000);
    function getPES(int $pocetnakazenych){
        if( $pocetnakazenych <= 10000 ) {$pes = 1;}
        elseif(( $pocetnakazenych > 10000 ) && ( $pocetnakazenych <= 50000)) {$pes = 2;}
        elseif(( $pocetnakazenych > 50000 ) && ( $pocetnakazenych <= 100000)) {$pes = 3;}
        elseif(($pocetnakazenych > 100000 ) && ( $pocetnakazenych <= 200000)) {$pes = 4;}
        elseif($pocetnakazenych > 200000) {$pes = 5;}
        return $pes;
    }
    echo getPES($nakazeni)
    ?>
    <?php echo getPES(10000); // vypíše 1 ?><br>
    <?php echo getPES(50000); // vypíše 2 ?><br>
    <?php echo getPES(100001); // vypíše 4 ?><br>
</body>
</html> 
