<div id="users">
    <div class="user-header mb-4 text-right">
        <a href="/admin/users/add" class="btn btn-success">Add User</a>
    </div>
    
    <table id="user-table" class="table table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><a class="btn btn-primary btn-sm" href="/admin/users/changepw/<?php echo $user['id']; ?>">Change password</a></td>
                <td><a class="btn btn-danger btn-sm delete" href="/admin/users/delete/<?php echo $user['id']; ?>">Delete user</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    scripts.push(function () {
        $(document).ready(function () {
            $('#user-table').DataTable({
                "autoWidth": false
            });
            
            $('.delete').click(function(e) {
                if(!confirm("You're about to delete a user. Are you sure?")) {
                    e.preventDefault();
                }
            });
        });
    });
</script>