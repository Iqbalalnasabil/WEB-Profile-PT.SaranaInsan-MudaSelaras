@extends('layouts.app')

@section('title')


@section('content')
<h1>Data Segmen Finance</h1>
<div class="container">
    <a href="/finance/create" class="btn btn-primary mb-3" >Tambah Data</a>
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
                    @foreach ($finances as $finance)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            <img src="/image/{{$finance->image}}" alt="" class="img-fluid" width="100">
                        </td>
                        <td>
                            <a href="{{route('finance.edit' , $finance->id)}}" class="btn btn-warning">Edit</a>

                            <form action="{{route('finance.destroy', $finance->id)}}" method="POST">
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