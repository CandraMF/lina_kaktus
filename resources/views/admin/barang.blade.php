@extends('adminlte::page')

@section('title', 'Data Barang')

@section('content_header')
    <h1>Data Barang</h1>
@stop

@section('content')        
    <div class="col-md-12 p-3">
        <div class="row justify-content-start">  
            <a href="/admin/barang/tambah" class="btn btn-sm btn-primary shadow" title="tambah barang">                
                <i class="fas fa-fw fa-plus"></i> <b>Tambah Barang</b>                           
            </a>                               
        </div>
    </div>

    <div class="col-md-12">
        <table class="table table-sm table-bordered table-striped table-hover table-light table-responsive text-nowrap ">
            <thead class="bg-green">
                <tr class="text-center">
                    <th width="1%">Id</th>
                    <th >Nama</th>                    
                    <th>Berat</th>
                    <th>Deskripsi</th>                    
                    <th width="15%" >Action</th>
                </tr>
            </thead>
            
            <tbody>        
                @foreach($barang as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->nama }}</td>                        
                        <td>{{ $b->berat }}</td>
                        <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">{{ $b->deskripsi }}</td>                        
                        <td class="text-center">
                            <a href="/admin/barang/edit/{{ $b->id }}" class="btn btn-success btn-sm">Edit</a> &nbsp;
                            <a href="/admin/barang/hapus/{{ $b->id }}" class="btn btn-danger btn-sm" onClick="<?php echo 'return confirm (\'Are you sure want to delete?\')'; ?>">Hapus</a>
                        </td>
                    </tr>                    
                @endforeach            
            </tbody>
        </table>     
    </div>
    

            



@stop

@section('css')

@stop

@section('js')

@stop