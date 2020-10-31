<div class="card">
    <div class="card-header">
        matkul
        <a href="<?= BASEPATH."matkul/create"?>" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Kode</th>
                <th>Name</th>
                <th>sks</th>
                <th>semester</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    foreach ($data as $matkul) {
                        echo '
                        <tr>
                        <td>'.$matkul["id"].'</td>
                        <td>'.$matkul["kode"].'</td>
                        <td>'.$matkul["name"].'</td>
                        <td>'.$matkul["sks"].'</td>
                        <td>'.$matkul["semester"].'</td>
                        <td>
                            <a href="'.BASEPATH."matkul/".$matkul['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                            <a href="'.BASEPATH."matkul/".$matkul['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
