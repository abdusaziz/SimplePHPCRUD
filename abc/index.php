<?php
include './incs/user.php';
include './incs/header.php';

$users = getUsers();

?>

    <div class="container">
        <table class="table mt-5">
            <tr>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>            
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['website']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $user['id']; ?>" class="btn btn-outline-success">View</a>
                    <a href="update.php" class="btn btn-outline-primary">Update</a>
                    <a href="delete.php" class="btn btn-outline-danger">delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
