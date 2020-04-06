
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katalog</title>   
    <link rel="stylesheet" href="/css/bootstrap.css"> 
    <link rel="stylesheet" href="/css/font-awesome.css"> 
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/media.js"></script>
</head>
<body class="bg-light">
    
    @php 
        {{ isset($message)? $message : ""; }}
    @endphp

    <nav class="navbar navbar-fixed-top navbar-expand-lg  navbar-toggleable-sm navbar-inverse bg-white flex-column">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <i class="far fa-humberger"></i>
        </button>
        <a href="/" class="navbar-brand navbar-toggler-left text-reset">Kaktus Lina</a>
        <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
            <ul class="navbar-nav ">
                <li class="nav-item active ">
                    <a class="nav-link text-reset" href="/">Beranda <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="katalog">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="#">Tentang</a>
                </li>
                <li class="nav-item">                    
                    <div class="dropdown">
                        <a class="nav-link text-reset" href="/keranjang"><i class="fa fa-shopping-cart"></i></a>
                        <div class="dropdown-content bg-white p-3">                              
                            @if(\Session::has('login'))  
                                @php
                                    $userId = Session::get('id');
                                @endphp         
                                berat total : 
                                <br>
                                @foreach(\Cart::session($userId)->getContent() as $c)
                                    {{ $c->name }}    
                                    <br>                                
                                @endforeach                                                    
                            @else
                                <h6 class="text-center">Keranjang masih kosong</h6>
                            @endif
                        </div>
                    </div>                                            
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="keranjang/logout">Logout</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div class="container bg-white p-5 mt-5 ct1" style="box-shadow: 35px 35px 50px rgba(0, 0, 0, 0.13);">   
        <div class="col-md-12">
            <div class="row search">
                <h4 class="col-10 col-md-2">Katalog</h4>
                <div class="col-2 position-absolute keranjang"><i class="fa fa-shopping-cart"></i></div>
                <input type="search" class="form-control form-rounded col-md-3 ml-3" style="border-radius: 50px;" placeholder="cari kaktus">
            </div>        

            <div class="col-md-12">
                <div class="row mt-5 etalase">                    
                    <div class="d-flex justify-content-center  ">
                        <div class="row d-flex justify-content-center">                        

                            @foreach($barang as $b)                                                                                                                                                                                                                                   
                                                                                                
                                @foreach($b->kategori as $k)       
                                    
                                @endforeach 

                                <a href="#" 
                                    class="text-reset text-decoration-none mycard"                                     
                                    data-toggle="modal" 
                                    data-target="#myModal" 
                                    src="/data_file/{{ $b->gambar }}"
                                    id="{{ $b->id }}"
                                    nama="{{ $b->nama }}"
                                    desk="{{ $b->deskripsi }}"
                                    berat="{{ $b->berat }}">   
                                       
                                    <div class="col-4 p-0 overflow-hidden rounded m-2 col-md-2 text-center border" style="height: 100px;" id="card">
                                        <div class="myImage overflow-hidden bg-dark" style="width: 100%; height: 190px;">
                                            <i class="fa fa-search position-absolute text-white detail-btn"></i>                                            
                                            <img src="/data_file/{{ $b->gambar }}" alt="" class="img-fluid">                                            
                                        </div>
                                        <div class="desk pl-3 pr-3 pt-2 pb-3" style="height: 90px; font-size: 11pt;">
                                            <div class="nama">{{ $b->nama }}</div>                                                    
                                        </div>
                                        <div class="" style="height: 100%; width: 100%;"> 
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
                    </div>
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
                                <div class="detail col-md-12">

                                </div>

                                @if(!\Session::get('login'))
                                    <a data-toggle="modal" data-target="#inputModal" id="" href="" class="btn rounded ml-3 mr-3 position-absolute mb-2 toKeranjang toModal" >Beli</a>
                                @else
                                    <a href="" class="btn enter rounded ml-3 mr-3 position-absolute mb-2 toKeranjang" >Beli</a>
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

    </div>

    <div class="wa-btn position-fixed m-4 " style="z-index: 999; right:0; bottom:0%; height:60px; width:60px;">                                    
        <a href="#" class="text-reset">
            <div class="whatsapp rounded-circle bg-success p-3 text-center shadow-lg" >
                <i class="fab fa-whatsapp text-white" style="font-size: 20pt;"></i>    
            </div>      
        </a>              
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
    
    <script src="/js/bootstrap.js"></script>
    <script src="/js/font-awesome.js"></script>    

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

            var id = $(e.relatedTarget).attr('id');  
            
            $(".idbarang").attr("value", id);
        });
                
    </script>
    
</body>
</html>