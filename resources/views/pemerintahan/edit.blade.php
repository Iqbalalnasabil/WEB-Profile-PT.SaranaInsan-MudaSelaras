@extends('layouts.app')

@section('title')


@section('content')
    <div class="container">
        <a href="/pemerintahan" class="btn btn-primary mb-3" >Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('pemerintahan.update',$pemerintahan->id )}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                    @csrf
                <div class="form-group">
                 <img src="/image/{{$pemerintahan->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
            @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                </form>

            </div>

        </div>
    </div>
@endsection
@endsection