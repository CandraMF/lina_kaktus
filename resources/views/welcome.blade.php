<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kaktus Lina</title>

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
        <nav class="navbar navbar-fixed-top navbar-expand-lg  navbar-toggleable-sm navbar-inverse bg-white flex-column">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <i class="far fa-humberger"></i>
            </button>
            <a href="/" class="navbar-brand navbar-toggler-left text-reset">Kaktus Lina</a>
            <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item active ml-2 mr-2 nav-active">
                        <a class="nav-link text-reset" href="/">Beranda <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link text-reset" href="/katalog">Katalog</a>
                    </li>
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link text-reset" href="/cara_pesan">Cara Memesan</a>
                    </li>
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link text-reset" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item ml-2 mr-2">                    
                        <div class="dropdown">
                            <a class="nav-link text-reset" href="/keranjang"><i class="fa fa-shopping-cart"></i></a>
                            <div class="dropdown-content bg-white p-3">                              
                                @if(\Session::has('login'))  
                                @php
                                    $userId = Session::get('id');
                                    $i=1;
                                @endphp         
                                Total item : {{ \Cart::session($userId)->getContent()->count() }}
                                <br>
                                @foreach(\Cart::session($userId)->getContent() as $c)
                                {{ $i++.'. '.$c->name }}    
                                <br>                                
                                    @endforeach                                                    
                                @else
                                    <h6 class="text-center">Keranjang masih kosong</h6>
                                @endif
                            </div>
                        </div>                                            
                    </li>                                                            
                </ul>
            </div>
        </nav>            
            @if(session('alert'))
                <script>alert("{{ session('alert')}}");</script>
            @endif
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
                    <div class="_text pr-5">
                        <h2>Tanaman Kaktus</h2>
                        <p style="text-align: justify; margin-top: 45px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad m.</p>
                        <a href="katalog " class="btn rounded-pill" style="background: #9AC282; color: white; padding: 8px 20px; box-shadow: 3px 3px 10px rgba(145, 123, 0, 0.507);">Lihat Katalog &nbsp;<span class="fa fa-chevron-right"></span></a>
                    </div>
                    <div class="_con2">
                        <img src="images/interior.jpg" alt="con1" class="" style="height:100%;">
                        <div class="_desk">
                            <p>Interior</p>
                        </div>
                    </div>
                    <div class="_con2">
                        <img src="images/con3.png" alt="con1" >
                        <div class="_desk">
                            <p>Exterior</p>
                        </div>
                    </div>
                    <div class="newcon">
                        <img src="images/1.png" alt="" style="width: 100%; transform: scale(1.1) translate(0, 20px); filter: contrast(0.8) brightness(1.2);">
                    </div>
                    <div class="overlay-bg">

                    </div>
                    <div class="_con">
                        <img src="images/exterior.jpg" alt="con3" class="img-fluid">
                        <div class="_desk">
                            <p>Wedding Orgenizer</p>
                        </div>
                    </div>
                </div>
                <div class="_laris">
                    <div class="container">
                        <div class="d-flex justify-content-center row text-center pt-5">
                            <h3>Produk Terlaris</h3>
                            <div class="row d-flex justify-content-center pt-3 pb-3" style="width:100%;">                        
                                @foreach($barang as $b)                                                                                                                                                                                                                                                                                                                                                           

                                    <a href="#" 
                                        class="text-reset text-decoration-none mycard"                                     
                                        data-toggle="modal" 
                                        data-target="#myModal" 
                                        src="/data_file/{{ $b->gambar }}"
                                        id="{{ $b->id }}"
                                        nama="{{ $b->nama }}"
                                        desk="{{ $b->deskripsi }}"
                                        berat="{{ $b->berat }}">   
                                            
                                        <div class="col-5 p-0 overflow-hidden rounded m-3 col-md-2 text-center border-sm border"  id="card">
                                            <div class="myImage overflow-hidden bg-dark" style="width: 100%; height: 190px;">
                                                <div class="badge badge-success float-left mb-1 position-absolute m-1" style="z-index: 999;">Terlaris</div>
                                                <i class="fa fa-search position-absolute text-white detail-btn"></i>                                            
                                                <img src="/data_file/{{ $b->gambar }}" alt="" class="img-fluid">  
                                            </div>
                                            <div class="desk pl-3 pr-3 pt-2 pb-3" style="height: 90px; font-size: 11pt;">
                                                <div class="nama">{{ $b->nama }}</div>                                                    
                                            </div>
                                            <div class="" style=" width: 100%;"> 
                                                @if(!\Session::get('login'))
                                                    <a data-toggle="modal" data-target="#inputModal" id="{{ $b->id }}" href="" class="btn btn-sm  rounded ml-3 mr-3 position-absolute mb-2 toKeranjang" >Beli</a>
                                                @else
                                                    <a href="/katalog/masuk_keranjang/{{ $b->id }}" class="btn btn-sm rounded ml-3 mr-3 position-absolute mb-2 toKeranjang" >Beli</a>
                                                @endif                                        
                                            </div>                                                                                      
                                        </div>                                          
                                    </a>                                
                                @endforeach                                                            
                            </div>
                            <div class="d-flex col-md-12 justify-content-center mb-4">
                                <a href="katalog " class="btn rounded-pill btn-dark shadow pr-3 pl-3 btn-sm ">Lihat Lebih Banyak &nbsp; <span class="fa fa-chevron-right"></span></a>                                                                                            
                            </div>
                        </div>  
                                              
                    </div>  
                           
                </div>
                <div class="_about container-fluid m-0 p-0 row" id="tentang" >
                      
                    <div class="a-bg col-12 m-0 col-md-6 p-0">
                        <img src="images/tentang.png" alt="tentang lina kaktus">
                    </div>
                    <div class="a-te col-12 col-md-6">
                        <h2>Tentang Lina Kaktus</h2>
                        <p>Kaktus Lina merupakan tempat budi daya kaktus unu
                            eum nemo? Delectus commodi eligendi eos culpa maiores </p> <p class="pc">beatae in neque quaerat. Tempore quisquam 
                            veniam nam odio. Est ut nesciunt numquam harum nostrum earum </p>
                        <a href="https://www.google.com/maps/place/Lina+Kaktus+Lembang" target="blank" class="btn btn-light rounded-pill pl-3 pr-3"><span class="fa fa-map-marker-alt"></span>&nbsp;&nbsp; Buka Maps</a>
                    </div>
                </div>

                <div class="container p-5 mb-5" style="min-height: 75vh">
                    <div class="col-md-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 text-center mb-5"><h3>Berita Kaktus Lina</h3></div>
                            <a class="col-md-3 m-4 p-0 overflow-hidden  text-reset" target="blank" style="height: 290px;" href="https://youtu.be/4W92Uv2pLqo">
                                <div class="col-md-12 bg-light p-0 " style="width: 100%; height: 190px; overflow: hidden">
                                    <div class="position-absolute  text-white btn" style="bottom: 0; font-size: 10pt;"><span class="fab fa-youtube"></span>&nbsp;&nbsp;Muhammad Rizkings</div>
                                    <img src="https://i.ytimg.com/vi/4W92Uv2pLqo/maxresdefault.jpg" alt="news" style="height: 100%;" target="blank">                                          
                                </div>                            
                                <h6 class="mt-2">KAKTUS Lina Lembang</h6> 
                                <p>KAKTUS Lina Lembang - CONTEMPLATION 006</p>                               
                            </a>
                            <a class="col-md-3 m-4 p-0 overflow-hidden text-reset" target="blank" style="height: 290px;" href="https://jabarekspres.com/2018/kaktus-lina-dari-hobi-koleksi-menjadi-juragan-kaktus/">
                                <div class="col-md-12 bg-light p-0 " style="width: 100%; height: 190px; overflow: hidden">
                                    <div class="position-absolute text-white btn" style="bottom: 0; font-size: 10pt;"><span class="fa fa-tag"></span>&nbsp;&nbsp;jabarexpres.com</div>
                                    <img src="images/news.jpg" alt="news"  style="height: 100%; width: 100%;">                                           
                                </div>                            
                                <h6 class="mt-2">Kaktus Lina, dari Hobi Koleksi Menjadi Juragan Kaktus</h6>
                                <p>SIAPA yang tak kenal tumbuhan Kaktus, tumbuhan ini merupakan anggota tumbuhan berbunga famili Cactaceae. Kaktus dan Sukulen dapat tumbuh pada waktu yang lama tanpa air.</p>
                            </a>
                            <a class="col-md-3 m-4 p-0 overflow-hidden  text-reset" target="blank" style="height: 290px;" href="https://youtu.be/AM-e1pwj5aQ">
                                <div class="col-md-12 bg-light p-0 " style="width: 100%; height: 190px; overflow: hidden">
                                    <div class="position-absolute  text-white btn" style="bottom: 0; font-size: 10pt;"><span class="fab fa-youtube"></span>&nbsp;&nbsp;Ante Onti</div>
                                    <img src="https://i.ytimg.com/vi/AM-e1pwj5aQ/maxresdefault.jpg" alt="news" style="height: 100%; margin-left: -50px;" target="blank">                                          
                                </div>                            
                                <h6 class="mt-2">ANTE ONTI LET'S GO! : </h6>
                                <p>KAKTUS LINA LEMBANG BETAH BERJAM-JAM</p>
                            </a>
                        </div>
                    </div>
                </div>                
                <div class=" conatiner-fluid  p-2 m-0" style="  background: rgb(105, 179, 105); min-height: 100px;">
                    <div class="container d-flex flex-row justify-content-center" style="height: 100%">                                                                       
                        <a class="btn col-md-2 rounded-pill align-self-center "><h2><span class="fas fa-shopping-bag"></span> Open Reseller!</h2></a>                                                         
                        <a class="btn btn-light col-md-2 shadow rounded-pill align-self-center cursor-pointer"><span class="fab fa-whatsapp"></span> Chat di Whatsapp</a>                                                         
                    </div>                 
                </div>
                <div class="reseller  pb-5 pt-5">
                    <div class="container">                        
                        <div class="col-md-12">
                            <div class="row d-flex justify-content-center">                                
                                <div class="col-md-3 m-3 p-3 shadow bg-light text-center">
                                    <h4>Pengalaman +11 Tahun <br></h4>                                    
                                    <a href="/#tentang" class="btn btn-success rounded-pill mt-4">Tentang Kaktus Lina</a>
                                </div>
                                <div class="col-md-3 m-3 p-3 shadow bg-light text-center">
                                    <h4>Banyak Testimoni <br></h4>
                                    <h6>Dari Berbagai Daerah</h6>
                                    <a href="https://www.instagram.com/kaktuslina_lembang" class="btn btn-success rounded-pill mt-4"><span class="fab fa-instagram"></span> Lihat di Instagram</a>
                                </div>
                                <div class="col-md-3 m-3 p-3 shadow bg-light text-center">
                                    <h4>Produk Terlengkap <br> </h4>
                                    <h5>+500 Produk</h5>
                                    <a href="/katalog" class="btn btn-success rounded-pill mt-4"> Lihat katalog</a>
                                </div>
                            </div>
                        </div>
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
                                <a class="badge badge-success mt-3 p-2" href="/cara_pesan" sytle="cursor-pointer"><span class="fas fa-shopping-bag "></span> &nbsp; Lihat Cara Memesan</a>
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

                <div class="nav-mobile col-md-12 m-0 p-0 position-fixed">
                    <div class="d-flex justify-content-between text-center p-2 pt-3">
                        <a class="item-nav  ml-2 mr-2 col-md-1 m-0 p-0 active-nav" href="/">
                            <i class="fa fa-home m-0" style="font-size: 16pt"></i>
                            <div>Beranda</div>
                        </a>
                        <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0 " href="/katalog">
                            <i class="fa fa-book-open" style="font-size: 16pt"></i>
                            <div>Katalog</div>                            
                        </a>                        
                        <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0" href="/keranjang">
                            <i class="fa fa-shopping-cart" style="font-size: 16pt"></i>
                            <div>Keranjang</div>
                        </a>                        
                        <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0" href="/tentang">
                            <i class="fa fa-info-circle" style="font-size: 16pt"></i>
                            <div>Tentang</div>                            
                        </a>
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

        <div id="myModal" class="modal fade" role="dialog">        
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content myModal overflow-hidden">                           
                    <div class="modal-body p-0 m-0 overflow-hidden">                          
                        <div class="row m-0 p-0" >
                            <div class="col-md-6 m-0 p-0">
                                <img class="img-responsive img-modal" style="overflow: hidden; height: 100%; width: 100%;" />
                            </div>     
                            <div class="col-md-6 p-0 m-0"> 
                                <div type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="transform: translate(0, -30px); "></div>                                
                                <div class="detail col-md-12 p-4 ">

                                </div>
                                @if(!\Session::get('login'))                                
                                    <a data-toggle="modal" data-target="#inputModal" id="" href="" class="btn rounded ml-3 mr-3 btn-success position-absolute mb-2 toKeranjang text-white toModal" >Beli</a>
                                @else
                                    <a href="" class="btn enter rounded ml-3 mr-3 position-absolute mb-2 toKeranjang btn-success">Beli</a>
                                @endif

                            </div>      
                        </div>                                                                                  
                    </div>                                                            
                </div>
            </div>
        </div>

        <div id="inputModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content myModal overflow-hidden">
                    <div class="modal-body p-0 m-0 overflow-hidden">  
                        <div class="row m-0 p-5" >
                            <form action="keranjang/login" method="post" class="col-md-12 text-center">                                
                                {{ csrf_field() }}
                                <h5> Masukan Nama Anda</h5>
                                <div class="form-group mt-3">
                                    <input type="text" name="nama" class="form-control" placeholder="nama lengkap">
                                </div>
                                <input type="hidden" name="idbarang" class="idbarang" value="">
                                <div class="form-group">
                                    <input type="submit" value="submit" name="submit" class="btn align-self-center shadow" style="background: rgb(105, 139, 85); color: white;">
                                </div>
                            </form>
                        </div>                                                                                  
                    </div>                                                            
                </div>
            </div>
        </div> 

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/font-awesome.js"></script>
        <script src="/js/code.js"></script>
        <script>
            $('#myModal').on('show.bs.modal', function(e) {
                var image = $(e.relatedTarget).attr('src');
                var id = $(e.relatedTarget).attr('id');
                var nama = $(e.relatedTarget).attr('nama');
                var deskripsi = $(e.relatedTarget).attr('desk');
                var berat = $(e.relatedTarget).attr('berat');   
                        
                $(".toModal").attr("id", id);
                $(".img-modal").attr("src", image);
                $(".enter").attr("href", "/katalog/masuk_keranjang/"+id);
                $(".detail").html(
                    "<p>"+nama+"</p>" + 
                    "Berat : "+berat+"gr/1pcs <br>" +
                    deskripsi   
                );
            });

            $('#inputModal').on('show.bs.modal', function(e) {            
                
                $('#myModal').modal('hide');

                var id = $(e.relatedTarget).attr('id');  
                
                $(".idbarang").attr("value", id);
            });
        </script>
        <script async='async' src='https://cdn.rawgit.com/aFarkas/lazysizes/gh-pages/lazysizes.min.js' type='text/javascript'></script>
        <script>
        //<![CDATA[
        for(var imgEl=document.getElementsByTagName("img"),i=0;i<imgEl.length;i++)imgEl[i].getAttribute("src")&&(imgEl[i].setAttribute("data-src",imgEl[i].getAttribute("src")),imgEl[i].className+=" lazyload",imgEl[i].setAttribute("src","data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="));
            $(document).ready(function() {
                $('iframe[src*="youtube.com"]').wrap('<div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;margin:0 auto;width:100%"></div>').css({
                    "position": "absolute",
                    "top": "0",
                    "left": "0",
                    "width": "100%",
                    "height": "100%",
                    "border": "0"
                }).addClass("lazyload").each(function() {
                    $(this).attr("data-src", $(this).attr("src"));
                    $(this).removeAttr("src", "")
                });
            });
        //]]>
        </script>
        
    </body>
</html>
