
@extends("layout.layout")
@section("contents")
       
        <!-- -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

                        <!-- ALERT -->
                         @if($errors->has("wrong"))
                            <span class="help-block">
                                <strong>{{$errors->first("wrong")}}</strong>
                            </span>

                        @endif
                        
                        <!-- /ALERT -->

                        <div class="box-static box-transparent box-bordered padding-30">

                            <div class="box-title margin-bottom-30">
                                <h2 class="size-20">Don't have an account yet?</h2>
                            </div>

                            <form class="nomargin sky-form" action="{{url('/register')}}" method="post">
                                    {{ csrf_field() }}
                                <fieldset>

                                    <div class="row">
                                        <div class="form-group">
                                        
                                            <div class="col-md-12 form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                <label>First Name *</label>
                                                <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-user"></i>
                                                        <input required="" type="text" name="firstname" value={{ old('firstname') }}>
                                                        @if ($errors->has('firstname'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('firstname') }}</strong>
                                                            </span>
                                                        @endif
                                                        <b class="tooltip tooltip-bottom-right">Your First Name</b>
                                                    </label>
                                            </div>

                                            <div class="col-md-12 form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                <label for="register:last_name">Last Name *</label>
                                                <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-user"></i>
                                                        <input required="" type="text" name="lastname" value={{ old('lastname') }}>
                                                        @if ($errors->has('lastname'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                                                        @endif
                                                        <b class="tooltip tooltip-bottom-right">Your Last Name</b>
                                                    </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">

                                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="register:email">Email *</label>
                                                <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-envelope"></i>
                                                        <input required="" type="text" name="email" value={{ old('email') }}>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                        <b class="tooltip tooltip-bottom-right">Your Email</b>
                                                    </label>
                                            </div>

                                            <div class="col-md-12 form-group{{ $errors->has('phone ') ? ' has-error' : '' }}">
                                                <label for="register:phone">Phone</label>
                                                <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-phone"></i>
                                                        <input type="text" name="phone" value={{ old('phone') }}>
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                        <b class="tooltip tooltip-bottom-right">Your Phone (optional)</b>
                                                    </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">

                                            <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="register:pass1">Password *</label>
                                                <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-lock"></i>
                                                        <input required="" type="password" class="err" name="password">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                        <b class="tooltip tooltip-bottom-right">Min. 6 characters</b>
                                                    </label>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="register:pass2">Password Again *</label>
                                                <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-lock"></i>
                                                        <input required="" type="password" class="err" name="password_confirmation">
                                                        <b class="tooltip tooltip-bottom-right">Type the password again</b>
                                                    </label>
                                            </div>

                                        </div>
                                    </div>

                                    <hr />

                                    <label class="checkbox nomargin"><input class="checked-agree" type="checkbox" name="checkbox"><i></i>I agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms of Service</a></label>
                                    <label class="checkbox nomargin"><input type="checkbox" name="checkbox"><i></i>Subscribe to newsletter</label>

                                </fieldset>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> REGISTER</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- / -->



@endsection
