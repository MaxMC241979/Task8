form action="index.php" method="post">

<input type="text" name="cost" id="">
<input type="submit" value="Calc">

</form>

<?php

if( isset( $_POST['cost']) ) {

    $cost = $_POST['cost'];

for ($i=2; $i <= 20; $i++) { 
    echo 'Стоимость '.$i. ': '.$cost * $i."<br>";
}
}
?>