<?php 


    if (!isset($_SESSION['username'])) {
        header("Location:". BASEPATH."login");
    }   
    print_r($data);
    foreach ($data  as $submission) :
        
        
?>
<div class="container d-flex justify-content-center align-items-center">
<form action="<?=  BASEPATH."submission/".$submission['id']."/edit"?>" method="post" class="form-group col-5">
    <input type="hidden" name="id" value="<?= $submission['id'] ?>">
    <input type="hidden" name="id_assignment" value="<?= $submission['id_assignment'] ?>">
    <?php
    if ($_SESSION['id'] == $submission['submission_owner']) { ?>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control mt-2" value="<?= $submission['name'] ?>" name='name' placeholder="name">    
    </div>
    <?php
    }else if ($_SESSION['id'] == $submission['course_owner']) { ?>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" readonly class=" form-control mt-2" value="<?= $submission['name'] ?>" name='name' placeholder="name">    
    </div>
    <div class="form-group">
        <label for="status">Grade :</label>
        <input type="number" value="<?= $submission['status'] ?>" name="status" min="0" max="100">
    </div>
    <?php
    }else {
        print_r($submission);
        die("You are not own this submission!!");
    }     
    ?>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<?php
    endforeach;
?>