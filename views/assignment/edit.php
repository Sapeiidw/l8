<?php 
    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }   
    print_r($data);
    foreach ($data  as $course) :
        print_r($course);
        if ($_SESSION['id'] == $course['id_user']) {
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."assignment/".$course['id']."/edit"?>" method="post" class="form-group col-5">
    <input type="hidden" name="id_course" value="<?= $course['id_course'] ?>">
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control mt-2" value="<?= $course['name'] ?>" name='name' placeholder="name">    
    </div>
    <div class="form-group">
        <label for="deskripsi">deskripsi</label>
        <input type="text" class="form-control mt-2" value="<?= $course['deskripsi'] ?>" name='deskripsi' placeholder="deskripsi">
    </div>
    <div class="form-group">
        <label for="name">course</label>
        <input type="date" class="form-control mt-2" value=<?= $course['deadline'] ?> name='deadline' placeholder="deadline">
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