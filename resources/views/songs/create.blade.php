@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Song</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('songs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('songs.store') }}" method="POST">
    	@csrf

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		        <div class="form-group">
		            <strong>Artist:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Artist">
		    </div>
		        <div class="form-group">
		            <strong>Album:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Album">
		        </div>
		        <div class="form-group">
		            <strong>Genre:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Genre">
		        </div>
		        <div class="form-group">
		            <strong>Language:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Language">
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>

    </form>

@endsection