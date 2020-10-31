<?php 

use Classes\Matkul;
use Classes\Users;

    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }   
?>
<div class="card">
    <div class="card-header">Create Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="<?=  BASEPATH."course/create"?>" method="post" class="form-group col-5">
            <div class="form-group">
                <label for="id_matkul">Matkul</label>
                <select name="id_matkul" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach (Matkul::listMatkul() as $data_matkul) {
                        echo '<option value="'.$data_matkul['id'].'">'. $data_matkul['name'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_user">Dosen</label>
                <select name="id_user" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach (Users::listUsers() as $data_user) {
                        echo '<option value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-2" name="name" placeholder="name">    
            </div>
            <button type="submit" class="btn btn-primary" >Create</button>
        </form>
    </div>
    </div>

</div>
