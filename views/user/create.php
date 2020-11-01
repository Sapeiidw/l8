<?php 
    if(isset($_SESSION['username']) AND $_SESSION['role'] != "admin" ){
        header("location: ".BASEPATH."user/".$_SESSION['id']);
    }else if(isset($_SESSION['username']) AND $_SESSION['role'] == "admin" ){
        // echo "Admin can create user";
    }
?>
<!-- <div class="container d-flex justify-content-center align-items-center">
<form action="<?= BASEPATH ?>register" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='username' placeholder="username">
    <input type="email" class="form-control mt-2" name='email' placeholder="email">
    <input type="password" class="form-control mt-2" name='password' placeholder="password">
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div> -->

<div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;background: #3B267D ">
    <div class="card">
        
        <div class="card-body">
            <h4 class="card-title text-center font-weight-lighter text-uppercase">register</h4>
            <form action="<?=BASEPATH?>register" method="post" class="form-group" style="max-width:30rem;width:80vw;">
                <div class="col">
                <div class="form-group">
                    <label class="text-secondary" for="username">Username</label>
                    <input type="username" class="form-control py-3 px-3" name='username' placeholder="example">
                </div>
                <div class="form-group">
                    <label class="text-secondary" for="email">Email</label>
                    <input type="email" class="form-control py-3 px-3" name='email' placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label class="text-secondary" for="password">Password</label>
                    <input type="password" class="form-control py-3 px-3" name='password' placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>
                
                <button type="submit" class="btn btn-primary px-4 mr-2">Submit</button>
                <a href="<?=BASEPATH?>login" class="text-muted">Already have an account sign in here!</a>
                </div>
            </form>
        
        </div>
    </div>
</div>