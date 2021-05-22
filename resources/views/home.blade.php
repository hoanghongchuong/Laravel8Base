@extends('admin.layouts.admin')
@section('title')
    <title>Admin</title>
@endsection
@section('content')
<div class="content-wrapper">
@include('admin.partials.content_header', ['name' => 'Home', 'key' => ''])
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                Home page
                <p><a href="">Admin</a></p>
            </div>
        </div>
    </div>
</div>
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
@endsection
