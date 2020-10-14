<?php ob_start();

$title = "CREATE AN ACCOUNT" ;
?>



<h1>create an account</h1>




<?php 
$content = ob_get_clean();
require_once("layout.php");

?>