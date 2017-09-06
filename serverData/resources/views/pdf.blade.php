@extends('layout.layout')
@section('contents')
@Merge Transit ©
All Rights Reserverd with Merge Tranist
<br>
Call Us: (866) 272-8001   Email :Info@MergeTransit.com
 
<div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"> 
                                    Download Report
                                </button>

                            </div>
                        </div>
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Company</th>
            <th>Contact</th>
            <th>PO</th>
            <th>PO Date</th>
			<th>Del. Date</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Revenue</th>
            <th>Miles</th>
           
        </tr>
      <h1 class="hidden">  {{$sum = 0}}
        {{$summiles =0}}

        </h1>
    @foreach ($items as $key => $item)
    
    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $item->Company }}</td>
        <td>{{ $item->Contact }}</td>
        <td>{{ $item->PO }}</td>
		<td>{{ $item->Pdate }}</td>
		<td>{{ $item->Deldate }}</td>
        <td>{{ $item->Origin }}</td>
        <td>{{ $item->Destination }}</td>
        <h1 class ='hidden'>  {{   $sum+= (int)$item->Revenue }} 
        {{   $summiles+= (int)$item->Miles }} 
        </h1>
        <td>${{ $item->Revenue }}</td>
        <td>{{ $item->Miles }}</td>
            
         </tr>
    @endforeach

    <tr >
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
		<th>-<th>
        <th>-</th>
        <th>${{$sum}}</th>
        <th>Miles : {{ $summiles }}</th>
        <th>-</th>       
         </tr>
    </table>

  Totol {{count($items)}} record found {{$date = date('Y-m-d H:i:s')}}
  

{{$sum}}
©All Rights Reserverd with Merge Tranist
<hr>
Call Us: (866) 272-8001   Email :Info@MergeTransit.com



@endsection