@extends('layouts.app')


@section('title' ,'tentang')

@section('content')
    <div class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                {{-- <h2>Tentang</h2> --}}
            </div>
            <div class="float-end">
                <a class="btn btn-success " href="{{ route('tentang.create') }}"> Tambah</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tentangs as $tentang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tentang->deskripsion }}</td>
            {{-- <td>{{ $student->kelas }}</td> --}}
            <td>
                <form action="{{ route('tentang.destroy',$tentang->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tentang.show',$tentang->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('tentang.edit',$tentang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $tentangs->links() !!}
    </div>
      
@endsection
