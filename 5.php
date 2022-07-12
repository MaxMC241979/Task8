
<form action="index.php" method="post">

<input type="text" name="x1" id="">
<input type="text" name="y1" id="">
<input type="submit" value="Calc">

</form>

<?php

if( isset( $_POST['x1']) && isset( $_POST['y1'])  ) {

    $x1= $_POST['x1'];
    $y1 = $_POST['y1'];

for ($i=$x1; $i <= $y1; $i++) { 
    
    if ($i%3 == 0) {
        echo $i."<br>";
    }
}
}
?>