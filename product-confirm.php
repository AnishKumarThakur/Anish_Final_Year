<?php
    session_start();
    $title = "Products";
    include_once('includes/header.php');
    require ('classes/product.class.1.php');
    $product = new Product();
    $productID = $_GET['id'];
    $details = $product->selectProduct($productID);
?>
<style>
    input[type=text] {
        width: 250px;
        display: block;
        transition: width 0.4s ease-in-out;
    }
    input#search {
        margin: 0 auto;
    }
    input[type=text]:focus {
        width: 100%;
    }
    #here{
        width: 100%;
        height: auto;
        border: 1px solid grey;
        display: none;
    }
    .card{
        margin-right: 0 !important;
        border-radius: 0;
        border: none;
        background-color: #302f5d;
    }
    .card p, h5{
        color: #fff !important;
    }
    .pdd-side{
        margin: 130px 0 30px !important;
        padding: 0 !important;
    }
    .table, h3, h4{
        color: #ceb8ba !important;
    }
</style>
<div class="inner-products">
    <div class="overlay-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto">
                        <img class="card-img-top" style="height:500px; width: auto;" src="images/product-images/<?php echo $details[0]['p_image']; ?>" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto w-100">
                        <div class="card-body">
                        <h3 class="text-center mb-4">Confirm Ordering</h3>
                            <table class="table table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="text-right">
                                    <tr>
                                        <th scope="row" class="text-left"><?php echo $details[0]['p_name']; ?></th>
                                        <td>1</td>
                                        <td>Rs. <?php echo $details[0]['p_price']; ?></td>
                                        <td>Rs. <?php echo $details[0]['p_price']; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Sub Total:</th>
                                        <td>Rs. <?php echo $details[0]['p_price']; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Delivery Charge:</th>
                                        <td>Rs. <?php echo $p = 500; ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" scope="row" class="text-right">Total:</th>
                                        <td>Rs. <?php echo $details[0]['p_price'] + $p; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="payment">
                                <form action="#">
                                    <div class="container" style="font-size: 18px; color: #635e5e;">
                                        <h4 class="mb-3">Payment Method:</h4>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="card" name="payment-method" class="custom-control-input" disabled>
                                            <label class="custom-control-label" for="card" style="color:#797777;"><!--<i style="color:#c38249;" class="far fa-credit-card"></i>--> Card for Payment</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cash" name="payment-method" class="custom-control-input" checked="checked">
                                            <label class="custom-control-label" for="cash" style="color:#ded5d5;"><!--<i style="color:#03a84e;" class="fas fa-money-bill-wave"></i>--> Cash on Delivery</label>
                                        </div>
                                        <?php 
                                            if(isset($_SESSION['user-id'])){ ?>
                                                <a href="actions/productConfirm-action.php?id=<?php echo $details[0]['p_id']; ?>" class="btn btn-danger float-right" style="color: #fff !important;">Confirm Order &raquo;</a>
                                            
                                           <?php } else{?>
                                            <p class="bg bg-danger text-dark text-center mt-3">&laquo; Please <a href="user-login.php" class="text-warning">login</a> first! &raquo;</p>
                                            <?php }?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
<?php include_once('includes/footer.php');?>