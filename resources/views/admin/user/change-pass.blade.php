@extends('admin.layouts.admin')
@section('title')
    <title>Đổi mật khẩu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'User', 'key' => 'Edit'])
        <div class="content">
            <div class="container-fluid">
                @include('flash-message')
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('change.pass')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Mật khẩu mới</label>
                                <input type="text" placeholder="" class="form-control" name="new_password" value="">

                            </div>

                            <button class="btn btn-primary mb-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
