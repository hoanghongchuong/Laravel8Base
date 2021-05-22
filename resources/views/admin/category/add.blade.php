@extends('admin.layouts.admin')
@section('title')
    <title>Admin</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Category', 'key' => 'Add'])
        <form action="{{route('categories.store')}}" method="post">
            {{csrf_field()}}

            <div class="content">
                <div class="container-fluid">
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
                                            <input type="text" placeholder="Tên danh mục" class="form-control" name="name_vi">

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
                                        <input type="text" placeholder="category" class="form-control" name="name_en">

                                    </div>
                                    <button class="btn btn-primary mb-2">Save</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
