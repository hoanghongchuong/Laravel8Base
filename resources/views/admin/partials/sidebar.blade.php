<aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Sidebar -->
    <div class="sidebar">
        @php
            $user = \auth()->user();
        @endphp
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{$user->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('menu.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Quản lý user
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/post?type=post" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Bài viết</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/post?type=expertise" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Chuyên môn</p>
                    </a>
                </li>
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Quản lý bài viết--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="/admin/categories?type=post" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Danh mục</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="/admin/post?type=post" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p> Bài viết</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="/admin/post?type=about" class="nav-link">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p> Về chúng tôi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/post?type=service" class="nav-link">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p> Dịch vụ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/post?type=equipment" class="nav-link">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p>Trang thiết bị</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/post?type=expertise" class="nav-link">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p> Chuyên môn</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.contact.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Quản lý liên hệ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Cài đặt
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
