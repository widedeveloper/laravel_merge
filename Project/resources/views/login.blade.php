
@extends("layout.layout")
@section("contents")
        <section class="page-header page-header-xs">
            <div class="container">

                <h1>LOGIN</h1>

                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Login</li>
                </ol>
                <!-- /breadcrumbs -->

            </div>
        </section>
        <!-- /PAGE HEADER -->




        <!-- -->
        <section>
            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-md-offset-3">

                        <!-- ALERT -->
                        <div class="alert alert-mini alert-danger margin-bottom-30">
                            <strong>Oh snap!</strong> Login Incorrect!
                        </div>
                        <!-- /ALERT -->

                        <div class="box-static box-border-top padding-30">
                            <div class="box-title margin-bottom-30">
                                <h2 class="size-20">I'm a returning customer</h2>
                            </div>

                            <form class="nomargin" method="post" action="#" autocomplete="off">
                                <div class="clearfix">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required="">
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
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

                        <div class="margin-top-30 text-center">
                            <a href="signin.html"><strong>Create Account</strong></a>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- / -->


    </div>
    <!-- /wrapper -->
@endsection