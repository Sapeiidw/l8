<?php 
    if (isset($_SESSION['username'])) {
        header("location: /pabw-oop/");
    }else {
        header("location: /pabw-oop/login");
    }        
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="pabw-oop/register" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='username' placeholder="username">
    <input type="email" class="form-control mt-2" name='email' placeholder="email">
    <input type="password" class="form-control mt-2" name='password' placeholder="password">
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
