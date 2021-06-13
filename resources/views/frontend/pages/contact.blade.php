@extends('frontend.index')
@section('content')
    <div class="tatsu-section">
        <div class="tatsu-section-pad clearfix">
            <div class="tatsu-section-offset-wrap">
                <div class="tatsu-row-wrap tatsu-wrap">
                    <div class="tatsu-top">
                        <h1>{{trans('title_contact')}}</h1>
                    </div>
                    <div class="tatsu-bottom">
                        <div class="des-about">
{{--                            <p>BOUTIQUE CONSULTANCY SPECIALISING IN TECHNOLOGY SOLUTIONS FOR AQUACULTURE.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tatsu-section-background-wrap  contact-bg">
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
        <div class="container contact-content">
            <div class="row mt-30">
                <!--Section: Contact v.2-->
                <section class="mb-4">
                    <div class="row">
                        @include('flash-message')
                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <h2>{{trans('contact_user')}}</h2>
{{--                            <p class="des-contact">If you’re looking for specialised aquaculture consultancy or--}}
{{--                                have a question about what we do, get in touch with us here! We’ll be happy to help.</p>--}}
                            <form id="contact-form" name="contact-form" action="{{route('send.contact')}}" method="POST">
                                @csrf
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" placeholder="{{trans('name')}}" class="form-control" required>
                                            <!--                                            <label for="name" class="">Your name</label>-->
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="email" id="email" name="email" placeholder="email" class="form-control" required>
                                            <!--                                            <label for="email" class="">Your email</label>-->
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="phone" placeholder="{{trans('phone')}}" required class="form-control">
                                            <!--                                            <label for="subject" class="">Subject</label>-->
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="content" rows="2" required placeholder="{{trans("content_message")}}" class="form-control md-textarea"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->
                                <div class="text-center text-md-left">
                                    <div class="get-more-info btn-send-contact">
                                        <button type="submit" class="btn btn-primary">{{trans('send')}}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-3 info-contact">
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <img src="{{asset('/frontend/images/icon_add.png')}}" alt="">
                                </div>
                                <div class="col-xs-9 col-md-9 contact-info">
                                    <p>{{trans('contact_address')}}</p>
                                    {{$setting["address_".$lang]}}
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-xs-3 col-md-3">
                                    <img src="{{asset('/frontend/images/icon_email.png')}}" alt="">
                                </div>
                                <div class="col-xs-9 col-md-9 contact-info">
                                    <p>{{trans('email_us')}}</p>
                                    {{$setting["email"]}}
                                </div>
                            </div>
{{--                            <ul class="list-unstyled mb-0">--}}
{{--                                <li><i class="fa fa-map-marker fa-2x"></i>--}}
{{--                                    <p>{{$setting["address_".$lang]}}</p>--}}
{{--                                </li>--}}

{{--                                <li><i class="fa fa-phone mt-4 fa-2x"></i>--}}
{{--                                    <p>{{$setting["phone"]}}</p>--}}
{{--                                </li>--}}

{{--                                <li><i class="fa fa-envelope mt-4 fa-2x"></i>--}}
{{--                                    <p>{{$setting["email"]}}</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                        <!--Grid column-->

                    </div>

                </section>

            </div>
        </div>
    </div>

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
                            <!--                            <div class="tatsu-top">-->
                            <!--                                <p class="title">Get In Touch</p>-->
                            <!--                            </div>-->
                            <!--                            <div class="tatsu-bottom">-->
                            <!--                                <p>Whatever your aquaculture needs, we are here to help.</p>-->
                            <!--                                <div class="btn-contact">-->
                            <!--                                    <a href="">Contact us</a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
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
@endsection
