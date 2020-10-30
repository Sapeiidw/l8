<div class="card">
    <div class="card-header">
        course
        <a href="?f=course_member&&action=join" class="btn btn-primary btn-sm d-inline">join</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>id_course</th>
                <th>id_member</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    foreach ($cm->index() as $data) {
                        echo '
                        <tr>
                        <td>'.$data["id"].'</td>
                        <td>'.$data["id_courses"].'</td>
                        <td>'.$data["id_member"].'</td>
                        <td>
                            <a href="index.php?f=course_member&&action=edit&&param='.$data['id'].'" class="btn btn-sm btn-primary">edit</a>
                            <a href="index.php?f=course_member&&action=delete&&param='.$data['id'].'" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
