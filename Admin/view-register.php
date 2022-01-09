<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <a href="index.php" class="breadcrumb-item active">Dashboard</a>
        <a href="view-register.php"class="breadcrumb-item">Users</a>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="">Registered Users</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    { ?>
                                        <tr>
                                            <td><?=$row['id']?></td>
                                            <td><?=$row['name']?></td>
                                            <td><?=$row['email']?></td>
                                            <td>
                                                <?php
                                                    if($row['role_as'] == '0')
                                                    {
                                                        echo 'User';
                                                    }
                                                    else if($row['role_as'] == '1')
                                                    {
                                                        echo 'Admin';
                                                    }
                                                ?>
                                            </td>
                                            <td><a href="register-edit.php?id=<?=$row['id'];?>" class="btn btn-sm btn-primary">Edit</a></td>
                                            <td><a class="btn btn-sm btn-danger">Delete</a></td>
                                        </tr> <?php
                                    }
                                }
                                else
                                { ?>
                                    <tr>
                                        <td colspan="6">No Record Found</td>
                                    </tr><?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>