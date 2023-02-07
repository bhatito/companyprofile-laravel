@extends('layouts.app')


@section('title' ,'contact')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show contact</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $contact->deskripsi }}
            </div>
        </div>
    </div>
@endsection