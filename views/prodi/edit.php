<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['id_departement']) && !empty($_POST['name']) ) {
            $data = [
                'id_departement' => $_POST['id_departement'],
                'name' => $_POST['name'],
            ];
            $by = ["id",$_POST['id']];
            $p->update($data,$by);
            print_r($p->update($data,$by));
        }
    }
    $rules = ["id",$param];
    foreach ($p->edit($rules) as $data) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="?f=prodi&&action=edit&&param=<?php echo $param; ?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label for="id_departement">id_departement</label>
                    <select name="id_departement" class="custom-select">
                    <?php
                        $d = new Departements;
                        foreach ($d->index() as $d) {
                            if ($d['id'] == $data['id_departement']) {
                                echo '<option selected value="'.$d['id'].'">'.$d['kode'].' - '. $d['name'] .'</option>';
                            }else {
                                echo '<option value="'.$d['id'].' ">'.$d['kode'].' - '. $d['name'] .'</option>';
                            }
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $data['name']  ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>