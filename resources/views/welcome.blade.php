<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/font-awesome.css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="_nav">
            <div class="_logo"><img src="images/logo.png" alt="logo-lina-kaktus"></div>
            <div class="_navbar">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="katalog">Katalog</a></li>
                    <li><a href="tentang.html">Tentang Kami</a></li>
                    <li><div class="_keranjang"><img src="images/icon/cart.png" alt="Keranjang"></div></li>
                </ul>
            </div>    
        </div>            

            <div class="content">
                <div class="container-fluid m-0 p-0" >
                    <div id="myCarousel" class="carousel slide m-0 p-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                        <img src="images/IMG1.jpg" alt="slide1" style="width:100%;">
                        </div>

                        <div class="carousel-item">
                        <img src="images/IMG2.jpg" alt="slide2" style="width:100%;">
                        </div>
                    
                        <div class="carousel-item">
                        <img src="images/IMG3.jpg" alt="slide3" style="width:100%;">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="_jenis">
                    <div class="_text">
                        <h2>Tanaman Kaktus</h2>
                        <p style="text-align: justify; margin-top: 45px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="_con">
                        <img src="images/con1.png" alt="con1">
                        <div class="_desk">
                            <h3>Penghias Ruang Tamu</h3>
                        </div>
                    </div>
                    <div class="_con">
                        <img src="images/con2.png" alt="con2">
                        <div class="_desk">
                            <h3>Berbagai Jenis Tanaman</h3>
                        </div>
                    </div>
                    <div class="_con">
                        <img src="images/con3.png" alt="con3">
                        <div class="_desk">
                            <h3>Penghias Belakang Rumah</h3>
                        </div>
                    </div>
                </div>
                <div class="_laris">
                    <div class="lr-jd">
                        <h2>Produk Terlaris</h2>
                    </div>
                    <div class="lr-pr">
                        <div class="lr-bg">
                            <img src="images/laris.jpg">
                            <div class="lr-nm">
                                <h4>Lidah Mertua</h4>
                            </div>
                            <div class="lr-lr">
                                <p>Terjual : 250</p>
                            </div>
                        </div>
                        <div class="lr-bg">
                            <img src="images/laris.jpg">
                            <div class="lr-nm">
                                <h4>Lidah Mertua</h4>
                            </div>
                            <div class="lr-lr">
                                <p>Terjual : 250</p>
                            </div>
                        </div>
                        <div class="lr-bg">
                            <img src="images/laris.jpg">
                            <div class="lr-nm">
                                <h4>Lidah Mertua</h4>
                            </div>
                            <div class="lr-lr">
                                <p>Terjual : 250</p>
                            </div>
                        </div>
                        <div class="lr-bg">
                            <img src="images/laris.jpg">
                            <div class="lr-nm">
                                <h4>Lidah Mertua</h4>
                            </div>
                            <div class="lr-lr">
                                <p>Terjual : 250</p>
                            </div>
                        </div>
                    </div>
                    <div class="lihat-lr">
                        <a href="#"><h5>Lihat lainnya ></h5></a>
                    </div>
                </div>
                <div class="_about">
                    <div class="a-bg">
                        <img src="images/tentang.png" alt="tentang lina kaktus">
                    </div>
                    <div class="a-te">
                        <h2>Tentang Lina Kaktus</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, 
                            eum nemo? Delectus commodi eligendi eos culpa maiores </p> <p class="pc">beatae in neque quaerat. Tempore quisquam 
                            veniam nam odio. Est ut nesciunt numquam harum nostrum earum consequatur reprehenderit aliquam 
                            quisquam. Iusto cum doloribus odit facilis totam aut, nihil sunt, nam officia labore consectetur 
                            molestiae quisquam sequi natus dolorum</p>
                    </div>
                </div>
                <diV class="_news">
                    <div class="judul-news">
                        <h2>Berita Kaktus Lina</h2>
                    </div>
                    <div class="isi-news">
                        <div class="b-news">
                            <img src="images/news.jpg" alt="news">
                        </div>
                        <div class="b-news">
                            <img src="images/news.jpg" alt="news">
                        </div>
                        <div class="b-news">
                            <img src="images/news.jpg" alt="news">
                        </div>
                    </div>
                </diV>
                <div class="reseller">
                    <div class="t-res">

                    </div>
                    <div class="form-res">

                    </div>
                </div>

                <footer class="bg-dark pb-4">
                    <div class="container">
                        <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-5 text-white mt-4 pr-5">
                                <p>Tentang Kaktus Lina</p>
                                <p style="font-size: 10pt;">Kaktus lina merupakan tempat budidaya kaktus yang telah berdiri sejak 2007, Kaktus Lina menyediakan banyak produk yang berkualitas, dan unik</p>
                                Media Sosial
                                <div class="sosial-media" style="font-size: 16pt;">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-youtube"></i>
                                </div>
                            </div>
                            <div class="col-md-3 text-white mt-4">
                                <p>Metode Pembayaran</p>                                        
                                <div class="pembayaran" style="font-size: 16pt;">
                                    <i class="fab fa-cc-visa"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                    <i class="fab fa-cc-paypal"></i>
                                </div>
                            </div>
                            <div class="col-md-4 text-white mt-4">
                                <p>Tentang Pengembang</p>  
                                <p style="font-size: 10pt;">Pengembang merupakan tim dari SMKN 1 Cimahi yang diberi tugas untuk mengembangkan sebuah website dalam mata pelajaran Pemodelan Perangkat Lunak</p>                                      
                                email for bussiness enquiries <br>
                                <span class="pengembang" style="font-size: 16pt;">
                                    <i class="far fa-envelope"></i> 
                                </span>
                                ourteam89@gmail.com                        
                            </div>
                        </div>
                        </div>
                    </div>
                </footer>

                <div class="nav-mobile">
                    <div class="tom">
                        <div class="home active">
                            <a href="index.html"><img src="images/icon/home.png" alt="home"></a>
                            <p>Beranda</p>
                        </div>
                        <div class="catalog">
                            <a href="#"><img src="images/icon/catalog.png" alt="catalog"></a>
                            <p>Katalog</p>
                        </div>
                        <div class="info">
                            <a href="tentang.html"><img src="images/icon/info.png" alt="info"></a>
                            <p>Tentang</p>
                        </div>
                        <div class="cart">
                            <a href="#"><img src="images/icon/cart.png" alt="cart"></a>
                            <p>Keranjang</p>
                        </div>
                    </div>
                </div>                
                <div class="_sosmed">
                    <div class="_fb">
                        <img src="images/icon/fb.png" alt="facebook" title="facebook lina kaktus">
                    </div>
                    <div class="_ig">
                            <img src="images/icon/ig.png" alt="instagram" title="instagram lina kaktus">
                    </div>
                    <div class="_wa">
                        <img src="images/icon/wa.png" alt="whatsapp" title="whatsapp teh lina">
                    </div>
                </div>
                <div class="wa-btn position-fixed m-4 " style="z-index: 999; right:0; bottom:0%; height:60px; width:60px;">                                    
                    <a href="#" class="text-reset">
                        <div class="whatsapp rounded-circle bg-success p-3 text-center shadow-lg" >
                            <i class="fab fa-whatsapp text-white" style="font-size: 20pt;"></i>    
                        </div>      
                    </a>              
                </div>
            </div>
        </div>

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/font-awesome.js"></script>
        <script src="/js/code.js"></script>
    </body>
</html>
