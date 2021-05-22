@extends('admin.layouts.admin')
@section('title')
    <title>Admin</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Menu', 'key' => 'Add'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('categories.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Danh mục cha</label>
                                <select name="parent_id" id="" class="form-control">
                                    <option value="0">Chọn danh mục cha</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input type="text" placeholder="Tên danh mục" class="form-control" name="name">

                            </div>
                            <button class="btn btn-primary mb-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
