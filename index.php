<?php
    session_start();
    if(isset($_GET['msg']) && $_GET['msg'] == 'subscribed'){
        echo "<script>window.alert('Successfully Subscribed!');</script>";
    }
    $title = "Home";
    include('includes/header.php');
?>
<section>
    <title>Home | Hosanna Furnitures</title>
    <!-- Carousel Start -->
    <section id="carousel-fit">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators cindicator">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2">
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/img1.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/img2.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/img3.jpg" alt="Image 1">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </section>
    <!-- Carausel End -->

    <!-- About Us Start -->
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3">About Us</h3>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed perferendis maxime veritatis culpa, accusantium qui reiciendis inventore porro incidunt numquam delectus quam laborum? Molestias atque commodi tenetur hic soluta illo?</p>
                <a href="#" class="btn btn-danger submit">Read More</a>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Features Starts -->
    <div class="welcome py-5" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>We Provide you the best furnitures</h3>
                    <p class="mt-4 pr-lg-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, a voluptatum? Sint doloremque amet, odio assumenda temporibus corrupti, repellat blanditiis autem ipsam facere eligendi cupiditate officiis quidem sed laboriosam aperiam?</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Ends -->

</section>
<?php 
    include('includes/footer.php');
?>