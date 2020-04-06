<html>
<head>
    <title>Barang</title>
</head>
<body>
    <div class="row">
        <div class="container">
           <div class="col-lg-8 mx-auto my-5">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}} <br>
                        @endforeach
                    </div>
                @endif                

                <form action="/barang/tambah" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" placeholder="nama_produk" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="kategori">id_kategori</label>
                        <input type="text" placeholder="id_kategori" name="id_kategori">
                    </div>
                    <div class="form-group">
                        <label for="harga">berat</label>
                        <input type="text" placeholder="harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">deskripsi</label>
                        <input type="text" placeholder="deskripsi" name="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="rating">rating</label>
                        <input type="text" placeholder="rating" name="rating">
                    </div>
                    <div class="form-group">
                        <label for="komentar">komentar</label>
                        <input type="text" placeholder="komentar" name="komentar">
                    </div>
                    <div class="form-group">
                        <label for="stok">stok</label>
                        <input type="text" placeholder="stok" name="stok">
                    </div>
                    
                    <div class="form-group">
                        <b>File Gambar</b>
                        <input type="file" name="file">
                    </div>
                    

                    <div class="form-group">
                        <input type="submit" value="submit">
                    </div>
                </form>    

                @foreach($barang as $b)
                    <img src="{{ url('/data_file/'.$b->gambar) }}">
                    <br>
                @endforeach

                <form action="/barang/pesan" method="get">
                    <div class="form-group">
                        <input type="submit" value="submit">
                    </div>
                </form>            
           </div>
        </div>
    </div>
</body>
</html>