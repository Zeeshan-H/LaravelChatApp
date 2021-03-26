@extends('users.layouts.master')

@section('content')
    <div class="container">
        <h2>Login Form</h2>
        <div>
            <form action="{{route('home.message')}}" method="get">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
                <input type="submit" value="Login" class="btn btn-primary">
            </form>
        </div>

    </div>
@endsection
