@extends('admin.layouts.admin')
@section('title')
    <title>Category</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content_header', ['name' => 'Category', 'key' => 'List'])
    <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    you are login
                </div>
            </div>
        </div>
    </div>
@endsection
