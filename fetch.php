<?php
    if(!empty($_GET['query'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "anish_cp";

        $conn = new mysqli($servername, $username, $password, $dbname);
        

        $query = $_GET['query'];
        $sql = "SELECT * FROM `tbl_product` WHERE `p_name` like '%$query%'; ";
        $result =$conn->query($sql);
        while($output = $result->fetch_array()){ ?>
            <a href="products.php?id=<?php echo $output['p_id']; ?>"><?php echo $output['p_name'] . '<br>';?></a>
        <?php
        }
    }
?>