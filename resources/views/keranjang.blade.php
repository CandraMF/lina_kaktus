
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <i class="far fa-humberger"></i>
        </button>
        <a href="/" class="navbar-brand navbar-toggler-left text-reset">Kaktus Lina</a>
        <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
            <ul class="navbar-nav ">
                <li class="nav-item active ml-2 mr-2">
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
                        <a class="nav-link text-reset nav-active" href="/keranjang"><i class="fa fa-shopping-cart"></i></a>
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

    <div class="container bg-white p-5 mt-5 ct1 " style="box-shadow: 35px 35px 50px rgba(0, 0, 0, 0.13);">   
        <div class="col-md-12 p-4 ">                                                        
            <h4>Hello {{\Session::get('nama')}}, Selamat Berbelanja!</h4>
            Bingung cara memesan? <a href="/cara_pesan">Lihat Cara Memesan</a>
            @if($barang->count() > 0)
                <table class="table text-center table-hover mt-3 table-responsive">                    
                    <tr>
                        <thead class="">
                            <th style="width: 100px;">Gambar</th>
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
                        <td class="berat">{{$b->berat*$qty[$b->id]['quantity'] }}</td>
                        <td>
                                <div class="def-number-input number-input safari_only d-flex">            
                                    <button  class="minus btn btn-sm rounded-circle bg-light down">
                                        <i class="fa fa-minus"></i>
                                    </button>                                
                                        <input class="quantity border-0 text-center" min="1" name="quantity" id="quantity" value="{{ $qty[$b->id]['quantity'] }}" type="number" width="50" style="width: 3em; background: transparent;" onchange="console.log(this.value)"> <!-- update_value({{ $b->id }}, this.value); -->
                                        <input type="hidden" name="id" value="{{$b->id}}">
                                    <button class="plus btn btn-sm rounded-circle bg-light up" >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </td>
                        <td><div class="btn rounded-circel"><i class="fas fa-trash align-self-center trash" onclick="hapus({{ $b->id }});"></i></td></div>
                    </tr>               
                    @endforeach
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th id="result_berat"></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
                <div class="col-md-12">
                    <div class="row d-flex justify-content-end">
                        <a href="/keranjang/pesan" class="btn btn-warning shadow"><span class="fas fa-paper-plane"></span> Kirim Pesanan</a>
                    </div>
                </div>  
            @else
                <div class="col-md-12 p-5 text-center">
                    <h3>Keranjang Masih Kosong</h3>
                </div>
                <div class="col-md-12">
                    <div class="row d-flex justify-content-end">
                        <a href="/katalog" class="btn btn-success shadow"><span class="fas fa-paper-plane"></span> Lihat Katalog</a>
                    </div>
                </div>  
            @endif
            
        </div>      
        
    </div>

    <div class="wa-btn position-fixed m-4 " style="z-index: 999; right:0; bottom:0%; height:60px; width:60px;">                                    
        <a href="#" class="text-reset">
            <div class="whatsapp rounded-circle bg-success p-3 text-center shadow-lg" >
                <i class="fab fa-whatsapp text-white" style="font-size: 20pt;"></i>    
            </div>      
        </a>              
    </div>
    <div class="  pb-5 pt-5 bg-">
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
                        <a target="blank"  href="https://www.instagram.com/kaktuslina_lembang" class="btn btn-success rounded-pill mt-4"><span class="fab fa-instagram"></span> Lihat di Instagram</a>
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
    <div class="nav-mobile col-md-12 m-0 p-0 position-fixed">
        <div class="d-flex justify-content-between text-center p-2 pt-3">
            <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0 " href="/">
                <i class="fa fa-home m-0" style="font-size: 16pt"></i>
                <div>Beranda</div>
            </a>
            <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0 " href="/katalog">
                <i class="fa fa-book-open" style="font-size: 16pt"></i>
                <div>Katalog</div>                            
            </a>            
            <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0 active-nav" href="/keranjang">
                <i class="fa fa-shopping-cart" style="font-size: 16pt"></i>
                <div>Keranjang</div>
            </a>
            <a class="item-nav ml-2 mr-2 col-md-1 m-0 p-0" href="/tentang">
                <i class="fa fa-info-circle" style="font-size: 16pt"></i>
                <div>Tentang</div>                            
            </a>
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
    
    <script src="/js/jquery.js"></script>
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

        

        function update_value(id, jumlah){   
            location.href='/keranjang/update/'+id+'/'+jumlah;
        } 
        function update_value_min(id, jumlah){   
            location.href='/keranjang/update_min/'+id+'/'+jumlah;
        }  
        function hapus(id){
            location.href='/keranjang/hapus/'+id;
        }

        var sum = 0;

        $(".down").each(function(){
            $(this).on('click', function(){
                this.parentNode.querySelector('input[type=number]').stepDown();
                
                var jumlah = this.parentNode.querySelector('input[type=number]').value;                                               
                var id = this.parentNode.querySelector('input[type=hidden]').value;

                update_value_min(id, jumlah);               
            });
        });

        $(".up").each(function() {
            $(this).on('click', function(){
                this.parentNode.querySelector('input[type=number]').stepUp();

                var jumlah = this.parentNode.querySelector('input[type=number]').value;                                               
                var id = this.parentNode.querySelector('input[type=hidden]').value;

                update_value(id, jumlah);
            });
        });
        
        $(".berat").each(function() {
        
            var value = $(this).text();
            
            if(!isNaN(value) && value.length != 0) {
                sum += parseFloat(value);
            }
        });
        
        $('#result_berat').text(sum);
        
    </script>
    
</body>
</html>