@extends('layout')

@section('title')
    Login
@endsection

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="card card-body mx-auto my-auto col-md-6">
                <h3>Login</h3>
                <form method="post" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#">Forget Password?</a>
                    </div>
                    
                    @include('errors')

                </form>
            </div>
        </div>
    </div>
@endsection
