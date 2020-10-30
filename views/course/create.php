<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['id_user']) && !empty($_POST['name']) && !empty($_POST['id_matkul']) ) {
            $data = [
            "name" => $_POST['name'],
            "id_matkul" => $_POST['id_matkul'],
            "id_user" => $_POST['id_user'],
            ];
            $c->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=course");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
    $m = new Matkuls;
    $u = new Users;
?>
<div class="card">
    <div class="card-header">Create Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="?f=course&&action=create" method="post" class="form-group col-5">
            <div class="form-group">
                <label for="id_matkul">Matkul</label>
                <select name="id_matkul" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach ($m->index() as $data_matkul) {
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
                    foreach ($u->index() as $data_user) {
                        echo '<option value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-2" name="name" placeholder="name">    
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>
    </div>
    </div>

</div>
