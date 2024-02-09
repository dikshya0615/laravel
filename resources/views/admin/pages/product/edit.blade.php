@extends('admin.layouts.master')
@section('content')
<style>
    form{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
    }
</style>

<form action="{{route('productupdate',$ecom->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">name</label>
    <input type="text" name="name" value="{{$ecom->name}}">
    <br><br>

    <label for="">price</label>
    <input type="text" name="price" value="{{$ecom->price}}">
    <br><br>

    <label for="">description</label>
    <input type="text" name="description"value="{{$ecom->description}}">
    <br><br>

    <label for="">code</label>
    <input type="text" name="code" value="{{$ecom->code}}">
    <br><br>

    <label for="">phone</label>
    <input type="text" name="phone" value="{{$ecom->phone}}">
    <br><br>
    <label for="image"></label>
    <input type="file" name="img">

    <button type="submit">Update product</button>
</form>

@endsection