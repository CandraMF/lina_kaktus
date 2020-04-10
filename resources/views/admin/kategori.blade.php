@extends('adminlte::page')

@section('title', 'Data Barang')

@section('content_header')
    <h1>Data Barang</h1>
@stop

@section('content')        
    
    <div class="col-md-12 p-3">
        <div class="row justify-content-start">  
            <a href="/admin/kategori/tambah" class="btn btn-xs btn-primary shadow " title="tambah barang">                
                <i class="fas fa-fw fa-plus "></i> <b>Tambah Kategori</b>                           
            </a>                               
        </div>
    </div>    
    <div class="col-md-12">
        <table class="table table-sm table-bordered table-striped table-hover table-light table-responsive text-nowrap ">
            <thead class="bg-green">
                <tr class="text-center">
                    <th width="1%">Id</th>
                    <th >Nama Kategori</th>                    
                    <th >Action</th>                    
                </tr>
            </thead>
            
            <tbody>        
                @foreach($kategori as $k)                    
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>                                              
                        <td class="text-center">
                            <a href="/admin/kategori/edit/{{ $k->id }}" class="btn btn-success btn-sm">Edit</a> &nbsp;
                            <a href="/admin/kategori/hapus/{{ $k->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>  
                                
                @endforeach            
            </tbody>
        </table>     
    </div>
    </div>      
@stop

@section('css')

@stop

@section('js')

@stop