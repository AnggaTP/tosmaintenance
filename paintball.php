<!DOCTYPE html>
<html>
<head>
    <!-- Developing by Ahmad Navis Zarkasy (TOS IT Development) -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harga Paket Paintball di TOS ADVENTURE Pacet Mojokerto Jawa Timur </title>
    <meta name="description" content="Anda gemar dengan dunia strategi berperang? Segera rasakan sensasi paket PAINTBALL WAR di Pacet Mojokerto Jawa Timur bersama TOS Adventure Pacet." />
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
            <h1>Detail Harga dan Paket Paintball War</h1>
        </div>
    </section>
    <!-- end title halaman -->

    <!-- detail produk -->
    <section id="detail-produk">
        <div class="container">
        <div class="produk-umum">
                <div class="nama-produk">
                    <h2>Paintball War Game</h2>
                    <p>Harga</p>
                    <h3>Rp. 150.000,- / Orang</h3>
                    <p>
                        <ul>
                            <li><a href="#informasi" class="btn-biru">Fasilitas & Ketentuan</a></li>
                            <li><a href="#contact" class="btn-utama">Reservasi Sekarang</a></li>
                        </ul>
                    </p>
                </div>
                <div class="keterangan-produk">
                    
                    <h3>Spesifikasi Paintball :</h3>
                        <p>Durasi War : ± 2-3 jam</p>
                        <p>Amunisi : 50 paint bullet/ orang</p>
                        <p>Type War : Team Versus War, Jungle War</p>
                    <h3>Deskripsi Paintball :</h3>
                        <p> Bosan dengan kegiatan petualangan biasa? Ingin mendapatkan tantangan lebih? Atau anda gemar dengan dunia strategi berperang dan ingin melakukannya di Jawa Timur? Disini kami punya solusi. Paintball, salah satu wisata petualangan di PACET MOJOKERTO JAWA TIMUR menggunakan senapan dan lokasi alam yang didesain khusus untuk anda yang gemar tantangan dan petualangan
                        </p>
                </div>
            </div>  
            
        </div>
    </section>
    <!-- end detail produk -->

    <!-- fasilitas & syarat -->
    <section id="informasi">
        <h2>Fasilitas & Ketentuan</h2>
        <div class="line"><img src="img/line.png" alt=""></div>
        <div class="container">
                <div class="fasilitas">
                    <h3>Fasilitas</h3>
                    <p>Peralatan Lengkap Paintball</p>
                    <p>Peralatan keamanan(google mask, seragam, body protector)</p>
                    <p>Profesional Instructur & Trainer Paintball</p>
                    <p>Jungle War Area</p>
                    <p>Safety Talk & Asuransi</p> 
                    <p>Field Snack & Mineral Water</p>
                    <p>Tiket Wanawisata Air Panas Padusan Pacet</p>
                    <p>Tiket Whirpool Berendam Air Panas</p>
                </div>
                <div class="emblem-tos">
                    <img src="img/new_tos11.png" alt="emblem tos adventure pacet">
                    <a href="#detail-produk" class="btn-utama">Lihat Paket Kami</a>
                </div>
                <div class="ketentuan">
                    <h3>Syarat & Ketentuan</h3>
                    <p>Minimal Peserta 20 ORANG</p>
                    <p>Fix jumlah peserta H-2 pelaksanaan <br/>
                        jika ada pengurangan jumlah peserta di hari H kegiatan maka biaya tetap di charge sesuai jumlah peserta di booking awal</p>
                    <p>Dp Minimal 25%, maks. H-7 pelaksanaan kegiatan</p> 
                    <p>DP & Pelunasan Bisa Di Transfer ke :<br/>
                        Rek 610 513 5215 Bank BCA<br/>
                        Rek 00632 015000 10506 Bank BTN<br/>
                        A/N Ahmad Navis Zarkasy</p> 
                </div>
        </div>
    </section>
    <!-- end fasilitas & syarat -->

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