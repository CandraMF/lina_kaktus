@extends('adminlte::page')

@section('title', 'Data Transaksi')

@section('content_header')
    <h1>Transaksi</h1>
@stop

@section('content')            

    <div class="col-md-12">
        <table class="table table-sm table-bordered table-striped table-hover table-light table-responsive text-nowrap ">
            <thead class="bg-green">
                <tr class="text-center">
                    <th width="1%">Id</th>
                    <th>Pelanggan</th>                    
                    <th>Barang</th>
                    <th>Jumlah</th>                    
                    <th>Tanggal Beli</th>
                </tr>
            </thead>
            
            <tbody>        
                @foreach($transaksi as $t)
                    <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->id_pelangan }}</td>                        
                        <td>{{ $t->id_barang }}</td>
                        <td>{{ $t->jumlah_beli }}</td>                        
                        <td>{{ $t->created_at }}</td>                        
                        
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