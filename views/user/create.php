<?php 
    if(isset($_SESSION['username']) AND $_SESSION['role'] != "admin" ){
        header("Location:". BASEPATH);
    }else if(isset($_SESSION['username']) AND $_SESSION['role'] == "admin" ){
        echo "Admin can create user";
    }else {
        header("Location:". BASEPATH."login");
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?= BASEPATH ?>register" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='username' placeholder="username">
    <input type="email" class="form-control mt-2" name='email' placeholder="email">
    <input type="password" class="form-control mt-2" name='password' placeholder="password">
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
