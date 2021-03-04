<!DOCTYPE html>
<html>
<head>
    <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Informasi kontak dan reservasi TOS Adventure Pacet</title>
    <meta name="description" content="Segera hubungi kontak kami untuk reservasi dan informasi lebih lanjut. Ayo ber-adventure ria dan nikmati nuansa alam di Pacet Mojokerto jawa Timur." />
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
    <?php include "header.php" ?>
    <!-- end header -->

    <!-- title halaman -->
    <section id="title-halaman">
        <div class="container">
            <h1>Informasi Kontak dan Reservasi</h1>
        </div>
    </section>
    <!-- end title halaman -->

    <!-- Contact -->
    <?php include "detail_kontak.php" ?>
    <!-- end Contact -->

    <!-- footer -->
    <?php include "footer.php" ?>
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