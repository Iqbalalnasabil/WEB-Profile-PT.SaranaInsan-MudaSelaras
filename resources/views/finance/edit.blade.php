@extends('layouts.app')

@section('title')


@section('content')
    <div class="container">
        <a href="/finance" class="btn btn-primary mb-3" >Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('finance.update',$finance->id )}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                    @csrf
                <div class="form-group">
                 <img src="/image/{{$finance->image}}" alt="" class="img-fluid">
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