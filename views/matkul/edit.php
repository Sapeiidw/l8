<?php
// use Classes\Matkul;
    foreach ($data as $matkul) :
?>
<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="<?= BASEPATH."matkul/".$matkul['id']."/edit"?>" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $matkul['id'] ?>">
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control mt-2" name="kode" value="<?php echo $matkul["kode"] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mt-2" name="name" value="<?php echo $matkul["name"] ?>">
                </div>
                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input type="text" class="form-control mt-2" name="sks" value="<?php echo $matkul["sks"] ?>">
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" class="form-control mt-2" name="semester" value="<?php echo $matkul["semester"] ?>">
                </div>
                
                <!-- <div class="form-group">
                    <label for="prasyarat">Prasyarat</label>
                    <select name="prasyarat" class="custom-select">
                        <option selected value="-">-</option>
                    <?php
                        // foreach (Matkul::ListMatkul() as $d) {
                        //     if ($matkul['prasyarat'] == $d['id'] ) {
                        //         echo '<option selected value="'.$d['id'].'">'. $d['name'] .'</option>';
                        //     } elseif ($matkul['id'] == $d['id'] ) {
                        //         # code...
                        //     }
                        //     else {
                        //         echo '<option value="'.$d['id'].'">'. $d['name'] .'</option>';
                        //     }
                        // }
                    ?>
                    </select>
                </div> -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
    

<?php endforeach; ?>
