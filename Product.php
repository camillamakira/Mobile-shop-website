<?php
ob_start();
//include header.php file
include('header.php');
?>

<?php
/* include product area*/
include ('Template/_product.php');
/* include product area*/

/* include top sale area*/
include ('Template/_top-sale.php');
/* include top sale area*/


?>


<?php
ob_start();
//include footer.php file
include('footer.php');
?>

