@extends("layout.layout")
@section("contents")
        <section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('assets/images/conatct-1.png');background-size: contain !important  ">
            <div class="overlay dark-1">
                <!-- dark overlay [1 to 9 opacity] -->
            </div>

            <div class="container">

                <h1>CONTACT US</h1>

                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CONTACT US</a></li>

                </ol>
                <!-- /breadcrumbs -->

            </div>
        </section>
        <!-- /PAGE HEADER -->




        <!-- 3 Cols -->
        <section class="">
            <div class="container">
                <header class="margin-bottom-40 text-center">
                    <h2><span>CONTACT US DETAILS</span></h2>
                    <div class="">
                        <img class="" src="assets/images/Separator-old.png" alt="" />
                    </div>
                    <p>
                        Our Mission is to be the Hardest Working Team in the Industry and Daily Market Experts.
                    </p>
                </header>

                <div class="row">
                    <div class="col-md-7">
                        <div id="rd_vci9xip6pa00jvs79spm" class="">
                            <div role="form" class="wpcf7" id="wpcf7-f6-p76-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                 @if($status = Session::get("status"))
	                            <div class="alert alert-success form-group">
	                                <span class="help-block">
	                                    <strong>{{$status}}</strong>
	                                </span>
	                            </div><br>
	                        @endif
                                <form action="{{url('/mailsend')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                                 {{ csrf_field() }}
                                   
                                    <div class="left_field">
                                    
                                        <p class="{{ $errors->has('name') ? ' has-error' : '' }}"><span class="wpcf7-form-control-wrap your-name">
                                       		 <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" 
                                       		 aria-required="true" aria-invalid="false" placeholder="Name" value="{{ old('name') }}"></span>
                               		  	@if ($errors->has('name'))
	                                            <span class="help-block">
	                                                <strong>{{ $errors->first('name') }}</strong>
	                                            </span>
	                                        @endif
                                       	</p>
                                        <p class="{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        	<span class="wpcf7-form-control-wrap your-phone">
                                        		<input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" 
                                        	aria-required="true" aria-invalid="false" placeholder="Phone" value="{{ old('phone') }}">
                                        	@if ($errors->has('phone'))
	                                            <span class="help-block">
	                                                <strong>{{ $errors->first('phone') }}</strong>
	                                            </span>
	                                        @endif
                                        	</span>
                                        </p>
                                    </div>
                                    <div class="right_field">
                                        <p class="{{ $errors->has('email') ? ' has-error' : '' }}"><span class="wpcf7-form-control-wrap your-email">
                                        	<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" 
                                        	aria-invalid="false" placeholder="Email" value="{{ old('email') }}">
                                        	@if ($errors->has('email'))
	                                            <span class="help-block">
	                                                <strong>{{ $errors->first('email') }}</strong>
	                                            </span>
	                                        @endif
                                        </span></p>
                                        <p class="{{ $errors->has('company') ? ' has-error' : '' }}"><span class="wpcf7-form-control-wrap Company">
                                        	<input type="text" name="company" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Company Name" value="{{ old('company') }}">
                                        	@if ($errors->has('company'))
	                                            <span class="help-block">
	                                                <strong>{{ $errors->first('company') }}</strong>
	                                            </span>
	                                        @endif
                                        </span></p>
                                    </div>
                                    <div class="message_field">
                                        <p class="{{ $errors->has('message') ? ' has-error' : '' }}"><span class="wpcf7-form-control-wrap your-message">
                                       		 <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" value="{{ old('message') }}"></textarea>
                                       		 @if ($errors->has('message'))
	                                            <span class="help-block">
	                                                <strong>{{ $errors->first('message') }}</strong>
	                                            </span>
	                                        @endif
                                        </span></p>
                                        <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="wpb_wrapper margin-top-50">

                            <div id="rand_mq5dldmtv0yuqoo5zdej" class="icon_box_square ">
                                <style type="text/css">
                                    #rand_mq5dldmtv0yuqoo5zdej .ib_square {
                                        background: #1ca436
                                    }
                                </style>
                                <div class="ib_square"><i class="fa fa-envelope" style="color:#fff;"></i></div>
                                <h3 style="color:#2c3e50;"></h3>
                                <p style="color:#2b2b2b">Info@MergeTransit.com</p>
                            </div>
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>

                            <div id="rand_tbx9bli6vp0sxb51q7sz" class="icon_box_square ">
                                <style type="text/css">
                                    #rand_tbx9bli6vp0sxb51q7sz .ib_square {
                                        background: #1ca436
                                    }
                                </style>
                                <div class="ib_square"><i class="fa fa-phone" style="color:#fff;"></i></div>
                                <h3 style="color:#2c3e50;"></h3>
                                <p style="color:#2b2b2b">(866)&nbsp;272-8001</p>
                            </div>
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>

                            <div id="rand_ocn1dq7gvoxxt7bhnal5" class="icon_box_square ">
                                <style type="text/css">
                                    #rand_ocn1dq7gvoxxt7bhnal5 .ib_square {
                                        background: #1ca436
                                    }
                                </style>
                                <div class="ib_square"><i class="fa fa-map-marker" style="color:#fff;"></i></div>
                                <h3 style="color:#2c3e50;"></h3>
                                <p style="color:#2b2b2b">A Texas Company 4315 Terry-O Lane, Austin TX</p>
                            </div>
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>

                            <div id="rand_a5p75g7v99j4oca8i63x" class="icon_box_square ">
                                <style type="text/css">
                                    #rand_a5p75g7v99j4oca8i63x .ib_square {
                                        background: #1ca436
                                    }
                                </style>
                                <div class="ib_square"><i class="fa fa-clock-o" style="color:#fff;"></i></div>
                                <h3 style="color:#2c3e50;"></h3>
                                <p style="color:#2b2b2b">Monday-Friday &nbsp;8am – 6pm CST</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- /3 Cols -->

@endsection