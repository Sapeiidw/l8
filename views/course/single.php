<?php

use Classes\Assignment;

foreach ($data as $course) :
?>
<div class="container">


<a href="<?= BASEPATH."course/".$course['id']."/member"?>" class="btn btn-primary">Member</a>
<a href="<?= BASEPATH."course/".$course['id']."/assignment"?>" class="btn btn-primary">assignment</a>

<div class="card rounded shadow my-4">
    <div class="card-header p-4">
        <h1 class="card-title"><?= $course['name'] ?></h1>
        <h6 class="card-subtitle text-secondary"><?= $course['matkul_kode']." - ". $course['matkul_name'] ?></h6>
    </div>
</div>
<?php
    endforeach;
?>
    <div class="row">
        <div class="col-3">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-title font-weight-bold">Assignment</p>
                    <?php
                        $list = Assignment::getForCourse($course['id']);
                        if(empty($list)){
                            echo '<p class="card-text text-secondary">Gk ada tugas bro</p>';
                        }else {
                            foreach($list as $assignment) {
                                echo '<a href="'.BASEPATH.'course/'.$course['id'].'/assignment/'.$assignment['id'].'" class="card-text">'.$assignment['name'].'</a> <br>'; 
                            }                            
                    ?>
                    <br>
                    <a href="#" class="card-text float-right"><small class="text-muted">view all</small></a>
                </div>

            </div>
        </div>
        <div class="col-9">
            <?php
                $list = Assignment::getForCourse($course['id']);
                foreach($list as $assignment) : ?>
            <div class="card rounded shadow my-2">
                <div class="card-header p-4 d-flex justify-content-start align-items-center">
                    <img src="https://ui-avatars.com/api/?name=<?= $_SESSION['username'] ?>" alt="" srcset="" class="rounded-circle" style="width:50px;height:50px;">
                    <div class="card-text ml-4">
                        <a href="<?=BASEPATH.'course/'.$course['id'].'/assignment/'.$assignment['id']?>" class="card-text"><h5><?= $assignment['name'] ?></h5></a>
                        <h6 class="card-subtitle text-secondary"><?= $assignment['create_at'] ?></h6>
                       
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>        
    </div>
</div>
                <? }?>