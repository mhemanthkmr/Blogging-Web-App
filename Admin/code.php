<?php 
include('authentication.php');
// die(print_r($_POST));

if(isset($_POST['update-category']))
{
    // die(print_r($_POST));
    $id = $_POST['id'];
    // die($id);
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta-title'];
    $meta_description = $_POST['meta-description'];
    $meta_keyword = $_POST['meta-keyword'];
    $navbar_status = $_POST['navbar-status'] == true ? '1' : '0';
    $status = $_POST['status'] == true ? '1' : '0';


    // $query = "INSERT INTO categories(name,slug,description,meta-title,meta-description,meta-keyword,navbar-status,status) VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword','$navbar_status','$status')";
    $query1 = "INSERT INTO `categories` (`name`, `slug`, `description`, `meta-title`, `meta-description`, `meta-keyword`, `navbar-status`, `status`) VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword','$navbar_status','$status')";
    $query = "UPDATE `categories` SET `name` = '$name', `slug` = '$slug', `description` = '$description', `meta-title` = '$meta_title', `meta-description` = '$meta_description', `meta-keyword` = '$meta_keyword', `navbar-status` = '$navbar_status', `status` = '$status' WHERE (`id` = '$id');";
    // die($query);
    // die($query);
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['flag'] = 1;
        $_SESSION['message'] = "Catogory Updated Successfully";
        header("Location: category-view.php");
        exit(0);
    }
    else 
    {
        $_SESSION['flag'] = 2;
        $_SESSION['message'] = "Something Wrong";
        header("Location: category-add.php");
        exit(0);
    }
}


if(isset($_POST['add-category']))
{
    // die(print_r($_POST));
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta-title'];
    $meta_description = $_POST['meta-description'];
    $meta_keyword = $_POST['meta-keyword'];
    $navbar_status = $_POST['navbar-status'] == true ? '1' : '0';
    $status = $_POST['status'] == true ? '1' : '0';


    // $query = "INSERT INTO categories(name,slug,description,meta-title,meta-description,meta-keyword,navbar-status,status) VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword','$navbar_status','$status')";
    $query1 = "INSERT INTO 'categories` (`name`, `slug`, `description`, `meta-title`, `meta-description`, `meta-keyword`, `navbar-status`, `status`) VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword','$navbar_status','$status')";
    $query_run = mysqli_query($con,$query1);
    if($query_run)
    {
        $_SESSION['flag'] = 1;
        $_SESSION['message'] = "Catogory Added Successfully";
        header("Location: category-add.php");
        exit(0);
    }
    else 
    {
        $_SESSION['flag'] = 2;
        $_SESSION['message'] = "Something Wrong";
        header("Location: category-add.php");
        exit(0);
    }
}

if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];
    $user_delete = "DELETE FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($con,$user_delete);
    if($query_run)
    {
        $_SESSION['flag'] = 1;
        $_SESSION['message'] = "User/Admin Deleted Successfully";
        header("Location: view-register.php");
        exit(0);
    }
    else 
    {
        $_SESSION['flag'] = 2;
        $_SESSION['message'] = "Something Wrong";
        header("Location: view-register.php");
        exit(0);
    }
    
}

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
        $_SESSION['flag'] = 2;
        $_SESSION['message'] = "Something Wrong";
        header("Location: view-register.php");
        exit(0);
    }
    
}
else 
{
    die();

}

?>