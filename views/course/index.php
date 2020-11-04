<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center ">
        <h1>Course</h1>
        <div class="d-flex justify-content-around align-items-center" style="width:8em;">
            <a href="<?= BASEPATH."course/join" ?>" class="btn btn-primary d-flex justify-content-around align-items-center" style="height:40px;">Join</a>
            <a href="<?= BASEPATH."course/create"?>" class=" d-flex justify-content-around align-items-center" style="width=40px;height:40px;">
                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                    
                <?php
                    if (empty($data)) {
                        echo '<div class="d-flex flex-column justify-content-center align-items-center display-1" style="min-height:100%;height:100vh;width:100%">Empty</div>'; 
                    }else {
                        foreach ($data as $course) {
                            echo '     
                            <div class="col-3 mb-4">
                                <div class="card shadow">
                                <img src="https://image.freepik.com/free-vector/colorful-flowers-background-flat-style_23-2148231044.jpg" class="card-img-top" alt="...">                
                                <div class="card-body">
                                <a href="'.BASEPATH.'course/'.$course['id'].'">
                                    <h5 class="card-title">'.$course["name"].'</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">'.$course['matkul_kode']." - ".$course['matkul_name'].'</h6>
                                </a>
                                <div class="float-right d-flex justify-content-around" style="width:50px;">
                                    <a href="'.BASEPATH."course/".$course['id'].'/edit" class="text-primary">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>
                                    ';
                                    if ($_SESSION['role'] == "admin") {
                                        echo '<a href="'.BASEPATH."course/".$course['id'].'/delete" class="text-danger text-center">';
                                    } else {
                                        echo '<a href="'.BASEPATH."course-member/".$course['member_id'].'/delete" class="text-danger text-center">';
                                    }
                                    
                                    echo '
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </a>
                                </div>
                                </div>
                                </div>
                                </div>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    
</div>
