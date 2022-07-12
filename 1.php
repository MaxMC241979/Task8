
<form action="1.php" method="post">

<input type="text" name="x" id="">
<input type="text" name="y" id="">
<input type="submit" value="Calc">

</form>

<?php

if( isset( $_POST['x']) && isset( $_POST['y'])  ) {
   
    $x = $_POST['x'];
    $y = $_POST['y'];

    $z = ($x+(2+$y)/pow($x,2))/($y+(1/(sqrt($x+10))));
    echo $z."<br>";

    $q = 2.8*sin($x)+abs($y);
    echo $q;
    }

    ?>