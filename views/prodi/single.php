<div class="card">
    <div class="card-header">
        prodi
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Prodi</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    foreach ($data as $prodi) {
                        echo '
                        <tr>
                        <td>'.$prodi["id"].'</td>
                        <td>'.$prodi["name"].'</td>
                        <td>
                            <a href="'.BASEPATH."prodi/".$prodi['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                            <a href="'.BASEPATH."prodi/".$prodi['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
