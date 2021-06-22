@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <a class="btn-primary" href="{{url(' ')}}">Show Contact Us</a>
            <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <form action="/store" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" name="firstName" class="form-control" id="inputFirstName">
                            @error('firstName')
                                <p style="color:red">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" name="lastName" class="form-control" id="inputLastName">
                            @error('lastName')
                            <p style="color:red">{{$message}}</p>
                           @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" >
                    @error('email')
                    <p style="color:red">{{$message}}</p>
                   @enderror
                </div>

                <input type="submit" class="btn btn-primary" value="add contact">
            </form>
        </div>
    </div>
</div>
@endsection
