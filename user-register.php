
<?php $title = "Register"; include_once('includes/header.php');?>
<div class="inner-about inner-register">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Registration</h3>
        <div class="row">
            <div class="col-lg-4 contact-info-left"></div>
            <div class="col-lg-4 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="actions/userRegistration-action.php" method="POST">
                    
                    <div class="form-group mt-4">
                        <label> First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="" required>
                    </div>
                                        
                    <div class="form-group mt-4">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="" required>
                    </div>
                                                            
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="" required>
                    </div>
                                                            
                    <div class="form-group mt-4">
                        <label>Telephone</label>
                        <input type="text" class="form-control" name="telephone" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>Region</label>
                        <input type="text" class="form-control" name="region" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>Gender: </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Male" checked> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Female" required> Female
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Other" required> Other
                        </label>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit mb-4" name="userRegistration">Register </button>

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