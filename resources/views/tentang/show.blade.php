@extends('layouts.app')


@section('title' ,'tentang')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Tentang</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('tentang.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $tentang->deskripsi }}
            </div>
        </div>
    </div>
@endsection