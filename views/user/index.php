<table class="table table-hover">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>

    <tbody>
        <?php
            foreach ($u->index() as $data) {
                echo '
                <tr>
                <td>'.$data["id"].'</td>
                <td>'.$data["username"].'</td>
                <td>'.$data["email"].'</td>
                <td>
                    <a href="index.php?f=user&&edit='.$data['id'].'" class="btn btn-sm btn-primary">edit</a>
                    <a href="index.php?f=user&&delete='.$data['id'].'" class="btn btn-sm btn-danger">delete</a>
                </td>
                </tr>
                ';
            }
        ?>
    </tbody>
</table>