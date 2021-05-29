@extends('admin.layouts.admin')
@section('title')
    <title>Category</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Category', 'key' => 'Edit'])
        <form action="{{route('categories.update', $category->id)}}" method="post">
            {{csrf_field()}}
            <div class="content">
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Danh mục cha</label>
                            <select name="parent_id" id="" class="form-control">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Tiếng việt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">English</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content mt-10">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên tiếng việt</label>
                                    <input type="text" placeholder="Tên danh mục" class="form-control" value="{{$category->name_vi}}" name="name_vi">

                                </div>
                                <button class="btn btn-primary mb-2">Save</button>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Tên tiếng anh</label>
                                    <input type="text" placeholder="Tên danh mục" class="form-control" value="{{$category->name_en}}" name="name_en">

                                </div>
                                <button class="btn btn-primary mb-2">Save</button>

                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="row">--}}

{{--                    <div class="col-md-6">--}}
{{--                        @if ($message = Session::get('success'))--}}
{{--                            <div class="alert alert-success alert-block">--}}
{{--                                <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Tên danh mục</label>--}}
{{--                                <input type="text" placeholder="Tên danh mục" class="form-control" value="{{$category->name_vi}}" name="name_vi">--}}

{{--                            </div>--}}
{{--                            <button class="btn btn-primary mb-2">Save</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        </form>
    </div>
@endsection
