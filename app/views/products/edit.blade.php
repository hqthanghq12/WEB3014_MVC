@extends('layoutadmin')
@section('title')
    Chỉnh sửa danh mục
@endsection
@if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span>{{$_SESSION['success']}}</span>
@endif
@section('content')
    <form action="{{route('categories/update/'.$listCate->id)}}" method="POST">
        <label>Name</label>
        <input type="text" name="name" value="{{$listCate->name}}">
        <button type="submit" name="btn-sub" value="Gửi">Gửi</button>
    </form>
@endsection
