<?php
$setting = \App\Models\Setting::first();
$lang = \Session::get('website_language');
$menus = \App\Models\Menu::where('parent_id', 0)->orderBy('order', 'asc')->get();
?>;
<div class="header" id="">
    <div class="header-top tatsu-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-7 col-md-6">
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:abc@gmail.com">info@bloom-aqua.com</a></p>
                </div>
                <div class="col-md-6">
                    <p class="text-right">
                        <a href="/change-language/vi"><img src="{{asset('storage/public/image/vn.png')}}" width="25px" alt=""></a>
                        <a href="/change-language/en"><img src="{{asset('storage/public/image/en.png')}}" width="25px" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav tatsu-header">
        <div class="container">
            <div class="row tatsu-header-row tatsu-wrap">
                <div class="col-md-3 col-xs-6">
                    <a href="{{url('')}}"><img src="{{$setting->logo}}" alt=""></a>
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
                                            @if($subMenu->count() > 0)<span class="toogle-icon-about"><i class="fa fa-angle-down"></i></span>@endif
                                        </a>
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
                    <ul class="navi visible-md visible-lg">
                        @foreach($menus as $menu)
                            <?php
                                $subMenu = \App\Models\Menu::where('parent_id', $menu->id)->get();
                            ?>
                        <li>
                            <a href="{{$menu['slug']}}">{{$menu['name_'.$lang]}} @if($subMenu->count() > 0)<span><i class="fa fa-angle-down"></i></span> @endif()</a>
                            @if($subMenu->count() > 0)
                                <ul class="vk-menu__child gt">
                                    <span class="tatsu-header-pointer"></span>
                                    @foreach($subMenu as $item)
                                        <li><a href="{{$item->slug}}">{{$item['name_'.$lang]}}</a></li>
                                    @endforeach

                                </ul>
                            @endif
                        </li>
                        @endforeach
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
                    </ul>
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
