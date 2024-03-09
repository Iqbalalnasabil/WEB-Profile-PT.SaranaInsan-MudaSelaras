@extends('layouts.app')

@section('title')


@section('content')
<h1>Data Segmen Intenet Service Provider</h1>
<div class="container">
    <a href="/isp/create" class="btn btn-primary mb-3" >Tambah Data</a>
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
        </div>       
    @endif
    
    
    <div class="table-responsive">
        <table div class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1   
                    @endphp
                    @foreach ($isps as $isp)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <img src="/image/{{$isp->image}}" alt="" class="img-fluid" width="100">
                        </td>
                        <td>
                            <a href="{{route('isp.edit' , $isp->id)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('isp.destroy', $isp->id)}}" method="POST">
                                @csrf
                                @method('DELETE')    
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table> 
    </div>
</div>
@endsection
@endsection