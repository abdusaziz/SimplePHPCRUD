<?php
include './incs/header.php';
require __DIR__."/incs/user.php";
if(empty($_GET['id'])){
    include './incs/err.php';
    exit;
}
$id = $_GET['id'];
$res = getUserById($id);
var_dump($res);
?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $res['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a href="update.php?id=<?php echo $res['id'] ?>" class="btn btn-primary">Update</a>
            <a href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">delete</a>
        </div>
        <table class="table">
        <tr>
            <th>Name: </th><td><?php echo $res['name'] ?></td>
        </tr>
        <tr>
            <th>User Name: </th><td><?php echo $res['username'] ?></td>
        </tr>
        <tr>
            <th>Email: </th><td><?php echo $res['email'] ?></td>
        </tr>
        <tr>
            <th>Phone: </th><td><?php echo $res['phone'] ?></td>
        </tr>
        <tr>
            <th>Website: </th><td><a href="http://<?php echo $res['website'] ?>"><?php echo $res['website'] ?></a></td>
        </tr>
    </table>
    </div>
    
</div>


<?php
include './incs/footer.php';
?>