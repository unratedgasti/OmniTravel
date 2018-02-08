@extends('admin.layouts.app')

@section('content')
<style type="text/css">
    input::-webkit-input-placeholder { /* WebKit browsers */
    color:    #787878 !important;
}
input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #fff;
}
input::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #fff;
}
input:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #fff;
}
</style>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="" data-image="{{asset('includes/admin/paper-pro/assets/img/Dribbble.png')}}">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">

                     {!! Form::open(['url' => '/admin/login','id'=>'validatelogin','novalidate'=>"novalidate"]) !!}
                     <div class="card" data-background="color" data-color="blue">

                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <div class="card-content">
                             @if(session()->has('sesserror'))
                      <div class="alert alert-danger">
                         <button type="button" aria-hidden="true" class="close">×</button>
                        <span>{!! 
                        session('sesserror')['msg'] !!}</span>
                    </div>
                    @endif
                        <div class="form-group @if(session()->has('sesserror')) {!! 
                        session('sesserror')['email'] !!} @endif">
                            <label>Email address</label>
                            <input type="email" name="user_email" placeholder="Enter email" class="form-control">
                        </div>
                        <div class="form-group  @if(session()->has('sesserror')) {!! 
                        session('sesserror')['password'] !!} @endif">
                            <label>Password</label>
                            <input type="password" name="user_password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-fill btn-wd ">Let's go</button>

                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-transparent">
    <div class="container">
        <div class="copyright">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">Daniel Tinao</a>
        </div>
    </div>
</footer>
</div>
</div>
@endsection
