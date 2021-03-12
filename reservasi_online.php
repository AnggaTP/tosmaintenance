<!DOCTYPE html>
<html>
<head>
    <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harga Paket Outbound Fun Adventure di TOS ADVENTURE Pacet Mojokerto Jawa Timur</title>
    <meta name="description" content="Rasakan sensasi kegiatan outbound yang fun dan fresh dipadukan dengan kegiatan adventure rafting di Pacet Mojokerto. Hubungi kami segera untuk infonya" />
    <meta name="keywords" content="rafting, outbound, rafting pacet, rafting mojokerto, rafting jawa timur, outbound pacet, outbound mojokerto, outbound jawa timur, rafting terdekat, outbound terdekat, wisata pacet, wisata mojokerto, wisata jawa timur"/>
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="language" content="indonesia">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="shortcut icon" type="image/png" href="img/new_tos.png"/>
    
</head>

<body>

<!-- header -->
<?php include "header.php"?>
<!-- end header -->

<!-- title halaman -->
<section id="title-halaman">
    <div class="container">
        <h1>Reservasi</h1>
    </div>
</section>
<!-- end title halaman -->

<section id="form">
    <div class = "container">
        <div class = "div-form">
            <form action="">
                <h1>Silahkan Mengisi Form Berikut</h1>
                <label>
                    Nama :
                    <br><input type="text" name="" id="">
                </label>
                <br>
                <label>
                    No. Telp :
                    <br><input type="text" name="" id="">
                </label>
                <br>
                <label>
                    Email :
                    <br><input type="email" name="" id="">
                </label>
            </form>
        </div>
    </div>
</section>

<?php include "footer.php"?>

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