<?php 
    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }     
    foreach ($data as $assignment) :
        if ($_SESSION['id'] == $assignment['id_user']) {
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id']."/edit"?>" method="post" class="form-group col-5">
    <input type="hidden" name="id" value="<?= $assignment['id'] ?>">            
    <input type="hidden" name="id_course" value="<?= $assignment['id_course'] ?>">
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control mt-2" value="<?= $assignment['name'] ?>" name='name' placeholder="name">    
    </div>
    <div class="form-group">
        <label for="deskripsi">deskripsi</label>
        <input type="text" class="form-control mt-2" value="<?= $assignment['deskripsi'] ?>" name='deskripsi' placeholder="deskripsi">
    </div>
    <div class="form-group">
        <label for="name">course</label>
        <input type="date" class="form-control mt-2" value=<?= $assignment['deadline'] ?> name='deadline' placeholder="deadline">
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