@extends('frontend.index')
@section('content')
    <div class="tatsu-section">
        <div class="tatsu-section-pad clearfix">
            <div class="tatsu-section-offset-wrap">
                <div class="tatsu-row-wrap tatsu-wrap">
                    <div class="tatsu-top">
                        <h1>{{trans('technology_ras')}}</h1>
                    </div>
                    <div class="tatsu-bottom">
                        <div class="des-about">
                            {{--                            <p>THROUGH PARTNERSHIPS WITH THE BEST PROVIDERS ACROSS THE WORLD, BLOOM AQUA CAN SUPPLY THE QUALITY EQUIPMENT YOU REQUIRE.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tatsu-section-background-wrap bg-tech">
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

    <div class="content-problem clearfix">
        <h3>The Problem</h3>
        <div class="problem-box mt-30">
            <div class="col-xs-12 col-md-6">
                <div class="list-problem d-flex">
                    @foreach($problems as $problem)
                        <div class="problem-item">
                            <p><img src="{{$problem->image_vi}}" class="img-icon" alt=""></p>
                            <p class="name">{{$problem['name_'.$lang]}}</p>
                            <div class="box-content">{!! $problem['content_'.$lang] !!}</div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-xs-12 col-md-6 pdl-0">
                <img src="{{asset('/frontend/images/Environmental-Risks-of-Aquaculture-new.jpg')}}" class="img-100" alt="">
            </div>
        </div>
        <div class="problem-box">
            <div class="col-xs-12 col-md-6 pdr-0">
                <img src="{{asset('/frontend/images/Webp.net-compress-image-1.jpg')}}" class="img-100" alt="">
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="list-problem list-solution d-flex">
                    <h3>RAS TECHNOLOGY PROVIDING THE SOLUTION</h3>
                    @foreach($solutions as $problem)
                        <div class="problem-item">
                            <p><img src="{{$problem->image_vi}}" class="img-icon" alt=""></p>
                            <p class="name">{{$problem['name_'.$lang]}}</p>
                            <div class="box-content">{!! $problem['content_'.$lang] !!}</div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

    <div class="content-problem content-tech clearfix">
        <div class="container">
            @foreach($postTech as $tech)
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center title-solution">{{$tech['name_'.$lang]}}</h2>
                    {!! $tech['content_'.$lang] !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
