@extends('admin.layouts.admin')
@section('title')
    <title>Menu</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Menu', 'key' => 'Add'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('menu.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Danh mục cha</label>
                                <select name="parent_id" id="" class="form-control">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tên tiếng việt</label>
                                <input type="text" placeholder="" class="form-control" name="name_vi">
                            </div>
                            <div class="form-group">
                                <label for="">Tên tiếng anh</label>
                                <input type="text" placeholder="" class="form-control" name="name_en">
                            </div>
                            <div class="form-group">
                                <label for="">Tên Español</label>
                                <input type="text" placeholder="" class="form-control" name="name_es">
                            </div>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="text" placeholder="" class="form-control" name="slug">
                            </div>
                            <div class="form-group">
                                <label for="">Vị trí</label>
                                <input type="text" placeholder="" class="" name="order" value="{{$maxOrder}}">
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="checkboxPrimary2" checked name="status">
                                    <label for="checkboxPrimary2">
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary mb-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
