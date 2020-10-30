<table class="table table-hover">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>

    <tbody>
        <?php
            foreach ($data as $user) {
                echo '
                <tr>
                <td>'.$user["id"].'</td>
                <td>'.$user["username"].'</td>
                <td>'.$user["email"].'</td>
                <td>
                    <a href="/pabw-oop/user/'.$user['id'].'/edit" class="btn btn-sm btn-primary">edit</a>
                    <a href="/pabw-oop/user/'.$user['id'].'/delete" class="btn btn-sm btn-danger">delete</a>
                </td>
                </tr>
                ';
            }
        ?>
    </tbody>
</table>