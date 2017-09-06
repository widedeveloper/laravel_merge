
@extends("layout.layout")
@section("contents")
       
        <!-- -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">                      
                         @if($status = Session::get("status"))
                            <div class="alert alert-info form-group">
                                <span class="help-block">
                                    <strong>{{$status}}</strong>
                                </span>
                            </div><br>
                        @endif
                     

                        <div class="box-static box-border-top padding-30">
                            <div class="box-title margin-bottom-30">
                                <h2 class="size-20">I'm a returning customer</h2>
                            </div>

                            <form class="nomargin" method="post" action="{{url('/login')}}" autocomplete="off">
                              {{ csrf_field() }}
                                <div class="clearfix">

                                    <!-- Email -->
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required="" value="{{ old('email') }}">
                                         @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                         @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6 col-xs-6">

                                        <!-- Inform Tip -->
                                        <div class="form-tip pt-20">
                                            <a class="no-text-decoration size-13 margin-top-10 block" href="#">Forgot Password?</a>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                                        <button class="btn btn-primary">OK, LOG IN</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                        <!-- <div class="margin-top-30 text-center">
                            <a href="/register"><strong>Create Account</strong></a>

                        </div> -->

                    </div>
                </div>

            </div>
        </section>
        <!-- / -->


    </div>
    <!-- /wrapper -->
@endsection