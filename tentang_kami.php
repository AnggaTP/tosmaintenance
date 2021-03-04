<!DOCTYPE html>
<html>
<head>
    <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sekilas tentang TOS ADVENTURE Pacet Mojokerto Jawa Timur</title>
    <meta name="description" content="Ketahui sekilas tentang siapa itu TOS Adventure Pacet, sejarah serta visi misi dari kami" />
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
            <h1>Tentang TOS Adventure Pacet</h1>
        </div>
    </section>
    <!-- end title halaman -->


    <!-- box -->
    <section id="boxes">
    <h2>Tentang Kami</h2>
    <div class="line"><img src="img/line.png" alt=""></div>
    <p>Tos Adventure Pacet adalah provider wisata yang berada di kawasan Wana Wisata Air Panas Padusan, Pacet, Mojokerto, Jawa Timur, bergerak di bidang wisata adventure, rafting, outbound , travel partner, event organizer dan program edukasi dengan produk andalan kami RAFTING KROMONG RIVER. Berpengalaman selama lebih dari 10 tahun semenjak berdiri tahun 2008, kami siap memberi pelayanan terbaik untuk anda</p>
        <div class="container">
            <div class="box">
                <span class="fa fa-thumbs-o-up circle-icon"></span>
                <h3>PELAYANAN</h3> 
                <p>Kepuasan dan kesenangan anda adalah tujuan kami yang paling utama, maka kami pastikan memberi pelayanan maksimal dan terbaik hanya untuk anda.</p>
            </div>
            <div class="box">
                <span class="fa fa-user-secret circle-icon"></span>
                <h3>PROFESIONAL</h3> 
                <p>Kami memiliki team profesional yang siap mendampingi anda mulai dari rafting guide, outbound trainer dan travel guide yang semua sudah bersertifikat BNSP nasional.</p>
            </div>
            <div class="box">
                <span class="fa fa fa-id-card circle-icon"></span>
                <h3>PENGALAMAN</h3> 
                <p>Lebih dari 10 tahun telah banyak klien dari seluruh Indonesia yang mempercayakan kegiatan rafting, outbound maupun outing mereka bersama kami.</p>
            </div>
            <div class="box">
                <span class="fa fa-space-shuttle circle-icon"></span>
                <h3>LOKASI STRATEGIS</h3> 
                <p>Kami berada di kawasan Wana Wisata Air Panas Padusan, Pacet, Mojokerto, Jawa Timur yang notabene memiliki banyak spot wisata untuk dikunjungi.</p>
            </div>

        </div> 
    </section>
    <!-- end box -->

    <!-- produk lain -->
    <?php include "produk_lain.php"?>
    <!-- end produk lain -->

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