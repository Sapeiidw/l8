
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
                    foreach ($data as $member) {
                        echo '
                        <tr>
                        <td>'.$member["id"].'</td>
                        <td>'.$member["id_courses"].'</td>
                        <td>'.$member["id_member"].'</td>
                        <td>'.$member["username"].'</td>
                        <td>'.$member["email"].'</td>
                        <td>
                            <a href="'.BASEPATH.'course-member/'.$member['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                            <a href="'.BASEPATH.'course-member/'.$member['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                        </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
