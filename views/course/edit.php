<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['id_user']) && !empty($_POST['name']) && !empty($_POST['id_matkul']) ) {
            $data = [
                "name" => $_POST['name'],
                "id_matkul" => $_POST['id_matkul'],
                "id_user" => $_POST['id_user'],
                ];
            $by = ["id",$_POST['id']];
            $c->update($data,$by);
        }
    }
    $m = new Matkuls;
    $u = new Users;
    $rules = ["id",$param];
    foreach ($c->edit($rules) as $data) :
?>
<div class="card">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="?f=course&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group col-5">
            <input type="hidden" name="id" value="<?echo $data['id'] ?>">
            <div class="form-group">
                <label for="id_matkul">Matkul</label>
                <select name="id_matkul" class="custom-select">
                <?php
                    foreach ($m->index() as $data_matkul) {
                        if ($data_matkul['id'] == $data['id_matkul']) {
                            echo '<option selected value="'.$data_matkul['id'].'">'. $data_matkul['name'] .'</option>';
                        }else {
                            echo '<option value="'.$data_matkul['id'].'">'. $data_matkul['name'] .'</option>';
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
                    foreach ($u->index() as $data_user) {
                        if ($data_user['id'] == $data['id_user'] ) {
                            echo '<option selected value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                        } else {
                            echo '<option value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                        }
                        
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-2" name="name" placeholder="name" value="<?php echo $data['name'] ?>">    
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    </div>

</div>

    

<?php endforeach; ?>