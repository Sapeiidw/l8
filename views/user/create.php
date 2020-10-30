<?php 
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
        $data = [
        "username" => $_POST['username'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        ];
        $u = new Users;
        $u->create($data);
        if (isset($_SESSION['username'])) {
            header("location: index.php?f=user");
        }else {
            header("location: index.php?f=login");
        }        
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="?f=register" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='username' placeholder="username">
    <input type="email" class="form-control mt-2" name='email' placeholder="email">
    <input type="password" class="form-control mt-2" name='password' placeholder="password">
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
