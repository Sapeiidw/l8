<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['kode']) && !empty($_POST['name']) && !empty($_POST['sks']) && !empty($_POST['semester']) && !empty($_POST['prasyarat']) ) {
            $data = [
                "kode" => $_POST['kode'],
                "name" => $_POST['name'],
                "sks" => $_POST['sks'],
                "semester" => $_POST['semester'],
                "prasyarat" => $_POST['prasyarat'],
                ];
            $by = ["id",$_POST['id']];
            $m->update($data,$by);
        }
    }
    $rules = ["id",$param];
    foreach ($m->edit($rules) as $data) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="?f=matkul&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label for="kode">Name</label>
                    <input type="text" class="form-control mt-2" name="kode" value=<?php echo $data["kode"] ?>>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mt-2" name="name" value=<?php echo $data["name"] ?>>
                </div>
                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input type="text" class="form-control mt-2" name="sks" value=<?php echo $data["sks"] ?>>
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" class="form-control mt-2" name="semester" value=<?php echo $data["semester"] ?>>
                </div>
                <div class="form-group">
                    <label for="prasyarat">Prasyarat</label>
                    <select name="prasyarat" class="custom-select">
                        <option selected value="-">-</option>
                    <?php
                    
                        foreach ($m->index() as $d) {
                            if ($data['prasyarat'] == $d['id'] ) {
                                echo '<option selected value="'.$d['id'].'">'. $d['name'] .'</option>';
                            } elseif ($data['id'] == $d['id'] ) {
                                # code...
                            }
                            else {
                                echo '<option value="'.$d['id'].'">'. $d['name'] .'</option>';
                            }
                        }
                    ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>