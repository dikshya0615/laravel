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

<form action="/formsavegar" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">name</label>
    <input type="text" name="name">
    <br><br>

    <label for="">price</label>
    <input type="text" name="price"> 
    <br><br>

    <label for="">description</label>
    <input type="text" name="description">
    <br><br>

    <label for="">code</label>
    <input type="text" name="code">
    <br><br>

    <label for="">phone</label>
    <input type="text" name="phone">
    <br><br>
    <label for="image"></label>
    <input type="file" name="img">
    <button type="submit">Add product</button>
</form>
</fieldset>
@endsection