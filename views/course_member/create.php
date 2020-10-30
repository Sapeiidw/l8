<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['id_courses']) && !empty($_POST['id_member']) ) {
            $data = [
            "id_courses" => $_POST['id_courses'],
            "id_member" => $_POST['id_member'],
            ];
            $cm->create($data);
            if (isset($_SESSION['username'])) {
                header("location: index.php?f=course_member");
            }else {
                header("location: index.php?f=login");
            }        
        }
    }
    $c = new Courses;
    $u = new Users;
?>
<div class="card">
    <div class="card-header">join Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="?f=course_member&&action=join" method="post" class="form-group col-5">
            <div class="form-group">
                <label for="id_courses">courses</label>
                <select name="id_courses" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach ($c->index() as $data_courses) {
                        echo '<option value="'.$data_courses['id'].'">'. $data_courses['name'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_member">Member</label>
                <select name="id_member" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach ($u->index() as $data_user) {
                        echo '<option value="'.$data_user['id'].'">'. $data_user['username'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">join</button>
        </form>
    </div>
    </div>

</div>
