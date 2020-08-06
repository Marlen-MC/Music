@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Genres</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('genres.create') }}"> Create New Genre</a>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($genres as $genre)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $genre->name }}</td>
	        <td>
                <form action="{{ route('genres.destroy',$genre->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('genres.show',$genre->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('genres.edit',$genre->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

@endsection