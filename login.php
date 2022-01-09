<?php 
session_start();
include('includes/header.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include('message.php')?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" class="">
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter Email" class = "form-control" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter Password" class = "form-control" name="password">
                            </div>
                            <div class="form-group mb-3 text-center">
                                <button class="btn btn-primary"  type="submit" name="login_btn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>