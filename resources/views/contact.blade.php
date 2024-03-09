@extends('layouts.app')

@section('title')


@section('content')
<h1>Data Contact</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{$message}}</p>
                </div>       
            @endif
                <form action="/contact{{$contact->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                    @csrf

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$contact->alamat}}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
            

                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="nophone" placeholder="Phone" value="{{$contact->nophone}}">
                </div>
                @error('nophone')
                <small style="color:red">{{$message}}</small>
                 @enderror



                 <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$contact->email}}">
                </div>
                @error('email')
                <small style="color:red">{{$message}}</small>
                 @enderror

                 <div class="form-group">
                    <label for="">Hari Kerja</label>
                    <input type="text" class="form-control" name="working" placeholder="Working" value="{{$contact->working}}">
                </div>
                @error('working')
                <small style="color:red">{{$message}}</small>
                 @enderror

                 <div class="form-group">
                    <label for="">Jam Kerja</label>
                    <input type="text" class="form-control" name="hours" placeholder="Hours" value="{{$contact->hours}}">
                </div>
                @error('hours')
                <small style="color:red">{{$message}}</small>
                 @enderror
            

                 <div class="form-group">
                    <label for="">Maps</label>
                    <textarea name="maps" id="" cols="30" rows="10" class="form-control" placeholder="Maps">{{$contact->maps}}</textarea>
                </div>
                @error('maps')
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