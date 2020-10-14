<?php ob_start();
$title = "LOGIN";
?>


<h1>CONNEXION</h1>

<form action="index.php" method="post">
    <input class="form-control" style="width:300px;" type="text" name="" placeholder="login" id=""> <br>
    <input class="form-control" style="width:300px;" type="text" name="" placeholder="password" id=""> <br>
    <button>SUBMIT</button> <button>RESET</button> <br>
    <button name="btn" value="createAccount">Create an account</button>
</form>




<?php 

$content = ob_get_clean();
require_once("layout.php");

?>