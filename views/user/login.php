<?php 
    // $u = new Users;
    if (isset($_SESSION['username'])) {
        header("location: /pabw-oop/user/".$_SESSION['id']);
    }
?>

<div class="container">
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <!-- <?php
            if (isset($login)) {
                echo '<div class="alert alert-danger">'. $login["status"].'</div>';
            }
            ?> -->
            <form action="/pabw-oop/login" method="post" class="form-group">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name='email'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name='password'>
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        
        </div>
    </div>
</div>
