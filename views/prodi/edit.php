<?php
    use Classes\Departement;
    foreach ($data as $prodi) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="<?= BASEPATH."prodi/".$prodi['id']."/edit"?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $prodi['id'] ?>">
                <div class="form-group">
                    <label for="id_departement">id_departement</label>
                    <select name="id_departement" class="custom-select">
                    <?php
                        
                        foreach (Departement::getForProdi() as $d) {
                            if ($d['id'] == $prodi['id_departement']) {
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
                    <input type="text" class="form-control" name="name" value="<?php echo $prodi['name']  ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>
