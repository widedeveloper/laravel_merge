<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

th{background-color:yellow}
tr:nth-child(even){background-color: #f2f2f2}

h1.hidden {
    display: none;
}
</style>
</head>
<body>
@Merge Transit ©
All Rights Reserverd with Merge Tranist
<br>
Call Us: (866) 272-8001   Email :Info@MergeTransit.com
 

<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Driver_Id</th>
            <th>Company</th>
            <th>Contact</th>
            <th>PO</th>
            <th>PO Date</th>
	    <th>Del. Date</th>
            <th>Origin</th>
            <th>Destination</th>
           <th>Weight</th>
            <th>Revenue</th>
            
             
            <th>Miles</th>
            <th>DHO</th>
<th>RPM</th>
            <th>DHO_RPM</th>
           
        </tr>
      <h1 class="hidden">
  {{$sum = 0}}
  {{$summiles =0}}

{{$sumrpm =0}}
{{$sumDHO=0}}
{{$sumDHRPM =0}}        </h1>
    @foreach ($items as $key => $item)
    
    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $item->Driver_ID}}</td>
        <td>{{ $item->Company }}</td>
        <td>{{ $item->Contact }}</td>
        <td>{{ $item->PO }}</td>
        <td>{{ $item->Pdate }}</td>
	<td>{{ $item->Deldate }}</td>
        <td>{{ $item->Origin }}</td>
        <td>{{ $item->Destination }}</td>
        <td>{{ $item->Weight}}</td>
        <td>${{ $item->Revenue }}</td>
        
        <td>{{ $item->Miles }}</td>
        <td>{{ $item->DHO}}</td>
<td>{{ $item->RPM}}</td>
        <td>{{ $item->DH_RPM}}</td>
        
     <h1 class ='hidden'>  {{   $sum+= (int)$item->Revenue }} 
        {{   $summiles+= (int)$item->Miles }} 

{{   $sumrpm+= $item->RPM}} 
{{   $sumDHO+= $item->DHO}} 
{{   $sumDHRPM += $item->DH_RPM }} 
        </h1>
         </tr>
    @endforeach

    <tr >
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>-</th>
	<th>-<th>
        
<th>-</th>

        <th>${{number_format($sum , 2, '.', ',')}}</th>
        
         
 
<th>Miles : {{ $summiles }}</th>
 <th>DHO: {{ $sumDHO }}</th>
<th>RPM : {{ number_format($sum /$summiles, 2, '.', ',')}}</th>
   <th>DHRPM: {{  number_format(($sum/($summiles+$sumDHO)), 2, '.', ',') }}</th>
     
    
         </tr>
    </table>

  Total {{count($items)}} record found {{$date = date('Y-m-d H:i:s')}}
  

{{$sum}}
©All Rights Reserverd with Merge Tranist
<hr>


Call Us: (866) 272-8001   Email :Info@MergeTransit.com

	

</body>

</html>