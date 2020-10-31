<div class="card">
    <div class="card-header">
        submission
        <a href="<?= BASEPATH."submission/create"?>" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>username</th>
                <th>email</th>
                <th>status</th>
                <th>create_at</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    foreach ($data as $submission) {
                        echo '
                        <tr>
                        <td>'.$submission["id"].'</td>
                        <td><a href="'.BASEPATH."submission/".$submission['id'].'">'.$submission["submission_name"].'</a></td>
                        <td>'.$submission["username"].'</td>
                        <td>'.$submission["email"].'</td>
                        <td>'.$submission["status"].'</td>
                        <td>'.$submission["create_at"].'</td>
                        <td>
                            <a href="'.BASEPATH."submission/".$submission['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                            <a href="'.BASEPATH."submission/".$submission['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
