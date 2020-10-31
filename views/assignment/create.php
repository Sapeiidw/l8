<?php 

use Classes\Course;
    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }   
    print_r(Course::GetOneCourse($data));
    foreach (Course::GetOneCourse($data)  as $course) :
        print_r($course);
        if ($_SESSION['id'] == $course['id_user']) {
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."course/".$course['id']."/assignment"?>" method="post" class="form-group col-5">
    <input type="hidden" name="id_course" value="<?= $course['id'] ?>">
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control mt-2" name='name' placeholder="name">    
    </div>
    <div class="form-group">
        <label for="deskripsi">deskripsi</label>
        <input type="text" class="form-control mt-2" name='deskripsi' placeholder="deskripsi">
    </div>
    <div class="form-group">
        <label for="name">course</label>
        <input type="date" class="form-control mt-2" name='deadline' placeholder="deadline">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
<?php
        }
        else {
        die("You dont own this course!!");
        }
    endforeach;
?>