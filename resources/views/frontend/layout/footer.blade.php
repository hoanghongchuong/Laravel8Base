@php
    $url = url()->current();

@endphp
@if($url != url('lien-he'))
<div class="section clearfix">
    <div class="get-in-touch">
        <div class="tatsu-section">
            <div class="tatsu-shape-divider tatsu-top-divider">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="1920" height="217" viewBox="0 0 1920 217">
                    <g fill-rule="evenodd" transform="rotate(180 960 108.5)">
                        <path d="M0,57.46875 C203.364583,135.217754 494.835938,156.564108 874.414062,121.507813 C1192.61198,-13.9827666 1541.14063,-35.3291208 1920,57.46875 L1920,207 L0,207 L0,57.46875 Z" opacity=".3"></path>
                        <path d="M0,79 C292.46875,165.453125 612.46875,165.453125 960,79 C1307.53125,-7.453125 1627.53125,-7.453125 1920,79 L1920,207 L0,207 L0,79 Z" opacity=".6"></path>
                        <path d="M0,89 C288.713542,146.786458 608.713542,146.786458 960,89 C1311.28646,31.2135417 1631.28646,31.2135417 1920,89 L1920,217 L0,217 L0,89 Z"></path> </g>
                </svg>
            </div>
            <div class="tatsu-section-pad clearfix">
                <div class="tatsu-section-offset-wrap">
                    <div class="tatsu-row-wrap tatsu-wrap pdt-30">
                        <div class="tatsu-top">
                            <p class="title">{{trans('get_in_touch')}}</p>
                        </div>
                        <div class="tatsu-bottom">
                            <p>{{trans('des_contact')}}</p>
                            <div class="btn-contact">
                                <a href="/lien-he">{{trans('contact_user')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tatsu-section-background-wrap">
                <div class="tatsu-section-background tatsu-bg-lazyload tatsu-bg-lazyloaded"></div>
            </div>
            <div class="tatsu-overlay tatsu-section-overlay"></div>
        </div>

    </div>
</div>
@endif
<div class="section clearfix footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <h6>BLOOM AQUA</h6>
                <div class="des">
                    BLOOM AQUA PROVIDES COMPREHENSIVE AQUACULTURE SYSTEMS AND SOLUTIONS
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <h6>Contact</h6>
                <div class="des info">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> abc@gmail.com</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 7500A, #11-303 Beach Rd, The Plaza, 199591, Singapore</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <h6>Hotline</h6>
                <div class="des info">
                    <p><i class="fa fa-phone"></i> 0123654789</p>
                </div>
            </div>
        </div>
    </div>
</div>
