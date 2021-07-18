@extends('admin.layouts.admin')
@section('title')
    <title>Setting</title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('admin.partials.content_header', ['name' => 'Setting', 'key' => 'Add'])
        <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="setting_id" value="{{$setting ? $setting->id : null}}">
            {{csrf_field()}}
            <div class="content">
                <div class="container-fluid">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success float-right mb-2">Save</button>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Thông tin chung</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Hình ảnh</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-10">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Tên công ty</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->company_vi : ''}}" name="company_vi">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Tên công ty(tiếng anh)</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->company_en : ''}}" name="company_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tên công ty(Español)</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->company_es : ''}}" name="company_es">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->email : ''}}" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ(Tiếng việt)</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->address_vi: ''}}" name="address_vi">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ(Tiếng anh)</label>
                                        <input type="text" class="form-control" value="{{$setting ? $setting->address_en: ''}}" name="address_en">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ(Tiếng Español)</label>
                                        <input type="text" class="form-control" value="{{$setting ? $setting->address_es: ''}}" name="address_es">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" placeholder="" class="form-control"value="{{$setting ? $setting->phone : ''}}" name="phone">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Hotline</label>
                                        <input type="text" placeholder="" class="form-control"value="{{$setting ? $setting->hotline : ''}}" name="hotline">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Mô tả ngắn</label>
                                        <textarea type="text" placeholder="" class="form-control" name="des_vi">{{$setting ? $setting->des_vi : ''}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mô tả ngắn(Tiếng anh)</label>
                                        <textarea type="text" placeholder="" class="form-control" name="des_en">{{$setting ? $setting->des_en : ''}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mô tả ngắn(Tiếng Español)</label>
                                        <textarea type="text" placeholder="" class="form-control" name="des_es">{{$setting ? $setting->des_es : ''}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Facebook</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->facebook : ''}}" name="facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Zalo</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->zalo : ''}}" name="zalo">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Instagram</label>--}}
{{--                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->instagram : ''}}" name="instagram">--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="">Youtube</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->youtube : ''}}" name="youtube">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Twitter</label>--}}
{{--                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->twitter : ''}}" name="twitter">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">In</label>--}}
{{--                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->social_in : ''}}" name="social_in">--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="">Bản đồ</label>
                                        <input type="text" placeholder="" class="form-control" value="{{$setting ? $setting->iframe_map: ''}}" name="iframe_map">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="box-img mb-3">
                                            <img src="{{$setting ? $setting->favicon_url : ''}}" alt="">
                                        </div>
                                        <label for="">favicon</label>
                                        <input type="file" placeholder="" name="favicon">
                                    </div>
                                    <div class="form-group">
                                        <div class="box-img mb-3">
                                            <img src="{{$setting ? $setting->logo_url : ''}}" alt="">
                                        </div>
                                        <label for="">Logo</label>
                                        <input type="file" placeholder="" name="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container-fluid">
                    <div class="col-md-12">
                        <button class="btn btn-success mb-2">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

