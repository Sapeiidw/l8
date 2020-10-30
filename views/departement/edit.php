<?php  
  foreach ($data as $departement) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="<?= BASEPATH."departement/".$departement['id']."/edit"?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $departement['id'] ?>">
                <div class="form-group">
                    <label for="kode">kode</label>
                    <input type="text" class="form-control" name='kode' value="<?php echo $departement['kode']  ?>">
                </div>
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name='name' value="<?php echo $departement['name']  ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>