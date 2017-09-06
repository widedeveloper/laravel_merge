@extends('layout.layout')

@section('contents')
<script>
* {
   font-size: 16px;
   line-height: 2;
}
</script>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create/Add Driver Details:</h2>
            </div>
           
        </div>
    </div>

    <div class="pull-right">
                <a class="btn btn-primary" href="{{route('itemCRUD.index')}}"> Back</a>
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

   
 <form action="{{url('/mailsend')}}" method="post" class="wpcf7-form" >
     
		
	 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Enter Driver Details:</strong>
			</div>
     </div>
	
	
	     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Driver/Company Name:</strong>
                {!! Form::text('Driver', null, array('placeholder' => 'Driver/Company Name','class' => 'form-control')) !!}
            </div>
        </div>
    
	 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('Email', null, array('placeholder' => 'abcd@domain.com','class' => 'form-control')) !!}
            </div>
        </div>
	
	 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('Driver_name', null, array('placeholder' => 'First Name- Last Name','class' => 'form-control')) !!}
            </div>
        </div>
	
	
	<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact No.:</strong>
                {!! Form::text('Contact', null, array('placeholder' => '000-000-0000','class' => 'form-control')) !!}
            </div>
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MC Number:</strong>
                {!! Form::text('MC_Number', null, array('placeholder' => '','class' => 'form-control')) !!}
            </div>
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipment:</strong>
                {!! Form::text('Equipment', null, array('placeholder' => 'Equipment','class' => 'form-control')) !!}
            </div>
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Max_Weight:</strong>
                {!! Form::text('Max_Weight', null, array('placeholder' => 'Max_Weight','class' => 'form-control')) !!}
            </div>
        </div>

			
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RPM:</strong>
                {!! Form::text('Starting_RPM', null, array('placeholder' => 'RPM','class' => 'form-control')) !!}
            </div>
        </div>
		
		
		 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Regions Covered:</strong>
                {!! Form::textarea('Regions_Covered', null, array('placeholder' => 'Regions','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comment(Addition Info):</strong>
                {!! Form::textarea('Comment', null, array('placeholder' => 'Comment(Addition Info)','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
  </form>


	
@endsection