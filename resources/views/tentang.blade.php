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
        <nav class="navbar navbar-fixed-top navbar-expand-lg  navbar-toggleable-sm navbar-inverse bg-white flex-column">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <i class="far fa-humberger"></i>
            </button>
            <a href="/" class="navbar-brand navbar-toggler-left text-reset">Kaktus Lina</a>
            <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item active ml-2 mr-2">
                        <a class="nav-link text-reset " href="/">Beranda <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link text-reset" href="/katalog">Katalog</a>
                    </li>
                    
                    <li class="nav-item ml-2 mr-2">
                        <a class="nav-link text-reset" href="/cara_pesan">Cara Memesan</a>
                    </li>
                    <li class="nav-item ml-2 mr-2 nav-active">
                        <a class="nav-link text-reset nav-active" href="/tentang">Tentang</a>
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
        <div class=" bg-light pt-5 p-5">
            <div class="container">
                <div class="judul-dev">
                    <h2>Tentang Developer WEB</h2>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3 ml-4 mr-5 p-0  mt-4">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 col-4 m-0 p-0 ">
                                <img src="images/profil/akb.jpg" alt="" srcset="" class="img-fluid shadow rounded-circle">
                            </div>
                            <div class="col-md-12 col-8 text-center p-2 pt-4">
                                <h5>M Akbar Satria W</h5>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                        <div class="col-md-12 pt-4 m-0 p-0">
                            <p><span class="fa fa-envelope"></span> akbar@gmail.com</p>
                            <p><span class="fab fa-whatsapp"></span> 085213123232</p>
                            <p><span class="fab fa-github"></span> akbarssatria</p>
                        </div>
                    </div>
                    <div class="col-md-3 ml-4 mr-5 p-0 mt-4">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 col-4 m-0 p-0 ">
                                <img src="images/profil/alp.jpg" alt="" srcset="" class="img-fluid shadow rounded-circle">
                            </div>
                            <div class="col-md-12 col-8 text-center p-2 pt-4">
                                <h5>Thariq Alfath Y</h5>
                                <p>Front-End Developer</p>
                            </div>
                        </div>
                        <div class="col-md-12 p-0 pt-4 m-0">
                            <p><span class="fa fa-envelope"></span> alfat@gmail.com</p>
                            <p><span class="fab fa-whatsapp"></span> 085213123232</p>
                            <p><span class="fab fa-github"></span> thariq.alfath</p>
                        </div>
                    </div>
                    <div class="col-md-3 ml-4 mr-5 p-0 mt-4">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 col-4 m-0 p-0 ">
                                <img src="images/profil/can.jpeg" alt="" srcset="" class="img-fluid shadow rounded-circle">
                            </div>
                            <div class="col-md-12 col-8 text-center p-2 pt-4">
                                <h5>Candra Miftah F</h5>
                                <p>Back-end Developer</p>
                            </div>
                        </div>
                        <div class="col-md-12 p-0 pt-4 m-0 ">
                            <p ><span class="fa fa-envelope"></span> candragain99@gmail.com</p>
                            <p><span class="fab fa-whatsapp"></span> 085721372243</p>
                            <p><span class="fab fa-github"></span> candramiftah</p>
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
                                <a class="badge badge-success mt-3 p-2" href="cara_pesan" sytle="cursor-pointer"><span class="fas fa-shopping-bag "></span> &nbsp; Lihat Cara Memesan</a>
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
                        <a class="item-nav  ml-2 mr-2 col-md-1 m-0 p-0 " href="/">
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
                        <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0 active-nav" href="/tentang">
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
                
                $('#myModal').modal('toggle');

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
