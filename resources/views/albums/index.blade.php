@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Albums</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('albums.create') }}"> Create New Album</a>
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
            <th>Year Release</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($albums as $album)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $album->name }}</td>
            <td>{{ $album->year }}</td>
	        <td>
                <form action="{{ route('albums.destroy',$album->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('albums.show',$album->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('albums.edit',$album->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

@endsection