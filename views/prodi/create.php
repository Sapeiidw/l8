<?php 

use Classes\Departement;
    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }     
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."prodi/create"?>" method="post" class="form-group col-5">
    <div class="form-group">
        <label for="id_departement">Departement</label>
        <select name="id_departement" class="custom-select">
            <option value="" disable>Choose Departement</option>
        <?php
            foreach (Departement::getForProdi() as $d) {
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
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
