@extends('admin.layouts.admin')

@section('title')
    <title>List user</title>
@endsection

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="{{ asset('admins/slider/index/index.css') }}">--}}
{{--@endsection--}}

{{--@section('js')--}}
{{--    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@9.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('admins/main.js') }}"></script>--}}
{{--@endsection--}}


@section('content')

    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'User', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @include('flash-message')
                    <div class="col-md-12">
                        <a href="{{ route('user.create') }}" class="btn btn-success float-right m-2"> Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{$user->roleArray}}</td>

                                    <td>
                                        <a href="{{ route('user.edit', ['id' => $user->id]) }}"
                                           class="btn btn-default">Edit</a>
                                        <a href="javascript:;"
                                           data-id="{{ $user->id }}"
                                           class="btn btn-danger action_delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
