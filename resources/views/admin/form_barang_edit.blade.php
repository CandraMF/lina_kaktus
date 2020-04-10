@extends('adminlte::page')

@section('title', 'Tambah Barang')

@section('content_header')
    <h1>Tambah Barang</h1>
@stop

@section('content')
    
    <div class=" card row">        
        <div class=" card-body row">
            <div class="col-md-6">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}} <br>
                        @endforeach
                    </div>
                @endif                

                <form action="/admin/barang/edit_proses" method="post" enctype="multipart/form-data">
                
                    {{ csrf_field() }}
                    
                    <input type="hidden" name="id" value="{{ $barang->id }}">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" placeholder="nama produk" name="nama" class="form-control" value="{{ $barang->nama }}">
                    </div>                
                    <div class="form-group">
                        <label for="berat">Berat(gr)</label>
                        <input type="text" placeholder="berat" name="berat" class="form-control" value="{{ $barang->berat }}">
                    </div>                                               
                    <div class="form-group">
                        <label for="file">Gambar</label>
                        <input type="file" name="file" id="file" capture class="form-control-file">
                    </div> 
                    <input type="text" name="file2" value="{{ $barang->gambar }}">               
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" placeholder="deskripsi" name="deskripsi" class="form-control">{{ $barang->deskripsi }}</textarea>
                    </div>   
                    <div class="form-group" data-select2-id="13">
                        <label for="kategori">Kategori</label><br>
                        <select class="js-example-basic-multiple form-control col-md-8 " name="kategori[]" multiple="multiple">
                            @foreach($kategori as $k)                                                          
                                @if(in_array($k->id, array_column($barangKategori, 'kategori_id')))
                                    <option value="{{ $k->id }}" selected="selected">{{ $k->nama }}</option>                                                                                                    
                                @else
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>                                                                                                    
                                @endif                                                                                                      
                            @endforeach 
                        </select>
                    </div>        
                    
                    <div class="form-group">
                        <input type="submit" value="submit" class="form-control btn btn-primary btn-sm col-md-3 ">
                    </div>                
                                            
                </form>   
            </div> 
            <div class="col-md-6">                
                <img src="/data_file/{{ $barang->gambar }}" alt="" srcset="" id="before" class="img-fluid ">                
            </div>
        </div>   
                  
        
    </div>
        
@stop
    
@section('css')
    
@stop

@section('js')
    <script>
        $(document).ready(function() {
            
            document.getElementById('file').onchange = function () {
                document.getElementById('before').src = window.URL.createObjectURL(this.files[0]);                          
            };

            $('.js-example-basic-multiple').select2();
        })                
    </script>
@stop