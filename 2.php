<form action="index.php" method="post">

<input type="text" name="timeRem" id="">
<input type="submit" value="Calc">

</form>

<?php


if( isset( $_POST['timeRem']) ) {
   
    $timeRem = $_POST['timeRem'];

    echo 'Заданное число секунд: ' .$timeRem ."<br>";

$intHors = floor($timeRem / 3600);; //Прошло целых часов

echo 'Целых часов: '.$intHors."<br>";

$MinToBe = floor((($timeRem/60))-($intHors*60)); // Прошло минут от последнего часа

echo 'Минут с начала часа: '.$MinToBe."<br>";

$SekToBe = $timeRem - (floor($timeRem / 60)*60);// Прошло секунд с начала очередной минуты

echo 'Секунд с начала очередной минуты: '.$SekToBe."<br>"."<br>"."<br>";

}

?>