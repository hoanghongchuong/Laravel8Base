@extends('admin.layouts.admin')
@section('title')
    <title>Setting</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Setting', 'key' => 'Add'])
        <form action="{{route('setting.store')}}" method="post">
            {{csrf_field()}}

            <div class="content">
                <div class="container-fluid">

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
                                        <input type="text" placeholder="Tên" class="form-control" name="name_vi">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá trị</label>
                                        <input type="text" placeholder="" class="form-control" name="value_vi">

                                    </div>
                                    <button class="btn btn-primary mb-2" type="submit">Save</button>

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Tên tiếng anh</label>
                                        <input type="text" placeholder="" class="form-control" name="name_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá trị</label>
                                        <input type="text" placeholder="" class="form-control" name="value_en">

                                    </div>
                                    <button class="btn btn-primary mb-2" type="submit">Save</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
