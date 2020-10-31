<?php 

use Classes\Course;
    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }        
?>
<div class="card">
    <div class="card-header">join Course</div>
    <div class="card-body">
        <div class="container d-flex justify-content-center align-items-center">
        <form action="<?= BASEPATH."course-member/create" ?>" method="post" class="form-group col-5">
            <div class="form-group">
                <label for="id_courses">courses</label>
                <select name="id_courses" class="custom-select">
                    <option selected value="-">-</option>
                <?php
                    foreach (Course::ListCourse() as $data_courses) {
                        echo '<option value="'.$data_courses['id'].'">'. $data_courses['name'] .'</option>';
                    }
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">join</button>
        </form>
    </div>
    </div>

</div>
