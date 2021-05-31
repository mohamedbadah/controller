@extends('layout.app')
@section('content')
    <form action="/edit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$contacts['id']}}">
        <p>first name</p>
        <input type="text" name="fNames" value="{{$contacts['fName']}}"><br>
        <p>last name</p>
        <input type="text" name="lNames" value="{{$contacts['lName']}}"><br>
        <p>Email</p>
        <input type="text" name="emails" value="{{$contacts['email']}}">
        <input type="submit" value="update">
    </form>
@endsection
