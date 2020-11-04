<h1>Index PHP</h1>

<?php 
if (!isset($_SESSION['username'])) {
    header("Location: http://localhost".BASEPATH."login");
}
echo @$_SESSION['email']; 
var_dump($_SESSION);

?>