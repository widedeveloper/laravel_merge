@extends("layout.adminLayout")
@section("contents")

<script>
   $(function(){
        $(".back_button").click(function(){
            location.href = "{{URL::to('admin/details')}}"
        });

        $("#put_date").datepicker({ format: 'yyyy-mm-dd' });
        $("#del_date").datepicker({ format: 'yyyy-mm-dd' });


        $( "input[name=revenue]" ).keyup(function() {
            calculator();
        });
        $( "input[name=mile]" ).keyup(function() {
            calculator();
        });
        $( "input[name=dho]" ).keyup(function() {
            calculator();
        });
    });

    function calculator(){
        console.log($( "input[name=revenue]" ).val());
        if( $( "input[name=dho]" ).val()==0){
            $( "input[name=dh_rpm]" ).val(0);
            $( "input[name=rpm]" ).val(0);
        }else{
            var rpm = parseFloat($( "input[name=revenue]" ).val())/parseFloat($( "input[name=mile]" ).val());
            var new_rpm = rpm.toFixed(2);
            $( "input[name=rpm]" ).val(new_rpm);

            var dh_rpm = parseFloat($( "input[name=revenue]" ).val())/(parseFloat($( "input[name=mile]" ).val())+parseFloat($( "input[name=dho]" ).val()));
            var new_dh_rpm = dh_rpm.toFixed(2);
            $( "input[name=dh_rpm]" ).val(new_dh_rpm);
            
        }
    }
</script>

<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Edit Dispatch Details
        </h1>
       
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box box-info">
                    <!-- form start -->

                    <form class="form-horizontal" id="user_form" name="user_form" action="{{url('admin/details/'.$detail->id )}}" method = "post">

                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Driver Name<span class="required"></span></label>
                                <div class="col-xs-4 input-group">
                                    <select class = "form-control" name = "driver_id" requried>
                                        <!-- <option value="0">Own Name(No Company)</option> -->
                                        @foreach ($drivers as $driver)
                                            <option value= {{$driver->id}} {{($detail->driver_id == $driver->id)?"selected":""}}>
                                                @if($driver->company_id == 1)
                                                    {{$driver->firstname}} {{$driver->lastname}}
                                                @else
                                                    {{$driver->company}} ({{$driver->firstname}})
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Company<span class="required">*</span></label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="company" type="text" value="{{$detail->company}}" placeholder="Company" required>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Contact<span class="required"></span></label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="contact" type="text" value="{{$detail->contact}}" placeholder="Contact" required>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Po</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="po" type="text" value="{{$detail->po}}" placeholder="Po" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Pu Date<span class="required"></span></label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="put_date" id="put_date" type="text" value="{{$detail->put_date}}" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Del Date<span class="required"></span></label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="del_date" id="del_date" type="text" value="{{$detail->del_date}}" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Origin</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="origin" type="text" value="{{$detail->origin}}" placeholder="Origin" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Destination</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="destination" type="text" value="{{$detail->destination}}" placeholder="Destination" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Weight(LB)</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="weight" type="number" value="{{$detail->weight}}" placeholder="Weight" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Revenue</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="revenue" type="number" value="{{$detail->revenue}}" placeholder="Revenue" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Miles</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="mile" type="number" value="{{$detail->mile}}" placeholder="Miles" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">DH-O</label>
                                <div class="col-xs-4 input-group">
                                    <input class="form-control" name="dho" type="number" value="{{$detail->dho}}" placeholder="DH-O" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">RPM</label>
                                <div class="col-xs-4 input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input class="form-control" name="rpm" type="number" step="0.01" value="{{$detail->rpm}}" readonly placeholder="RPM" >
                                </div>
                            </div>
                            <div class="form-group custom_input ">
                                <label class="col-sm-2 control-label">DH RPM</label>
                                <div class="col-xs-4 input-group">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input class="form-control" name="dh_rpm" type="number" value="{{$detail->dh_rpm}}" readonly placeholder="DH RPM" >
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info save_button">Save</button>
                            <button type="button" class="btn btn-info back_button">Back</button>
                        </div>
                    </form>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection