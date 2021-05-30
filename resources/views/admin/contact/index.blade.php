@extends('admin.layouts.admin')

@section('title')
    <title>Danh sách liên hệ</title>
@endsection

@section('content')

    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Danh sách', 'key' => 'liên hệ'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">email</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày gửi</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->content}}</td>
                                    <td>{{$item->created_at}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $data->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
