<div class="card">
    <div class="card-header">
        prodi
        <a href="?f=prodi&&action=create" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Jurusan</th>
                <th>Prodi</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    $rules = [
                        "table1" => "prodies",
                        "key1" => "id_departement",
                        "table2" => "departements",
                        "key2" => "id",
                        "join" => "JOIN",
                        "condition" => "ORDER BY id",
                        "column" => [
                            "departements.name as jurusan",
                            "prodies.name as prodi",
                            "prodies.id as id",
                        ]
                    ];
                    foreach ($p->index($rules) as $data) {
                        echo '
                        <tr>
                        <td>'.$data["id"].'</td>
                        <td>'.$data["jurusan"].'</td>
                        <td>'.$data["prodi"].'</td>
                        <td>
                            <a href="index.php?f=prodi&&action=edit&&param='.$data['id'].'" class="btn btn-sm btn-primary">edit</a>
                            <a href="index.php?f=prodi&&action=delete&&param='.$data['id'].'" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
