@extends("layout.adminLayout")
@section("contents")

<script>
    $(function(){
        $('#dispatchdetailtable').DataTable( {
            'responsive': true,
            "bPaginate": false,
            "searching": false,
            "bFilter": false, 
            "bInfo": false
        } );
    })
   
    function edit(id) {
        var url = "{{ url('admin/details') }}";
        location.href=url + "/" + id + "/edit";
    }


</script>
<div class="content-wrapper" style="min-height: 916px;">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dispatch Details
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">               
                <!--//Account list-->
                <div class="box account_list">
                  
                    <div class="box-header with-border">
                        <a href="{{url('/admin/details/create')}}" class="btn btn-info ">Add New</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="dispatchdetailtable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th style="width: 10%;">Driver Name</th>
                                                <th style="width: 10%;">Company</th>                                             
                                                <th style="width: 6%;">Contact</th>
                                                <th style="width: 6%;">Po</th>
                                                <th style="width: 8%;">Pu Date</th>
                                                <th style="width: 8%;">Del Date</th>
                                                <th style="width: 8%;">Origin</th>
                                                <th style="width: 8%;">Destination</th>
                                                <th style="width: 6%;">Weight</th>
                                                <th style="width: 6%;">Revenue</th>
                                                <th style="width: 6%;">Miles</th>
                                                <th style="width: 6%;">DH-O</th>
                                                <th style="width: 6%;">RPM</th>
                                                <th style="width: 5%;">DH RPM</th>
                                                <th style="width: 5%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach ($details as $tr)
                                                <?php
                                               
                                                    $driver = App\Driver::find($tr->driver_id);
                                                    $user = App\User::find($tr->user_id); 
                                                    $company = App\Customer::find($driver->company_id);
                                                ?>
                                                <tr class="gradeA odd" item_id="<?php echo $tr->id ?>">
                                                    <td class=" ">
                                                        @if($company->id ==1)
                                                            {{$user->firstname}} {{$user->lastname}}(Own)
                                                        @else
                                                            {{$company->company}} ({{$user->firstname}})
                                                        @endif
                                                    </td>
                                                    <td class=" ">{{$tr->company }}</td>
                                                    <td class=" ">{{$tr->contact}}</td>
                                                    <td class=" ">{{$tr->po }}</td>
                                                    <td class=" ">{{$tr->put_date }}</td>
                                                    <td class=" ">{{$tr->del_date }}</td>
                                                    <td class=" ">{{$tr->origin }}</td>
                                                    <td class=" ">{{$tr->destination }}</td>
                                                    <td class=" ">{{$tr->weight }}</td>
                                                    <td class=" ">{{$tr->revenue }}</td>
                                                    <td class=" ">{{$tr->mile }}</td>
                                                    <td class=" ">{{$tr->dho }}</td>
                                                    <td class=" ">{{$tr->rpm }}</td>
                                                    <td class=" ">{{$tr->dh_rpm }}</td>
                                                   
                                                    <td class="center ">
                                                        <a onclick="edit({{$tr->id}})" class="btn btn-primary btn-xs edit"><i class="fa fa-edit "></i> Edit</a>                                                       
                                                        <a href="{{ url('admin/details/delete/'.$tr->id)}}" data-method="delete" class="btn btn-danger btn-xs delete"><i class="fa fa-trash "></i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Tatal <?php echo $details->total() ?> counts</div>

                                        </div>
                                         <div class="col-sm-9 ">
                                            <div  id="dataTables-example_paginate" style="float:right">
                                                <?php echo $details->render(); ?>

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
