<?php
    foreach ($data as $user) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="/pabw-oop/user/<?php echo $user['id'] ?>/edit" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name='username' value="<?php echo $user['username']?>">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name='email' value="<?php echo $user['email']?>">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" name='password' value="<?php echo $user['password']  ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>

