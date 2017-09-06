@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


	
    {!! Form::open(array('route' => 'itemCRUD.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>
		
	<div class="col-xs-12 col-sm-12 col-md-12">	
	Total No. of drivers available {{count($var_drivername)}}
	
	</div>

	 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Driver:</strong>
					 <select name="parentProj">
					 <option value="">Select Driver</option>
						@foreach($var_drivername as $driver)
							<option value="{{ $driver->Driver }}">{{ $driver->Driver}}</option>
							<strong>{{ $driver->Driver_ID}}</strong>
						@endforeach
					</select>
				</div>
     </div>
	
	
	    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <strong>{{$driver->Email }}
            </div>
    
	
	
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection