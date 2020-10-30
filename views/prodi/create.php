<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['id_departement']) && !empty($_POST['name'])) {
            $data = [
            "id_departement" => $_POST['id_departement'],
            "name" => $_POST['name'],
            ];
            $d = new Prodies;
            $d->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=prodi");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="?f=prodi&&action=create" method="post" class="form-group col-5">
    <div class="form-group">
        <label for="id_departement">Departement</label>
        <select name="id_departement" class="custom-select">
            <option value="" disable>Choose Departement</option>
        <?php
            $d = new Departements;
            foreach ($d->index() as $d) {
                if ($d['id'] == $data['id_jurusan']) {
                    echo '<option selected value="'.$d['id'].'">'.$d['kode'].' - '. $d['name'] .'</option>';
                }else {
                    echo '<option value="'.$d['id'].' ">'.$d['kode'].' - '. $d['name'] .'</option>';
                }
            }
        ?>
        </select>
    </div>
    <input type="text" class="form-control mt-2" name='name' placeholder="name">
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
</div>
