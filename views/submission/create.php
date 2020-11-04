<?php 

use Classes\Assignment;
    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }   
    foreach (Assignment::getProfile($data)  as $assignment) :
        print_r($assignment);
        if ($_SESSION['id'] != $assignment['id_user']) {
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id']."/create"?>" method="post" class="form-group col-5">
    <input type="hidden" name="id_course" value="<?= $assignment['id'] ?>">
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control mt-2" name='name' placeholder="name">    
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
<?php
        }
        else {
        die("You are own this course!! So u dont have to add submission!!");
        }
    endforeach;
?>