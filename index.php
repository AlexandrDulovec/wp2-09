<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PES</title>
</head>
<body>
<?php
$pocetNakazenych = 55555
if($pocetNakazenych <= 10000){
   echo "PES 1";
}elseif(($pocetNakazenych >= 10001) && ($pocetNakazenych < 50000)){
   echo "PES 2";
}elseif(($pocetNakazenych >= 50001) && ($pocetNakazenych < 100000)){
    echo "PES 3";
}elseif(($pocetNakazenych >= 100001) && ($pocetNakazenych < 200000)){
    echo "PES 4";
}else {
    echo "PES 5";
}
$return 
?>
</body>
</html>