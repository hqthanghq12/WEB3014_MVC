@extends('layoutadmin')
@section('title')
    Danh sách danh mục
@endsection
@section('content')
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
    <a href="{{route('/categories/create')}}"><button>Thêm danh mục</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Thao tác</th>
        </tr>
        @foreach($listCate as $item)
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->name}}</th>
                <th>{{$item->status}}</th>
                <td>
                    <a href="{{route('categories/edit/'.$item->id)}}">Sửa</a>
                    <a href="{{route('categories/destroy/'.$item->id)}}">Xóa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
