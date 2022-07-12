
<form action="index.php" method="post">

<input type="text" name="xx" id="">
<input type="submit" value="Calc">

</form>

<?php

if( isset( $_POST['xx']) ) {

  $xx = $_POST['xx'];

if ($x > 0) {
    $yy = pow(sin($xx),2);
} else {
    $yy = 1-2*(pow(sin($xx),2));
}
echo $yy ;

}
?>