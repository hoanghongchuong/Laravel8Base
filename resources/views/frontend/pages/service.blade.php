@extends('frontend.index')
@section('content')
    <div class="tatsu-section">
        <div class="tatsu-section-pad clearfix">
            <div class="tatsu-section-offset-wrap">
                <div class="tatsu-row-wrap tatsu-wrap">
                    <div class="tatsu-top">
                        <h1>{{trans('service')}}</h1>
                    </div>
                    <div class="tatsu-bottom">
                        <div class="des-about">
{{--                            <p>THROUGH PARTNERSHIPS WITH THE BEST PROVIDERS ACROSS THE WORLD, BLOOM AQUA CAN SUPPLY THE QUALITY EQUIPMENT YOU REQUIRE.</p>--}}
                        </div>
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

    <div class="section clearfix  pdb-100">
        <div class="container equipment-content">
{{--            <div class="row mt-30">--}}
{{--                <h4 class="tac">We’re pleased to offer a range of quality products, including:</h4>--}}
{{--            </div>--}}
            <div class="row mt-30">
                <div class="list-item d-flex">
                    @foreach($posts as $item)
                    <div class="box-item">
                        <div class="box-img">
                            <div class="item-box">
                                <a href="{{url('dich-vu/'.$item->slug_vi.'.html')}}" class="vk-project-item__img"><img src="{{$item->image_vi}}" alt=""></a>
                            </div>
                        </div>
                        <p class="name-equipment"><a href="{{url('dich-vu/'.$item->slug_vi.'.html')}}">{{$item['name_'.$lang]}}</a></p>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection
