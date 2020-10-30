<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
            $by = ["id",$_POST['id']];
            $u->update($data,$by);
            // print_r($u->upadate());
        }
    }
    foreach ($u->edit(["id",$param]) as $data) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="?f=user&&edit=<?php echo $param; ?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name='username' value="<?php echo $data['username']  ?>">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name='email' value="<?php echo $data['email']  ?>">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" name='password' value="<?php echo $data['password']  ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>