
<?php
    if(isset($_GET['msg']) && $_GET['msg'] == 'userRegistered'){
        echo "<script>window.alert('Successfully Created! Please Login to continue!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'incorrect'){
        echo "<script>window.alert('Username or Password Incorrect!');</script>";
    }
?>
<?php $title = "Login"; include_once('includes/header.php');?>
<div class="inner-about inner-login">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree">Login</h3>
        <div class="row">
            <div class="col-lg-4 contact-info-left"></div>
            <div class="col-lg-4 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="actions/userLogin-action.php" method="POST">
                    
                    <div class="form-group mt-4">
                        <label> Email</label>
                        <input type="text" class="form-control" name="email" placeholder="" required>
                    </div>
                                        
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" required>
                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4 float-left" name="userLogin">Login</button>
                    <a href="admin-login.php" style="display: block; float: right; margin: 15px 0;"><small>Admin Login</small></a>
                </form>
            </div>
            
            <div class="col-lg-4 contact-info-left"></div>
        </div>
    </div>
</section>
    <!-- Contact Ends -->
<?php 
    include_once('includes/footer.php');
?>