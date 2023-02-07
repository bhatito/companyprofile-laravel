@extends('layouts.app')


@section('title' ,'tentang')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <a class="btn btn-primary" href="{{ route('tentang.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>COK! </strong>KON NOLES OPO COK<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('tentang.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>
@endsection