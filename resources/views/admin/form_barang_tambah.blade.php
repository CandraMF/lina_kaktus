@extends('adminlte::page')

@section('title', 'Tambah Barang')

@section('content_header')
    <h1>Tambah Barang</h1>        
@stop

@section('content')
    
    <div class="col-md-12 card">
        <div class="p-4 row">        
            <div class="col-md-6 card-body ">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}} <br>
                        @endforeach
                    </div>
                @endif                

                <form action="/admin/barang/tambah_proses" method="post" enctype="multipart/form-data">
                
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" placeholder="nama  produk" name="nama" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <label for="berat">Berat(gr)</label>
                        <input type="text" placeholder="berat" name="berat" class="form-control">
                    </div>                                               
                    <div class="form-group">
                        <label for="file">Gambar</label>
                        <input type="file" name="file" id="file" capture class="form-control-file">
                    </div>                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" placeholder="deskripsi" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="form-group" data-select2-id="13">
                        <label for="kategori">Kategori</label><br>
                        <select class="js-example-basic-multiple form-control col-md-12" name="kategori[]" multiple="multiple">
                            @foreach($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>                                                         
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="form-control btn btn-primary btn-sm col-md-3 ">
                    </div>
                </form>                            
            </div>  
            <div class="col-6 justify-content-center p-4">
                <div class="row">
                    <div class="col-md-12">                                               
                        <img src="" alt="" id="before" class="img-fluid">
                    </div>                           
                </div>     
            </div>     
        </div>
    </div>
    

@stop
    
@section('css')
          
@stop

@section('js')    
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            document.getElementById('file').onchange = function () {
                document.getElementById('before').src = window.URL.createObjectURL(this.files[0]);                          
            };
        })
        
    </script>
@stop