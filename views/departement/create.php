<?php 
    if (!isset($_SESSION['username'])) {
        header("location: /pabw-oop/login");
    }        
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."departement/create"?>" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='name' placeholder="name">
    <input type="text" class="form-control mt-2" name='kode' placeholder="kode">
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
</div>
