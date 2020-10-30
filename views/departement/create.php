<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['kode'])) {
            $data = [
            "name" => $_POST['name'],
            "kode" => $_POST['kode'],
            ];
            $d = new Departements;
            $d->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=departement");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="?f=departement&&action=create" method="post" class="form-group col-5">
    <input type="text" class="form-control mt-2" name='name' placeholder="name">
    <input type="text" class="form-control mt-2" name='kode' placeholder="kode">
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
</div>
