@extends('admin.layouts.admin')
@section('title')
    <title>Bài viết</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content_header', ['name' => 'Post', 'key' => 'List'])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin/post/create?type={{$type}}" class="btn btn-success float-right mb-2">Add Post</a>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tên tiếng việt</th>
                                <th scope="col">Tên tiếng anh</th>
                                @if($type !='about')
                                <th scope="col">Ảnh</th>
                                @endif
                                <th scope="col">Ngày tạo</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>
                                    {{$item->name_vi}} <br>
                                    @if($type=='service')
                                        <a href=" {{url('dich-vu/'.$item->slug_vi.'.html')}}" title=""> {{url('dich-vu/'.$item->slug_vi.'.html')}}</a>
                                    @endif
                                    @if($type=='post')
                                        <a href=" {{url('bai-viet/'.$item->slug_vi.'.html')}}" title=""> {{url('bai-viet/'.$item->slug_vi.'.html')}}</a>
                                    @endif
                                    @if($type=='about')
                                        <a href=" {{url('gioi-thieu/'.$item->slug_vi.'.html')}}" title=""> {{url('gioi-thieu/'.$item->slug_vi.'.html')}}</a>
                                    @endif
                                </td>
                                <td>{{$item->name_en}}</td>
                                @if($type !='about')
                                <td>
                                    <div class="box-img">
                                        <img src="{{$item->img_url}}" alt="">
                                    </div>
                                </td>
                                @endif
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="/admin/post/edit/{{$item->id}}?type={{$type}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('post.delete', $item->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">{{$posts->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
