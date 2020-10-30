<div class="card">
    <div class="card-header">
        matkul
        <a href="?f=matkul&&action=create" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Kode</th>
                <th>Name</th>
                <th>sks</th>
                <th>semester</th>
                <th>prasyarat</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    foreach ($m->index() as $data) {
                        echo '
                        <tr>
                        <td>'.$data["id"].'</td>
                        <td>'.$data["kode"].'</td>
                        <td>'.$data["name"].'</td>
                        <td>'.$data["sks"].'</td>
                        <td>'.$data["semester"].'</td>
                        <td>'.$data["prasyarat"].'</td>
                        <td>
                            <a href="index.php?f=matkul&&action=edit&&param='.$data['id'].'" class="btn btn-sm btn-primary">edit</a>
                            <a href="index.php?f=matkul&&action=delete&&param='.$data['id'].'" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
