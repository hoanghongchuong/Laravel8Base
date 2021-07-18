@extends('frontend.index')
@section('content')
    <div class="tatsu-section">
        <div class="tatsu-section-pad clearfix">
            <div class="tatsu-section-offset-wrap">
                <div class="tatsu-row-wrap tatsu-wrap">
                    <div class="tatsu-top">
                        <h1>{{$title}}</h1>
                    </div>
                    <div class="tatsu-bottom">
{{--                        <p>Specialists in aquaculture technology solutions</p>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="tatsu-section-background-wrap">
            <div class="tatsu-section-background tatsu-bg-lazyload tatsu-bg-lazyloaded"></div>
        </div>
        <div class="tatsu-overlay tatsu-section-overlay"></div>
        <div class="tatsu-shape-divider tatsu-bottom-divider tatsu-shape-over">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="1920" height="217" viewBox="0 0 1920 217">
                <g fill-rule="evenodd" transform="matrix(-1 0 0 1 1920 0)">
                    <path d="M0,57.46875 C203.364583,135.217754 494.835938,156.564108 874.414062,121.507813 C1192.61198,-13.9827666 1541.14063,-35.3291208 1920,57.46875 L1920,207 L0,207 L0,57.46875 Z" opacity=".3"></path>
                    <path d="M0,79 C292.46875,165.453125 612.46875,165.453125 960,79 C1307.53125,-7.453125 1627.53125,-7.453125 1920,79 L1920,207 L0,207 L0,79 Z" opacity=".6"></path>
                    <path d="M0,89 C288.713542,146.786458 608.713542,146.786458 960,89 C1311.28646,31.2135417 1631.28646,31.2135417 1920,89 L1920,217 L0,217 L0,89 Z"></path>
                </g>
            </svg>
        </div>
    </div>
    <div class="section clearfix tatsu-wrap pdb-100 pdt-10">
        <div class="tatsu-text-inner">
            <h4>
                {{$setting['des_'.$lang]}}
            </h4>
        </div>
    </div>
    <div class="section clearfix tatsu-wrap">
        <div class="container">
            <div class="row our-service pdb-100 pdt-10">
                @foreach($services as $service)
                <div class="col-xs-12 col-md-4">
                    <div class="col-xs-2 col-md-2">
                        <img src="{{$service->icon_url}}" alt="" class="tatsu-icon_card-icon">
                    </div>
                    <div class="col-xs-10 col-md-10 pdl-mobile-25">
                        <h3> {{$service['name_'.$lang]}} </h3>
                        <p class="text-des">{{$service['description_'.$lang]}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section clearfix tatsu-wrap">
        <div class="container ras-technology">
            <div class="row pdb-100 pdt-10">
                <div class="col-xs-12 col-md-6">
                    @if($aboutTech)
                    <div class="with-full">
                        <h2>{{$aboutTech['name_'.$lang]}}</h2>
                        <div class="des">
                            <p>{{$aboutTech['description_'.$lang]}}</p>
                        </div>
                        <div class="col-xs-12 col-md-12 pdl-0 pdr-0">
                            {!! $aboutTech['content_'.$lang] !!}
{{--                            <div class="col-xs-12 col-md-6 pdl-0">--}}
{{--                                <p><img src="{{asset('/frontend/images/img5.png')}}" class="tatsu-icon_card-icon" alt=""></p>--}}
{{--                                <div class="des">--}}
{{--                                    <p>A more sustainable production – water recirculation and advanced water treatment ensures significantly reduced water pollution from feed, faeces, and chemical waste.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-md-6 pdl-0">--}}
{{--                                <p><img src="{{asset('/frontend/images/img4.png')}}" class="tatsu-icon_card-icon" alt=""></p>--}}
{{--                                <div class="des">--}}
{{--                                    <p>A more sustainable production – water recirculation and advanced water treatment ensures significantly reduced water pollution from feed, faeces, and chemical waste.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <p class="mt-30 col-xs-12 col-md-12 pdl-0"><a href="{{url('cong-nghe')}}" class="read-more">{{trans('more_detail')}}</a></p>
                    </div>
                        @endif
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="box-img pdt-30">
                        <img src="{{asset('/frontend/images/img1.png')}}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="section clearfix tatsu-wrap">
        <div class="container out-expertise pdb-100">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="box-img">
                        <img src="{{asset('frontend/images/img6.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="tatsu-expand">
                        <h6 class="tatsu-title"><span class="tatsu-border"></span><span> {{trans('title_expertise')}}</span></h6>
                    </div>
                    <h2>{{trans('our_expertise')}}:</h2>
                    <div class="clearfix tatsu-wrap">
                        @foreach($expertise as $ex)
                        <div class="col-md-6 pdl-0">
                            <div class="col-xs-3 col-md-3 pdl-0">
                                <img src="{{$ex->img_url}}" alt="" class="tatsu-icon_card-icon">
                            </div>
                            <div class="col-xs-9 col-md-9 pdl-mobile-25 pdl-0">
                                <p class="text-des">{{$ex['name_'.$lang]}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section clearfix tatsu-wrap">
        <div class="container equipment">
            <div class="row tac pdb-100">
                <h2>{{trans('equipment')}}</h2>
                <div class="tatsu-text-inner des">
{{--                    <p>Through strategic partnerships with some of the best aquaculture equipment producers across the world, Bloom Aqua provides everything you need for your aquaculture operation.</p>--}}
                </div>
                <div class="slider-equipment">
                    <div class="owl-carousel owl-theme">
                        @foreach($equipments as $eq)
                        <div class="item">
                            <div class="box-img">
                                <a href="{{url('trang-thiet-bi/'.$eq->slug_vi.'.html')}}"><img src="{{$eq->img_url}}" alt=""></a>
                            </div>
                            <p><a href="{{url('trang-thiet-bi/'.$eq->slug_vi.'.html')}}">{{$eq['name_'.$lang]}}</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section clearfix tatsu-wrap" style="background: #f5f6fa">
        <div class="container article">
            <div class="row pdb-100">
                @foreach($posts as $post)
                <div class="col-xs-12 col-md-4 pdl-mobile-15 pdl-0">
                    <a href="{{url('bai-viet/'.$post->slug_vi.'.html')}}">
                        <div class="box-img">
                            <img src="{{$post->img_url}}" alt="">
                        </div>
                        <p class="title-block">{{$post['name_'.$lang]}}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
