@extends("layout.adminLayout")
@section("contents")

<script>
    $(function(){
        $(".back_button").click(function(){
            location.href = "{{URL::to('admin/drivers')}}"
        });

    });
</script>

<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Edit Drivers
        </h1>
       
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box box-info">
                    <!-- form start -->

                    <form class="form-horizontal" id="user_form" name="user_form" action="{{url('admin/drivers/'.$driver[0]->id )}}" method = "post">

                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">First Name<span class="required">*</span></label>
                                <div class="col-xs-4">
                                    <input class="form-control" name="firstname" type="text" value="{{ $driver[0]->firstname }}" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Last<span class="required">*</span></label>
                                <div class="col-xs-4">
                                    <input class="form-control" name="lastname" type="text" value="{{ $driver[0]->lastname }}" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Email<span class="required"></span></label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="email" type="text" value="{{ $driver[0]->email }}" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Phone<span class="required"></span></label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="phone" type="text" value="{{ $driver[0]->phone }}" placeholder="Phone" required>
                                </div>
                            </div>                            
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Company<span class="required"></span></label>
                                 <div class="col-xs-4">
                                    <select class = "form-control" name = "customer" requried>
                                        @foreach ($customers as $customer)
                                            <option {{($driver[0]->company_id == $customer->id)?"selected":""}} value= {{$customer->id}}>{{$customer->company}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">MC Number</label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="mc_number" type="text" value="{{$driver[0]->mc_number}}" placeholder="MC Number" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Equipment</label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="equipment" type="text" value="{{$driver[0]->equipment}}" placeholder="Equipment" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Max Weight(LB)</label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="max_weight" type="number" step="1"  value="{{$driver[0]->max_weight}}" placeholder="Max Weight" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Starting RPM</label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="starting_rpm" type="number" step="0.01" value="{{$driver[0]->starting_rpm}}" placeholder="Starting RPM" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Regions Covered</label>
                                 <div class="col-xs-4">
                                    <input class="form-control" name="region" type="text" value="{{$driver[0]->region}}" placeholder="Regions Covered" >
                                </div>
                            </div>
                            <div class="form-group custom_input">
                                <label class="col-sm-2 control-label">Assign Employee<span class="required"></span></label>
                                 <div class="col-xs-4">
                                    <select class = "form-control" name = "employee" requried>
                                        @foreach ($employees as $employee)
                                            <option {{($driver[0]->employee_id == $employee->id)?"selected":""}} value= {{$employee->id}}>{{$employee->firstname}} {{$employee->lastname}} </option>
                                        @endforeach
                                    </select>
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