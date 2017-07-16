@extends('layouts.master')
@section('title')
Admin Panel
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <form class="form-horizontal" action="{{ URL::to('/signup') }}" method="post">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <h2>Sign Up</h2>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="first_name">First Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" name="cpassword" placeholder="Enter confirm password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

