@extends('layout.layout')
@section('contents')

 <br>
 Input the Date Range

  <form class="form-horizontal" method="post" action="/pdf">
                   <div class="row">
 <div  style="background: #fff; cursor: pointer; padding: 5px 30px; border: 1px solid #ccc; width: 29%" >
  
{!! Form::text('sdate', null, array('type' => 'text', 'class' => 'form-control datepicker','placeholder' => 'Select the Start Date', 'id' => 'reportrange')) !!}


</div> 

 <div  style="background: #fff; cursor: pointer; padding: 5px 30px; border: 1px solid #ccc; width: 29%" >
 
{!! Form::text('edate', null, array('type' => 'text', 'class' => 'form-control datepicker','placeholder' => 'Select the End Date', 'id' => 'reportrange')) !!}


</div> 
                    <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Generate Report
                                </button>

                            </div>
                        </div>
</div>
</form>

©All Rights Reserverd with Merge Tranist
<hr>
Call Us: (866) 272-8001   Email :Info@MergeTransit.com

@endsection