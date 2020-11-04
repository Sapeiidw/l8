<div class="card">
    <div class="card-header">
        assignment
        <?php $id_course = preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']); ?>
        <a href="<?= BASEPATH."course/".$id_course."/assignment/create"?>" class="btn btn-primary btn-sm d-inline">Create</a>
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
                    if (empty($data) or $data == false) {
                        echo '<div class="d-flex flex-column justify-content-center align-items-center display-1" style="min-height:100%;height:100vh;width:100%">Empty</div>'; 
                    }else {
                        foreach ($data as $assignment) {                        
                            echo '
                            <tr>
                            <td>'.$assignment["id"].'</td>
                            <td><a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'">'.$assignment["name"].'</a></td>
                            <td>'.$assignment["deskripsi"].'</td>
                            <td>'.$assignment["deadline"].'</td>
                            <td>
                                <a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                                <a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                            </td>
                            </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
