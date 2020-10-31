<?php

use Classes\Matkul;
use Classes\Users;

foreach ($data as $course) :
?>
<div class="card">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="<?= BASEPATH."course/".$course['id']."/edit"?>" method="post" class="form-group">
            <input type="hidden" name="id" value="<?echo $course['id'] ?>">
            <div class="form-group">
                <label for="id_matkul">Matkul</label>
                <select name="id_matkul" class="custom-select">
                <?php
                    foreach (Matkul::ListMatkul() as $matkul) {
                        if ($matkul['id'] == $course['id_matkul']) {
                            echo '<option selected value="'.$matkul['id'].'">'. $matkul['name'] .'</option>';
                        }else {
                            echo '<option value="'.$matkul['id'].'">'. $matkul['name'] .'</option>';
                        }
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_user">Dosen</label>
                <select name="id_user" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach (Users::ListUsers() as $user) {
                        if ($user['id'] == $course['id_user'] ) {
                            echo '<option selected value="'.$user['id'].'">'. $user['username'] .'</option>';
                        } else {
                            echo '<option value="'.$user['id'].'">'. $user['username'] .'</option>';
                        }
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-2" name="name" placeholder="name" value="<?php echo $course['name'] ?>">    
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>

</div>

    

<?php endforeach; ?>