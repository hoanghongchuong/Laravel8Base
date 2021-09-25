<?php
$setting = \App\Models\Setting::first();
$lang = \Session::get('website_language');
$menus = \App\Models\Menu::where('parent_id', 0)->orderBy('order', 'asc')->get();
?>
<div class="menu-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <a href="{{url('')}}">
                    <img src="{{$setting->logo}}" alt="" class="img-logo">
                    {{--                        RasVN--}}
                </a>
            </div>
            <div class="col-md-8 col-xs-6">
                <ul>
                    <li>
                        <a href=""><img src="{{asset('frontend/images/facebook-icon.png')}}" alt="">{{$setting ? $setting->facebook : ''}}</a>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/images/youtube-icon.jpg')}}" style="width: 36px" alt="">{{$setting ? $setting->youtube : ''}}</a>
                    </li>
                    <li><a href=""><img src="{{asset('frontend/images/zalo-icon.png')}}" alt="">{{$setting ? $setting->zalo : ''}}</a></li>
                </ul>
                <p class="address"><a href="tel:Hotline: {{$setting['hotline']}}">Hotline: {{$setting['hotline']}}</a></p>
                <p class="text-right">
                    <a href="/change-language/vi"><img src="{{asset('frontend/images/vn.png')}}" width="25px" alt=""></a>
                    <a href="/change-language/en"><img src="{{asset('frontend/images/en.png')}}" width="25px" alt=""></a>
                    <a href="/change-language/es"><img src="{{asset('frontend/images/es.png')}}" width="25px" alt=""></a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="header" id="">
    <div class="header-top tatsu-header">
        <div class="container">
            <div class="row">
                <div class="vk-header__bot hidden-xs" id="navbar_top">
                    <div class="container">
                        <div class="vk-header__bot-content">
                            <div class="vk-header__menu">
                                <ul class="vk-menu__main">
                                    <li><a href="{{ url('') }}"><i class="_icon fa fa-home"></i></a></li>
                                    @foreach($menus as $menu)
                                        <?php
                                        $subMenu = \App\Models\Menu::where('parent_id', $menu->id)->get();
                                        ?>
                                        <li>
                                            <a href="{{$menu['slug']}}">{{$menu['name_'.$lang]}}</a>
                                            @if(count($subMenu) > 0)
                                                <ul class="vk-menu__child">
                                                    @foreach($subMenu as $child)
                                                        <li><a href="{{$child->slug}}">{{$child['name_'.$lang]}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="main-nav tatsu-header">
        <div class="container">
            <div class="row tatsu-header-row tatsu-wrap">
                <div class="col-md-3 col-xs-6 tac">
{{--                    <a href="{{url('')}}">--}}
{{--                        Trang chủ--}}
{{--                        <img src="{{$setting->logo}}" alt="" class="img-logo">--}}
{{--                        RasVN--}}
{{--                    </a>--}}
                </div>
                <div class="col-md-9 col-xs-6">
                    <div class="visible-xs menu-mobile">
                        <span onclick="openNav()"><i class="fa fa-bars"></i></span>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <ul>
                                    @foreach($menus as $menu)
                                        <?php
                                        $subMenu = \App\Models\Menu::where('parent_id', $menu->id)->get();
                                        ?>
                                    <li>
                                        <a href="{{$menu['slug']}}">{{$menu['name_'.$lang]}}

                                        </a>
                                        @if($subMenu->count() > 0)<span class="toogle-icon-about"><i class="fa fa-angle-down"></i></span>@endif
                                        @if($subMenu->count() > 0)
                                        <ul class="vk-menu__child-mobile" id="about-mobile">
                                            @foreach($subMenu as $item)
                                                <li><a href="{{$item->slug}}">{{$item['name_'.$lang]}}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
{{--                                    <li><a href="">Ras Technology</a></li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Services <span class="toogle-icon-service"><i class="fa fa-angle-down"></i></span></a>--}}
{{--                                        <ul class="vk-menu__child-mobile" id="service-mobile">--}}
{{--                                            <li><a href="#">Service serice</a></li>--}}
{{--                                            <li><a href="#">Service serice</a></li>--}}
{{--                                            <li><a href="#">Service serice</a></li>--}}
{{--                                            <li><a href="#">Service serice</a></li>--}}

{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Equipment</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}

{{--                                        <a href="#">Contact</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
{{--                    <ul class="navi visible-md visible-lg">--}}
{{--                        @foreach($menus as $menu)--}}
{{--                            <?php--}}
{{--                                $subMenu = \App\Models\Menu::where('parent_id', $menu->id)->get();--}}
{{--                            ?>--}}
{{--                        <li>--}}
{{--                            <a href="{{$menu['slug']}}">{{$menu['name_'.$lang]}} @if($subMenu->count() > 0)<span><i class="fa fa-angle-down"></i></span> @endif()</a>--}}
{{--                            @if($subMenu->count() > 0)--}}
{{--                                <ul class="vk-menu__child gt">--}}
{{--                                    <span class="tatsu-header-pointer"></span>--}}
{{--                                    @foreach($subMenu as $item)--}}
{{--                                        <li><a href="{{$item->slug}}">{{$item['name_'.$lang]}}</a></li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
{{--                            @endif--}}
{{--                        </li>--}}
{{--                        @endforeach--}}
{{--                        <li><a href="">Ras Technology</a></li>--}}
{{--                        <li>--}}
{{--                            <a href="">Services <span><i class="fa fa-angle-down"></i></span></a>--}}
{{--                            <ul class="vk-menu__child gt">--}}
{{--                                <span class="tatsu-header-pointer"></span>--}}
{{--                                <li><a href="#">Why Aquaculture</a></li>--}}
{{--                                <li><a href="#">Our expertise</a></li>--}}
{{--                                <li><a href="#">Our expertise</a></li>--}}
{{--                                <li><a href="#">Our expertise</a></li>--}}

{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="/trang-thiet-bi">Equipment</a></li>--}}
{{--                        <li><a href="/lien-he">Contact</a></li>--}}
{{--                    </ul>--}}
                </div>
                <script>
                    function openNav() {
                        document.getElementById("myNav").style.width = "90%";
                    }

                    function closeNav() {
                        document.getElementById("myNav").style.width = "0%";
                    }
                </script>
                <!--                    <div class="col-md-1"></div>-->
            </div>
        </div>
    </div>
</div>
