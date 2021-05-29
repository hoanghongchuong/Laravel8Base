@extends('admin.layouts.admin')
@section('title')
    <title>Category</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content_header', ['name' => 'Category', 'key' => 'List'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <a href="categories/create?type=post" class="btn btn-success float-right mb-2">Add Category</a>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Stt</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Tên tiếng anh</th>
{{--                                    <th scope="col">Slug</th>--}}
                                    <th scope="col">Ngày tạo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($listCategory as $key => $item)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td>{{$item->name_vi}}</td>
                                    <td>{{$item->name_en}}</td>
{{--                                    <td>{{$item->slug_vi}}</td>--}}
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a href="categories/edit/{{$item->id}}?type=post" class="btn btn-primary">Edit</a>
                                        <a href="{{route('categories.delete', $item->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">{{$listCategory->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
