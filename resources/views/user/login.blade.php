@extends('master.index')
@section('title', 'Students')


@section('page_header_title', 'Manage Students')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Login</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">

            <div class="login-box">
                <div class="login-logo">
                    <a href="../../index2.html"><b>Admin</b>LTE</a>
                </div>
                <!-userogin-logo -->
                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="../../index2.html" method="post">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox"> Remember Me
                                        </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                            Facebook</a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                            Google+</a>
                    </div>
                    <!-- /.social-auth-links -->

                    <a href="#">I forgot my password</a><br>
                    <a href="register.html" class="text-center">Register a new membership</a>

                </div>
                <!-userogin-box-body -->
            </div>


    </div>

@endsection

@section('extra_section')

    <!-- Modal  id="myModal" role="dialog -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="email">User Name:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    <div class="form-group">
                        <label for="pasword">Paswoord</label>
                        <input type="password" class="form-control" id="pasword">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="fa fa-sign-in">Login</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Model -->


@endsection