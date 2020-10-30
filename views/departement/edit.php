<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['kode']) && !empty($_POST['name']) ) {
            $data = [
                'kode' => $_POST['kode'],
                'name' => $_POST['name'],
            ];
            $by = ["id",$_POST['id']];
            $d->update($data,$by);
            // print_r($d->upadate());
        }
    }
    foreach ($d->edit(["id",$param]) as $data) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="?f=departement&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label for="kode">kode</label>
                    <input type="text" class="form-control" name='kode' value="<?php echo $data['kode']  ?>">
                </div>
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name' value="<?php echo $data['name']  ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>