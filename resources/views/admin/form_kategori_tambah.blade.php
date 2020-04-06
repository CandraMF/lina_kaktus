@extends('adminlte::page')

@section('title', 'Tambah Barang')

@section('content_header')
    <h1>Tambah Kategori</h1>        
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

                <form action="/admin/kategori/tambah_proses" method="post">
                
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" placeholder="nama kategori" name="nama" class="form-control">
                    </div>                    

                    <div class="form-group">
                        <input type="submit" value="submit" class="form-control btn btn-primary btn-sm col-md-3 ">
                    </div>
                </form>                            
            </div>              
        </div>
    </div>
    

@stop
    
@section('css')
          
@stop

@section('js')    
  
@stop