
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
    <nav class="navbar navbar-fixed-top navbar-expand-lg  navbar-toggleable-sm navbar-inverse bg-white flex-column">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <i class="fa fa-bars"></i>
        </button>
        <a href="/" class="navbar-brand navbar-toggler-left text-reset">Kaktus Lina</a>
        <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
            <ul class="navbar-nav ">
                <li class="nav-item active ">
                    <a class="nav-link text-reset" href="#">Beranda <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-reset" href="/katalog">Katalog</a>
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
                    <a class="nav-link text-reset" href="/logout">Logout</a>
                </li>
                
            </ul>
        </div>
    </nav>                

    <div class="container bg-white p-5 mt-5 ct1 " style="box-shadow: 35px 35px 50px rgba(0, 0, 0, 0.13);">   
        <div class="col-md-12 p-4 ">                                                        
            
            <table class="table text-center table-hover mt-3 table-responsive">                    
            <tr>
                <thead class="">
                    <th style="width: 10%;">Gambar</th>
                    <th class="">Nama</th>
                    <th>Berat(gr)</th>
                    <th style="width: 10%;">Jumlah</th>
                    <th></th>
                </thead>
            </tr>
            @foreach($barang as $b)
               <tr>
                   <td><img src="/data_file/{{ $b->gambar }}" alt="" class="img-fluid" width="200"></td>
                   <td class="text-left pl-5">{{ $b->nama }}</td>
                   <td>{{ $b->berat }}</td>
                   <td>
                        <div class="def-number-input number-input safari_only d-flex">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus btn btn-sm rounded-circle bg-light">
                                <i class="fa fa-minus"></i>
                            </button>
                                <input class="quantity border-0 text-center" min="1" name="quantity" value="1" type="number" width="50" style="width: 3em; background: transparent;">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus btn btn-sm rounded-circle bg-light">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </td>
                   <td><i class="fas fa-trash align-self-center"></i></td>
               </tr>
               
            @endforeach
            </table>
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