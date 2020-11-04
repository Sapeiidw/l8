<?php

use Classes\Prodi;

?>
<div class="card">
    <div class="card-header">
        Departement
        <a href="<?= BASEPATH."departement/create"?>" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body bg-white">
        
            <div class="row">
            <?php
                foreach ($data as $departement) {
                    echo '     
                    <div class="col-md-3 mb-5">
                        <div class="card overflow-hidden shadow-sm rounded" style="max-width: 20rem; height:100%;">
                            <div class="card-header position-relative pb-4" style="">
                                <a href="'.BASEPATH.'departement/'.$departement['id'].'">
                                    <h5 class="card-title">'.$departement["kode"].'</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">'.$departement["name"].'</h6>
                                </a>
                                <div class="d-flex justify-content-center position-absolute" style="width:70px; top: 10%; right: 2%">
                                    <a href="'.BASEPATH."departement/".$departement['id'].'/edit" class="mx-1 text-primary">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>
                                    <a href="'.BASEPATH."departement/".$departement['id'].'/delete" class="mx-1 text-danger">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-hover">
                                ';
                                foreach (Prodi::getForJurusan() as $prodi) {
                                    if ($prodi['id_departement'] == $departement['id']) {
                                
                                        echo '
                                        <tr class="py-2">
                                        <td class="d-flex justify-content-between">
                                            <a class="" href="'.BASEPATH."prodi/".$prodi['id'].'">'.$prodi['name'].'</a>
                                            <div class="d-flex justify-content-center">
                                                <a href="'.BASEPATH."prodi/".$prodi['id'].'/edit" class="mx-1 text-primary">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                                </a>
                                                <a href="'.BASEPATH."prodi/".$prodi['id'].'/delete" class="mx-1 text-danger">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        </tr>
                                        ';
                                    }
                                }
                            echo '
                                </table>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?>
            </div>
        </div>
    </div>
</div>