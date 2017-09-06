<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('#search').keypress(function(e) {
    if(e.which == 13) {
		
		alert("SANJAY");
        $.ajax({
            url: '{{ url('itemCRUD/search/data?id=') }}' + $('#search').val(),
			dataType: 'json',
            success: function (data) {
                if(data == 'success'){
                   alert('Employee found!');
                }else{
                    alert('Employee not found!');
                }
            },
            error: function (data) {
            }
        });
    }
});
</script>
@extends('layout.layout')
 
@section('contents')
{{ Auth::user()->firstname }}



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dispatch Details</h2>
            </div>
            
        </div>
    </div>
	


	
<div class="row">
        <div class="col-lg-12 margin-tb">
          
           <div class="pull-right">
                <a class="btn btn-success" href="{{ route('itemCRUD.index')  }}"> Create New Item</a>
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-lg-12 margin-tb">
          
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('driverCRUD.index') }}"> Create/Add : Driver Roster</a>
            </div>
        </div>
    </div>

	{!! $items->render() !!}
	
	<p>This is a paragraph.</p>
	
	{{ Auth::user()->firstname }}
	{{ Auth::user()->id }} 

	{{ Auth::user()->email }}
	@if( Auth::user()->role == 3)
		ADMIN ROLE
	@endif

	
	<input type="text" id="search" placeholder="search employee...">
	
	
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Company</th>
            <th>Contact</th>
			<th>PO</th>
			<th>PO Date</th>
			<th>Origin</th>
			<th>Destination</th>
			<th>Revenue</th>
			<th>Miles</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
	
    <tr>
		<td>{{  ++$i  }}</td>
        <td>{{ $item->Company }}</td>
		<td>{{ $item->Contact }}</td>
        <td>{{ $item->PO }}</td>
		<td>{{ $item->Pdate }}</td>
		<td>{{ $item->Origin }}</td>
		<td>{{ $item->Destination }}</td>
		
		<td>${{ $item->Revenue }}</td>
		<td>{{ $item->Miles }}</td>
		
        <td>
            <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->Driver_ID) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->Driver_ID) }}">Edit</a>
           
        </td>
    </tr>
    @endforeach
    </table>
	{!! $items->render() !!}
    
@endsection