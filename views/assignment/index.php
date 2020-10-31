<div class="card">
    <div class="card-header">
        assignment
        <a href="<?= BASEPATH."assignment/create"?>" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>deskripsi</th>
                <th>deadline</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    foreach ($data as $assignment) {
                        echo '
                        <tr>
                        <td>'.$assignment["id"].'</td>
                        <td><a href="'.BASEPATH."assignment/".$assignment['id'].'">'.$assignment["name"].'</a></td>
                        <td>'.$assignment["deskripsi"].'</td>
                        <td>'.$assignment["deadline"].'</td>
                        <td>
                            <a href="'.BASEPATH."assignment/".$assignment['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                            <a href="'.BASEPATH."assignment/".$assignment['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
