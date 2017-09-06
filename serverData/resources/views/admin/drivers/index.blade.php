@extends("layout.adminLayout")
@section("contents")

<script>
    $(function(){
        $('#driverUsertable').DataTable( {
            'responsive': true,
            "bPaginate": false,
            "searching": false,
            "bFilter": false, 
            "bInfo": false
        } );
    })
   
    function edit(id) {
        var url = "{{ url('admin/drivers') }}";
        location.href=url + "/" + id + "/edit";
    }

    function change_active(obj,driver_id){
       
        var isActive = document.getElementById("isActive").value;
        
        if(isActive==1){
           isActive = 0;
        }else{
            isActive = 1;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            dataType:'json',
            url: "{{ url('admin/drivers') }}"+"/setactive",
            data: {
                isActive : isActive, id : driver_id
            },
            success: function (data) {
                if(data=="ok"){
                    if(isActive==0){
                            $(obj).removeClass("btn-success");
                            $(obj).addClass("btn-danger");
                            $(obj).html("Block");
                                                    
                    }else{
                        $(obj).removeClass("btn-danger");
                        $(obj).addClass("btn-success");
                        $(obj).html("Active");
                    }
                    document.getElementById("isActive").value = isActive;
                }
            }
        });
   }



</script>
<div class="content-wrapper" style="min-height: 916px;">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Drivers
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">               
                <!--//Account list-->
                <div class="box account_list">
                  
                    <div class="box-header with-border">
                        <a href="{{url('/admin/drivers/create')}}" class="btn btn-info ">Add New</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="driverUsertable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th style="width: 8%;">Driver Name</th>
                                                <th style="width: 8%;">Email</th>
                                                <th style="width: 8%;">Name</th>                                             
                                                <th style="width: 8%;">Phone</th>
                                                <th style="width: 8%;">MC Number</th>
                                                <th style="width: 8%;">Equipment</th>
                                                <th style="width: 7%;">Max Weight</th>
                                                <th style="width: 7%;">Starting RPM</th>
                                                <th style="width: 8%;">Regions Covered</th>
                                                <th style="width: 5%;">is_active</th>
                                                <th style="width: 8%;">Employee</th>
                                                <th style="width: 15%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach ($drivers as $tr)
                                                <?php
                                                    $employee = App\User::find($tr->employee_id);
                                                ?>
                                                <tr class="gradeA odd" item_id="<?php echo $tr->id ?>">
                                                    <td class=" ">
                                                        @if($tr->company_id ==1)
                                                            {{$tr->firstname}} {{$tr->lastname}}(Own)
                                                        @else
                                                            {{$tr->company}} ({{$tr->firstname}})
                                                        @endif
                                                    </td>
                                                    <td class=" ">{{$tr->email }}</td>
                                                    <td class=" ">{{$tr->firstname}} {{$tr->lastname }}</td>
                                                    <td class=" ">{{$tr->phone }}</td>
                                                    <td class=" ">{{$tr->mc_number }}</td>
                                                    <td class=" ">{{$tr->equipment }}</td>
                                                    <td class=" ">{{$tr->max_weight }}</td>
                                                    <td class=" ">{{$tr->starting_rpm }}</td>
                                                    <td class=" ">{{$tr->region }}</td>
                                                    <td class=" ">
                                                        <input type="hidden" id="isActive" name="isActive" value="{{$tr->is_active}}" />
                                                        @if($tr->is_active==1)
                                                            <a onclick="change_active(this,{{$tr->id}})" class="btn btn-success btn-xs edit">Active</a>
                                                        @else
                                                            <a onclick="change_active(this,{{$tr->id}})" class="btn btn-danger btn-xs edit">Block</a>
                                                        @endif
                                                    </td>
                                                    <td class=" ">{{$employee->firstname}} {{$employee->lastname}} </td>

                                                    <td class="center ">
                                                        <a onclick="edit({{$tr->id}})" class="btn btn-primary btn-xs edit"><i class="fa fa-edit "></i> Edit</a>                                                       
                                                        <a href="{{ url('admin/drivers/delete/'.$tr->id)}}" data-method="delete" class="btn btn-danger btn-xs delete"><i class="fa fa-trash "></i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Tatal <?php echo $drivers->total() ?> counts</div>

                                        </div>
                                         <div class="col-sm-9 ">
                                            <div  id="dataTables-example_paginate" style="float:right">
                                                <?php echo $drivers->render(); ?>

                                            </div>
                                        </div> 
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<style>
    .form-group.custom_input{
        margin-right: 20px
    }
</style>
@endsection
