<!DOCTYPE html>
<html>
<head>
    <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jurnal Kegiatan klien Bersama TOS ADVENTURE Pacet Mojokerto Jawa Timur</title>
    <meta name="description" content="Intip dan baca beberapa catatan jurnal kegiatan klien kami, jangan ragu segera acarakan segala kegiatan anda bersama TOS Adventure Pacet" />
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
            <h1>Jurnal Kegiatan Klien TOS</h1>
        </div>
    </section>
    <!-- end title halaman -->


    <!-- tamu -->
    <section id="tamu">
    <h2>Jurnal Klien</h2>
    <div class="line"><img src="img/line.png" alt=""></div>
    <p>Tos Adventure Pacet sudah bekerjasama dan melayani berbagai klien dari seluruh Indonesia baik mulai dari Perusahaan, instansi Pemerintah, sekolah, universitas, organisasi, club, komunitas keluarga, maupun umum. Intip sekilas bagaimana perjalanan dan kegiatan para klien kami</p>
        <div class="container">
            <div class="box">
                <img src="img/banner.jpg"alt="kegiatan rafting outbound shopee.id">
                <h3>Seller Gathering Shopee.id, asyiknya kebersamaan dengan rekan-rekan baru</h3> 
                <p>Shopee.id bersama para Seller di area Jawa Timur melakukan gathering pertama mereka di TOS Adventure Pacet. Diawali dengan fun outbound yang kemudian dilanjutkan dengan pengarungan rafting welirang trip.</p>
                <button> <strong>Selengkapnya</strong> </button>
            </div>
            <div class="box">
                <img src="img/out3.jpg" alt="kegiatan rafting outbound KPPBC Surabaya">
                <h3>Seru serta berkesannya kegiatan Capacity Building KPPBC Surabaya</h3> 
                <p>Kegiatan Capacity Building 2 hari 1 malam oleh KPPBC Surabaya ini berlangsung seru dan penuh makna. Diawali dengan kegiatan fun outbound yang sangat fun, kemudian dilanjutkan dengan rafting trip arjuna bersama-sama. Malamnya kegiatan outbound motivasi di Royal Camp Trawas dilanjutkan api unggun, electone dan Nobar Piala Dunia. Kemudian pagi keesokan harinya kegiatan senam dan hash, ditutup dengan pembagian doorprize. </p>
                <button><strong>Selengkapnya</strong></button>
            </div>
            <div class="box">
                <img src="img/raf2.jpg" alt="kegiatan rafting CCRC Bank BTN Surabaya">
                <h3>Lepas penat kerja versi rekan-rekan CCRC Bank BTN cabang Surabaya </h3> 
                <p>Rafting day Unit CCRC Bank BTN cabang Surabaya, menikmati keseruan Trip Rafting teratas TOS yaitu Mahameru Trip yang jalurnya memacu andrenalin dengan balutan dengan keindahan alam natural disepanjang perjalanan. Ditutup dengan makan bersama dan menikmati hiburan music electone.</p>
                <button><strong>Selengkapnya</strong></button>
            </div>
        </div>
  
        
    </section>
    <!-- end tamu -->

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