<?php 
    if (isset($_SESSION['username'])) {
        header("location: ".BASEPATH."user/".$_SESSION['id']);
    }
?>

<div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;background: #3B267D ">
    <div class="card">
        
        <div class="card-body">
            <h4 class="card-title text-center font-weight-lighter">LOGIN</h4>
            <form action="<?=BASEPATH?>login" method="post" class="form-group" style="max-width:30rem;width:80vw;">
                <div class="col">
                <div class="form-group">
                    <label class="text-secondary" for="email">Email</label>
                    <input type="email" class="form-control py-3 px-3" name='email' placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label class="text-secondary" for="password">Password</label>
                    <input type="password" class="form-control py-3 px-3" name='password' placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>
                
                <button type="submit" class="btn btn-primary px-4 mr-2">Login</button>
                <a href="<?=BASEPATH?>register" class="text-muted">Don't have an account register here!</a>
                </div>
            </form>
        
        </div>
    </div>
</div>