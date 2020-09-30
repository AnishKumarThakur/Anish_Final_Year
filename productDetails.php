<?php
    session_start();
    $title = "Products";
    include_once('includes/header.php');
    require ('classes/product.class.1.php');
    $product = new Product();
    $productID = $_GET['id'];

    $details = $product->selectProduct($productID);
?>
<div class="inner-products">
    <div class="overlay-inner">
         <!-- products -->
    <section>
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
        </style>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto">
                        <img class="card-img-top" style="height:500px; width: auto;" src="images/product-images/<?php echo $details[0]['p_image']; ?>" alt="Card image cap">
                </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch pdd-side">
                    <div class="card mx-auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $details[0]['p_name']; ?></h5>
                            <p class="card-text"><?php echo $details[0]['p_description']; ?></p>
                            <p class="card-text">Original Price: Rs. <s><?php echo $details[0]['p_price']; ?></s></p>
                            <p class="card-text text-justify">Discounted Price: Rs. <?php echo $details[0]['p_disprice']; ?></p>
                            <a href="product-confirm.php?id=<?php echo $details[0]['p_id']; ?>" class="btn btn-danger float-right" style="color: #fff !important;">Order Now &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products End -->
    </div>
</div>
<?php include_once('includes/footer.php');?>