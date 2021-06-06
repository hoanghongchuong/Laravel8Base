@extends('admin.layouts.admin')
@section('title')
    <title>Create user</title>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('css/admin/cus.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'User', 'key' => 'Add'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Tên user</label>
                                <input type="text" placeholder="Tên người dùng" class="form-control" name="name">

                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" placeholder="Email" class="form-control" name="email">

                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" placeholder="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="">Chọn vai trò</label>
                                <select name="role_id[]" id="select2-role" class="form-control select2-init" multiple="multiple">
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-primary mb-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{!! asset('js/admin/cus.js') !!}"></script>
@endsection
