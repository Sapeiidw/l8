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
            $m = new Matkuls;
            $m->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=matkul");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="?f=matkul&&action=create" method="post" class="form-group col-5">
    <div class="form-group">
        <label for="kode">Name</label>
        <input type="text" class="form-control mt-2" name="kode" placeholder="kode">    
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control mt-2" name="name" placeholder="name">    
    </div>
    <div class="form-group">
        <label for="sks">SKS</label>
        <input type="text" class="form-control mt-2" name="sks" placeholder="sks">    
    </div>
    <div class="form-group">
        <label for="semester">Semester</label>
        <input type="text" class="form-control mt-2" name="semester" placeholder="semester">    
    </div>
    <div class="form-group">
        <label for="prasyarat">Prasyarat</label>
        <select name="prasyarat" class="custom-select">
            <option selected value="-">-</option>
        <?php
            foreach ($m->index() as $data) {
                echo '<option value="'.$data['id'].'">'. $data['name'] .'</option>';
            }
        ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
</div>
