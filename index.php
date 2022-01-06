<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hod kostkou</title>
</head>
<body>
<h1>Kostky</h1>
<?php 
$diceCount = 8;
function sumDice(int $diceCount) {
$summary = 0;
for ($i=0; $i < $diceCount ; $i++) { 
$summary += rand(1,6);
}
return $summary;
}
echo sumDice(2);
 ?>
</body>
</html> 
