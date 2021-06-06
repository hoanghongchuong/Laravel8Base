@extends('admin.layouts.admin')
@section('title')
    <title>Menu</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content_header', ['name' => 'Menu', 'key' => 'List'])
    <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @include('flash-message')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('menu.create')}}" class="btn btn-success float-right mb-2">Add Menu</a>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Stt
                                <th scope="col">Tên tiếng việt</th>
                                <th scope="col">Tên tiếng anh</th>
                                <th scope="col">Link</th>
                                <th scope="col">Danh mục cha</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $item)
                                <tr>
                                    <th scope="row">{{$item->order}}</th>
                                    <td>{{$item->name_vi}}</td>
                                    <td>{{$item->name_en}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{isset($item->parent) ? $item->parent->name_vi : ''}}</td>
                                    <td>
                                        <a href="{{route('menu.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('menu.delete', $item->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
{{--                    <div class="col-md-12">{{$menus->links()}}</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
