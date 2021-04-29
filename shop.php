<?php
    session_start();

    $connect = mysqli_connect("localhost", "root", "", "product_db");
    $currPage = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="shop.css" />
    <link rel="shortcut icon" type="image/png" href="img/new_tos.png"/>
</head>

<body>
    <!-- header -->
    <?php include "shop_header.php" ?>
    <!-- end header -->

    <!-- title halaman -->
    <section id="title-halaman">
        <div class="container">
            <h1>Mini Toko Online</h1>
        </div>
    </section>
    <!-- end title halaman -->
    
    

    <!-- product display -->
    <section id="shop-list">
        <div class="line">
            <h2>Produk Terbaru</h2>
            <img src="img/line.png" alt="garis batas">
        </div>
        <div class="container">
            <?php
                $result_per_page = 8;
                $query = "SELECT * FROM product_list";
                $result = mysqli_query($connect, $query);
                $total_data = mysqli_num_rows($result);
                $number_of_pages = ceil($total_data/$result_per_page);

                if(!isset($_GET['page'])){
                    $page = 1;
                }else{
                    $page = $_GET['page'];
                    $currPage = $_GET['page'];
                }

                $this_page_first_result = ($page - 1)*$result_per_page;

                $query = "SELECT * FROM product_list LIMIT " . $this_page_first_result . "," . $result_per_page;
                $result = mysqli_query($connect, $query);

                if($total_data > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
            ?>
                    <div class="card">
                        <?php echo "<img src='data:img/product/;base64,".base64_encode($row["product_img"])."'/>";?>
                        <div class="card-details">
                            <p id='title-product'><?php echo $row["product_name"]; ?></p>
                            <p id='product-price'><?php echo "Rp. " . $row["product_price"]; ?></p>
                        </div>
                        <div class="card-button">
                            <p>
                            <button id="cart">Keranjang</button>
                            </p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
        </div>
        <div class="center-pagination">
            <div class="pagination">  
            <?php
                echo '<a href="shop.php?page=' . ($currPage-1) . '">&laquo;</a>';
                for($page = 1; $page <= $number_of_pages; $page++)
                {
                    echo '<a href="shop.php?page=' . $page . '">' . $page . '</a> ';
                }
                echo '<a href="shop.php?page=' . ($currPage+1) . '">&raquo;</a>';
            ?>
            </div>
        </div>
    </section>
    <!-- end product display -->

    <!-- footer -->
    <?php include "footer.php"?>
    <!-- end footer -->
    
    <script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    

    function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        
    } else {
        header.classList.remove("sticky");
        
    }
    }

    function openSlideMenu(){
        document.getElementById("mobile-menu").style.width = '250px';
    }

    function closeSlideMenu(){
        document.getElementById("mobile-menu").style.width = '0';
    }
    </script>
</body>
</html>