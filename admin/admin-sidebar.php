<?php 
if(!isset($_SESSION['admin-id'])){
    header ('Location: ../login-first');
    exit;
}
?>
<div class="sidebar" data-color="azure" data-image="assets/img/sidebar-2.jpg">

     <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                Hosanna Furnitures
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="admin.php">
                    <p>Admin Profile</p>
                </a>
            </li>
            <li>
                <a href="add-admin.php">
                    <p>Add Admin</p>
                </a>
            </li>
            <li>
                <a href="view-users.php">
                    <p>View Registered Users</p>
                </a>
            </li>
            <li>
                <a href="view-admins.php">
                    <p>View Registered Admins</p>
                </a>
            </li>
            <li>
                <a href="add-product.php">
                    <p>Add Product</p>
                </a>
            </li>
            
            <li>
                <a href="view-product.php">
                    <p>View Added Product</p>
                </a>
            </li>
            <li>
                <a href="view-contact.php">
                    <p>View Contact</p>
                </a>
            </li>
        </ul>
    </div>
</div>