@extends('frontend.index')
@section('content')
    <div class="tatsu-section">
        <div class="tatsu-section-pad clearfix">
            <div class="tatsu-section-offset-wrap">
                <div class="tatsu-row-wrap tatsu-wrap">
                    <div class="tatsu-top">
                        <h1>{{@$item['name_'.$lang]}}</h1>
                    </div>
                    <div class="tatsu-bottom">
                        <div class="des-about">
                            <p>{!! @$item['description_'.$lang] !!}</p>
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

    <div class="section clearfix">
        <div class="container">
            <div class="row mt-30 pdb-100">
                <div class="content-about col-xs-12 col-md-12">
                     {!! @$item['content_'.$lang]  !!}
                </div>
            </div>
        </div>
    </div>

@endsection
