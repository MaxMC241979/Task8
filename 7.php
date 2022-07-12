
<form action="index.php" method="post">

<input type="text" name="string" id="">
<input type="submit" value="Calc">

</form>

<?php

if( isset( $_POST['string']) ) {
   
    $string = $_POST['string'];

echo 'Строка: '.$string."<br>";

if ($string[1] == $string[3]) { 
    echo "Cимволы 2 и 4 одинаковые";
} else {
   echo "Символы 2 и 4 отличаются";
}
}

?>