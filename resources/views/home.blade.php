<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Niagahoster</title>
  </head>
  <body>
    <div class="d-none d-lg-block">
      <div class="container">
        <div class="d-flex align-items-center">
          <p style="font-size: 12px;"><i class="fa fa-tag"></i> Gratis E-book 9 Cara Cerdas Menggunakan Domain [x]</p>
          <div class="d-flex ml-auto l-nav-up" style="font-size: 12px;">
            <a href="#"><i class="fa fa-phone-alt"></i>  0274-5305505</a>
            <a href="#"><i class="fa fa-comments"></i>  Live Chat</a>
            <a href="#"><i class="fa fa-lg fa-user-circle"></i>  Member Area</a>
          </div>
        </div>
      </div>
      <div class="cont-nav w-100" style="border-top: 0.5px solid rgb(224, 224, 224); border-bottom: 0.5px solid rgb(224, 224, 224);">
        <div class="container">
          <div class="d-flex align-items-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwriDhCBPGAa42XZIdMhBote7i-st5VpAL1Q&usqp=CAU" width="200px">
            <div class="d-flex ml-auto l-nav">
              <a href="#">Hosting</a>
              <a href="#">Domain</a>
              <a href="#">Server</a>
              <a href="#">Website</a>
              <a href="#">Afiliasi</a>
              <a href="#">Promo</a>
              <a href="#">Pembayaran</a>
              <a href="#">Review</a>
              <a href="#">Kontak</a>
              <a href="#">Blog</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-block d-lg-none">
      <div class="cont-nav-hp">
        <div class="d-flex align-items-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwriDhCBPGAa42XZIdMhBote7i-st5VpAL1Q&usqp=CAU" width="200px">
          <div class="ml-auto">
            <button class="btn btn-outline-secondary" data-toggle="collapse" href="#nav" role="button" aria-expanded="false" aria-controls="nav">
              <span class="fa fa-lg fa-bars"></span>
            </button>
          </div>
        </div>
        <div class="collapse" id="nav">
          <div class="lnav-hp text-center">
              <a href="#">Hosting</a>
              <a href="#">Domain</a>
              <a href="#">Server</a>
              <a href="#">Website</a>
              <a href="#">Afiliasi</a>
              <a href="#">Promo</a>
              <a href="#">Pembayaran</a>
              <a href="#">Review</a>
              <a href="#">Kontak</a>
              <a href="#">Blog</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="mt-5" style="font-family: Montserrat-Bold;">PHP Hosting</h1>
          <h3 class="mb-3" style="font-family: Montserrat-Light;">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
          <p><i class="fa fa-lg fa-check-circle"></i> Solusi PHP untuk performa query yang lebih cepat.</p>
          <p><i class="fa fa-lg fa-check-circle"></i> Konsumsi memori yang lebih rendah</p>
          <p><i class="fa fa-lg fa-check-circle"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</p>
          <p><i class="fa fa-lg fa-check-circle"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</p>
        </div>
        <div class="col-md-6">
          <img class="mt-4" src="assets/svg/illustration banner PHP hosting-01.svg" alt="">
        </div>
      </div>
      <div class="row align-items-center mt-5 no-gutters">
        <div class="col-lg-4 col-md-6 text-center">
          <img src="assets/images/zendguard.png" alt="">
          <p>PHP Zend Guard Loader</p>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <img src="assets/images/composer.png" alt="">
          <p>PHP Composer</p>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <img src="assets/images/ioncube.png" alt="">
          <p>PHP IonCube Loader</p>
        </div>
      </div>
      <div class="text-center mt-5">
        <h3 style="font-family: Montserrat-Bold;">Paket Hosting Singapura yang Tepat</h3>
        <h3 style="font-family: Montserrat-Light;">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
      </div>
      <div class="row price mt-5 no-gutters">
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header">
              <h4>Bayi</h4>
            </div>
            <div class="card-body">
            @foreach ($bayi as $bay)
              <p><del>Rp @currency($bay->price)</del></p>
              <p class="d-flex justify-content-center">Rp <span class="ml-2" style="font-size: 50px; margin-top: -20px;">@cut02($bay->price_diskon)</span><span>.@cut26($bay->price_diskon)</span>/bln</p>
            @endforeach
              <p class="mb-5"><span>938</span> Pengguna Terdaftar</p>
              <p><span>0.5X RESOURCE POWER</span></p>
              <P><span>500 MB</span>  Disk Space</P>
              <p><span>Unlimited</span> Bandwidth</p>
              <p><span>Unlimited</span> Databases</p>
              <p><span>1</span> Domain</p>
              <p><span>Instant</span> Backup</p>
              <p><span>Unlimited SSL</span> Gratis Selamanya</p>
              <a href="#" class="btn btn-outline-secondary">Pilih Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header">
              <h4>Pelajar</h4>
            </div>
            <div class="card-body">
            @foreach ($pelajar as $pelaja)
              <p><del>Rp @currency($pelaja->price)</del></p>
              <p class="d-flex justify-content-center">Rp <span class="ml-2" style="font-size: 50px; margin-top: -20px;">@cut02($pelaja->price_diskon)</span><span>.@cut26($pelaja->price_diskon)</span>/bln</p>
            @endforeach
              <p class="mb-5"><span>4.168</span> Pengguna Terdaftar</p>
              <p><span>1X RESOURCE POWER</span></p>
              <P><span>Unlimited</span> Disk Space</P>
              <p><span>Unlimited</span> Bandwidth</p>
              <p><span>Unlimited</span> Databases</p>
              <p><span>10</span> Addon Domain</p>
              <p><span>Instant</span> Backup</p>
              <p><span>Domain Gratis</span> Selamanya</p>
              <p><span>Unlimited SSL</span> Gratis Selamanya</p>
              <a href="#" class="btn btn-outline-secondary">Pilih Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 best position-relative">
          <div class="card text-center">
            <div class="card-header text-white">
              <h4>Personal</h4>
              <img class="best-seller" src="assets/images/PikPng.com_best-seller-png_837277.png" width="100px" alt="">
            </div>
            <div class="card-header p-0 text-white">
            @foreach ($personal as $person)
              <p><del>Rp @currency($person->price)</del></p>
              <p class="d-flex justify-content-center">Rp <span class="ml-2" style="font-size: 50px; margin-top: -20px;">@cut02($person->price_diskon)</span><span>.@cut26($person->price_diskon)</span>/bln</p>
            @endforeach
            </div>
            <div class="text-white" style="background-color: #007acc;">
              <p class="mt-3"><span>10.017</span> Pengguna Terdaftar</p>
            </div>
            <div class="card-body">
              <p><span>2X RESOURCE POWER</span></p>
              <P><span>Unlimited</span> Disk Space</P>
              <p><span>Unlimited</span> Bandwidth</p>
              <p><span>Unlimited</span> POP3 Email</p>
              <p><span>Unlimited</span> Databases</p>
              <p><span>Unlimited</span> Addon Domains</p>
              <p><span>Instant</span> Backup</p>
              <p><span>Domain Gratis</span> Selamanya</p>
              <p><span>Unlimited SSL</span> Gratis Selamanya</p>
              <p><span>Private</span> Name Server</p>
              <p><span>SpamAssasin</span> Mail Protection</p>
              <a href="#" class="btn btn-primary">Pilih Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center">
            <div class="card-header">
              <h4>Bisnis</h4>
            </div>
            <div class="card-body">
            @foreach ($bisnis as $bisni)
              <p><del>Rp @currency($bisni->price)</del></p>
              <p class="d-flex justify-content-center">Rp <span class="ml-2" style="font-size: 50px; margin-top: -20px;">@cut02($bisni->price_diskon)</span><span>.@cut26($bisni->price_diskon)</span>/bln</p>
            @endforeach
              <p class="mb-5"><span>3.552</span> Pengguna Terdaftar</p>
              <p><span>3X RESOURCE POWER</span></p>
              <P><span>Unlimited</span> Disk Space</P>
              <p><span>Unlimited</span> Bandwidth</p>
              <p><span>Unlimited</span> POP3 Email</p>
              <p><span>Unlimited</span> Databases</p>
              <p><span>Unlimited</span> Addon Domains</p>
              <p><span>Magic Auto</span> Backup & Restore</p>
              <p><span>Domain Gratis</span> Selamanya</p>
              <p><span>Unlimited SSL</span> Gratis Selamanya</p>
              <p><span>Private</span> Name Server</p>
              <p><span>Prioritas</span> Layanan Support</p>
              <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
              <p><span>SpamExpert</span> Pro Mail Protection</p>
              <a href="#" class="btn btn-outline-secondary">Diskon 40%</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <h3 style="font-family: Montserrat-Light;">Powerful dengan Limit PHP yang Lebih Besar</h3>
      </div>
      <div class="row pr-5 pl-5 mt-4 text-center">
        <div class="col-md-6">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row"><i class="fa fa-lg fa-check-circle"></i></th>
                <td>max execution time 300s</td>
              </tr>
              <tr>
                <th scope="row"><i class="fa fa-lg fa-check-circle"></i></th>
                <td>max execution time 300s</td>
              </tr>
              <tr>
                <th scope="row"><i class="fa fa-lg fa-check-circle"></i></th>
                <td>php memory limit 1024 MB</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row"><i class="fa fa-lg fa-check-circle"></i></th>
                <td>post max size 128 MB</td>
              </tr>
              <tr>
                <th scope="row"><i class="fa fa-lg fa-check-circle"></i></th>
                <td>upload max filesize 128 MB</td>
              </tr>
              <tr>
                <th scope="row"><i class="fa fa-lg fa-check-circle"></i></th>
                <td>max input vars 2500</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="text-center mt-5">
        <h3 style="font-family: Montserrat-Light;">Semua Paket Hosting Sudah Termasuk</h3>
      </div>
      <div class="row tech text-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" alt="" width="75">
              <h5 class="card-title bold">PHP Semua Versi</h5>
              <p class="card-text">Pilih mulai dari PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="assets/svg/icon PHP Hosting_My SQL.svg" alt="" width="75">
              <h5 class="card-title bold">MySQL Versi 5.6</h5>
              <p class="card-text">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="assets/svg/icon PHP Hosting_CPanel.svg" alt="" width="75">
              <h5 class="card-title bold">Panel Hosting cPanel</h5>
              <p class="card-text">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="assets/svg/icon PHP Hosting_garansi uptime.svg" alt="" width="75">
              <h5 class="card-title bold">Garansi Uptime 99.9%</h5>
              <p class="card-text">Data center yang mendukung kelangsungan website Anda 24/7.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="assets/svg/icon PHP Hosting_InnoDB.svg" alt="" width="75">
              <h5 class="card-title bold">Database InnoDB Unlimited</h5>
              <p class="card-text">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="assets/svg/icon PHP Hosting_My SQL remote.svg" alt="" width="75">
              <h5 class="card-title bold">Wildcard Remote MySQL</h5>
              <p class="card-text">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <h3 style="font-family: Montserrat-Light;">Mendukung Penuh Framework Laravel</h3>
      </div>
      <div class="row pt-4">
        <div class="col-md-6">
          <p style="font-size: 22px;">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami 
            mendukung penuh framework favorit Anda
          </p>
          <p><i class="fa fa-lg fa-check-circle"></i> Install Laravel 1 klik dengan Softaculous Installer.</p>
          <p><i class="fa fa-lg fa-check-circle"></i> Mendukung ekstensi PHP MCrypt, phar, mbstring, json, dan fileinfo.</p>
          <p><i class="fa fa-lg fa-check-circle"></i> Tersedia Composer dan SSH untuk menginstall packages pilihan Anda.</p>
          <p style="font-size: 12px;">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
          <a href="#" class="btn btn-primary" style="border-radius: 20px;">Pilih Hosting Anda</a>
        </div>
        <div class="col-md-6">
          <img src="assets/svg/illustration banner support laravel hosting.svg" alt="">
        </div>
      </div>
      <div class="text-center mt-5">
        <h3 style="font-family: Montserrat-Light;">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h3>
      </div>
      <div class="row no-gutters pt-5" style="padding-left: 13vw; line-height: 10px;">
        <div class="col-md-3 col-6">
          <p>IcePHP</p>
          <p>apc</p>
          <p>apcu</p>
          <p>apm</p>
          <p>ares</p>
          <p>bcmath</p>
          <p>bcompiler</p>
          <p>big_int</p>
          <p>bitset</p>
          <p>bloomy</p>
          <p>bz2_filter</p>
          <p>clamav</p>
          <p>coin_acceptor</p>
          <p>crack</p>
          <p>dba</p>
        </div>
        <div class="col-md-3 col-6">
          <p>http</p>
          <p>huffman</p>
          <p>idn</p>
          <p>igbinary</p>
          <p>imagick</p>
          <p>imap</p>
          <p>inclued</p>
          <p>inotify</p>
          <p>interbase</p>
          <p>intl</p>
          <p>ioncube_loader</p>
          <p>ioncube_loader_4</p>
          <p>jsmin</p>
          <p>json</p>
          <p>Idap</p>
        </div>
        <div class="col-md-3 col-6">
          <p>nd_pdo_mysql</p>
          <p>oauth</p>
          <p>oci8</p>
          <p>odbc</p>
          <p>opcache</p>
          <p>pdf</p>
          <p>pdo</p>
          <p>pdo_dblib</p>
          <p>pdo_firebird</p>
          <p>pdo_mysql</p>
          <p>pdo_odbc</p>
          <p>pdo_pgsql</p>
          <p>pdo_sqlite</p>
          <p>pgsql</p>
          <p>phalcon</p>
        </div>
        <div class="col-md-3 col-6">
          <p>stats</p>
          <p>stem</p>
          <p>stomp</p>
          <p>suhosin</p>
          <p>sybase_ct</p>
          <p>sysvmsg</p>
          <p>sysvsem</p>
          <p>sysvshm</p>
          <p>tidy</p>
          <p>timezonedb</p>
          <p>trader</p>
          <p>translit</p>
          <p>uploadprogress</p>
          <p>uri_template</p>
          <p>uuid</p>
        </div>
      </div>
      <div class="text-center mt-5 mb-5">
        <a href="#" class="btn btn-outline-secondary">Selengkapnya</a>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3 class="mb-4" style="font-family: Montserrat-Light;">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
          <p>SuperMicro Intel Xeon 24-Cores server dengan RAM 128 GB dan teknologi LVE CloudLinux untuk
            stabilitas server Anda. Dilengkapi dengan SSD untuk kecepatan MySQL dan caching, Apache load balancer
            berbasis LiteSpeed Technologies, CageFS security, Raid-10 protection dan backup untuk keamanan website PHP Anda
          </p>
          <a href="#" class="btn btn-primary">Pilih Hosting Anda</a>
        </div>
        <div class="col-md-6">
          <img src="assets/images/Image support.png" alt="">
        </div>
      </div>
    </div>
    <div class="p-2" style="background-color: rgb(243, 243, 243);">
      <div class="container">
        <div class="row mt-4">
          <div class="col-6">
            <p>Bagikan jika Anda menyukai halaman ini.</p>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <p class="d-flex mr-2" style="font-size: 25px;"><i class="fa fa-lg fa-facebook-square"></i><span class="align-items-center ml-2" style="font-size: 16px;"> 80k</span></p>
              <p class="d-flex mr-2" style="font-size: 25px;"><i class="fa fa-lg fa-twitter-square"></i><span class="align-items-center ml-2" style="font-size: 16px;"> 450</span></p>
              <p class="d-flex mr-2" style="font-size: 25px;"><i class="fa fa-lg fa-google-plus-square"></i><span class="align-items-center ml-2" style="font-size: 16px;"> 1900</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-primary">
        <div class="container">
          <div class="row text-white pt-5 pb-5">
            <div class="col-md-9">
              <h2>Perlu <span class="bold">BANTUAN?</span> Hubungi Kami : <span class="bold">0274-5305505</span></h2>
            </div>
            <div class="col-md-3">
              <a href="#" class="btn btn-lg btn-primary"><i class="fa fa-xl fa-comments"></i> Live Chat</a>
            </div>
          </div>
        </div>
    </div>
    <div class="bg-dark footer text-white pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3">
            <p class="color-menu-footer" >HUBUNGI KAMI</p>
            <p>0274-5305505</p>
            <p>Senin - Minggu</p>
            <p>24 Jam Nonstop</p>
            <p>Jl. Selokan Mataram Monjali Karangjati MT I/304 Sinduadi, Mlati, Sleman, Yogyakarta 55284</p>
          </div>
          <div class="col-md-3">
            <p class="color-menu-footer">LAYANAN</p>
            <p>Domain</p>
            <p>Shared Hosting</p>
            <p>Cloud VPS Hosting</p>
            <p>Web Builder</p>
            <p>Keamanan SSL/HTTPS</p>
            <p>Jasa Pembuatan Website</p>
            <p>Program Affiliasi</p>
          </div>
          <div class="col-md-3">
            <P class="color-menu-footer">SERVICE HOSTING</P>
            <p>Hosting Murah</p>
            <p>Hosting Indonesia</p>
            <p>Hosting Singapura SG</p>
            <p>Hosting PHP</p>
            <p>Hosting Wordpress</p>
            <p>Hosting Laravel</p>
          </div>
          <div class="col-md-3">
            <P class="color-menu-footer">TUTORIAL</P>
            <p>Knowledgebase</p>
            <p>Blog</p>
            <p>Cara Pembayaran</p>
          </div>
          </div>
          <div class="row">
          <div class="col-md-3">
            <P class="color-menu-footer">TENTANG KAMI</P>
            <p>Tim Niagahoster</p>
            <p>Karir</p>
            <p>Events</p>
            <p>Penawaran & Promo Spesial</p>
            <p>Kontak Kami</p>
          </div>
          <div class="col-md-3">
            <P class="color-menu-footer">KENAPA PILIH NIAGAHOSTER?</P>
            <p>Support Terbaik</p>
            <p>Garansi Harga Termurah</p>
            <p>Domain Gratis Selamannya</p>
            <p>Datacenter Hosting Terbaik</p>
            <p>Review Pelanggan</p>
          </div>
          <div class="col-md-3">
            <P class="color-menu-footer">NEWSLETTER</P>
            <div class="input-group mb-3">
              <input type="email" class="form-control input-email" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Berlangganan</button>
              </div>
            </div>
            <p style="color: rgb(107, 107, 107);">Dapatkan promo dan konten menarik dan penyedia hosting terbaik Anda</p>
          </div>
          <div class="col-md-3">
            <img src="assets/images/contact.png" alt="">
          </div>
          <div class="col-md-12">
            <P class="color-menu-footer">PEMBAYARAN</P>
            <div class="d-inline">
              <img src="assets/images/bca.png" alt="">
              <img src="assets/images/mandiri.png" alt="">
              <img src="assets/images/bni.png" alt="">
              <img src="assets/images/visa.png" alt="">
              <img src="assets/images/mastercard.png" alt="">
              <img src="assets/images/atm.png" alt="">
              <img src="assets/images/permatabank.png" alt="">
              <img src="assets/images/prima.png" alt="">
              <img src="assets/images/alto.png" alt="">
            </div>
            <p style="color: rgb(107, 107, 107);">Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif!</p>
          </div>
        </div>
        <div class="row copyright">
          <div class="col-md-8">
            <p>Copyright ©2016 Niagahoster | Hosting powered by PHP7.CloudLinux, CloudFlare, BitNinja, and DC Biznet Technovillage Jakarta</p>
            <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
          </div>
          <div class="col-md-4">
            <p>Syarat dan Ketentuan | Kebijakan Privasi</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://kit.fontawesome.com/8d9df0a37b.js" crossorigin="anonymous"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>