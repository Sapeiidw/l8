<?php
    foreach ($data as $course) :
?>
<a href="<?= BASEPATH."course/".$course['id']."/member"?>" class="btn btn-primary">Member</a>
<a href="<?= BASEPATH."course/".$course['id']."/assignment"?>" class="btn btn-primary">assignment</a>
<div class="card">
    <div class="card-header">
        <h1 class="card-title"><?= $course['name'] ?></h1>
        <h2 class="card-subtitle"><?= $course['matkul_kode']." - ". $course['matkul_name'] ?></h2>
    </div>
    <div class="card-body">

    </div>
</div>
<?php
    endforeach;
?>