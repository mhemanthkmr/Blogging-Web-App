<?php 
include('authentication.php');
// die(print_r($_POST));
if(isset($_POST['update_user']))
{
    // die("Hello");
    $user_id = $_POST['user-id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';


    $query = "UPDATE users SET name='$name' , email='$email' ,role_as = '$role_as',status = '$status' WHERE id = '$user_id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['flag'] = 1;
        $_SESSION['message'] = "Updated Successfully";
        header("Location: view-register.php");
        exit(0);
    }
    else 
    {

    }
    
}
else 
{
    die("Hee");

}

?>