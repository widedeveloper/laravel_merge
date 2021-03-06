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
            Reports Generate
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       
        <div class="row">
            <div class="col-xs-12">      
                <div class="box account_list">
                  
                    <div class="box-header with-border">
                         <div class="row " style="margin-bottom:15px;">
                            <div class="col-xs-3">
                                <!-- select driver -->
                                <select class = "form-control" name = "driver_id" requried>
                                    <option value="">Select Drivers...</option>
                                    @foreach ($drivers as $driver)
                                        <option value= {{$driver->id}}>
                                            @if($driver->company_id == 1)
                                                {{$driver->firstname}} {{$driver->lastname}}
                                            @else
                                                {{$driver->company}} ({{$driver->firstname}})
                                            @endif
                                        </option>
                                    @endforeach
                                </select>                                
                            </div>
                            <div class="col-xs-3">
                                <input type="text" name="company" class="form-control" placeholder="Input Company">
                            </div>
                            <div class="col-xs-3">
                                 <input type="text" name="origin" class="form-control" placeholder="Input Origin">
                            </div>
                            <div class="col-xs-3">
                                <input type="text" name="destination" class="form-control" placeholder="Input Destination">
                            </div>

                        </div>
                        <a href="{{url('/admin/details/create')}}" class="btn btn-info pull-right">Generate</a>

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
                                           
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all"></div>

                                        </div>
                                         <div class="col-sm-9 ">
                                            <div  id="dataTables-example_paginate" style="float:right">
                                                
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
