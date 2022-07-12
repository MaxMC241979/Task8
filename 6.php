<form action="index.php" method="post">

<input type="text" name="str" id="">
<input type="submit" value="Calc">

</form>

<?php

if( isset( $_POST['str']) ) {
   
    $str = $_POST['str'];

if (strlen($str)%2 == 0) { // Только для русских букв
    echo "Количество символов четноe";
} else {
   echo "Количество символов не четноe";
}
}
?>