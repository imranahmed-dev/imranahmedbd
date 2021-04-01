<div id="sidebar" class="sidebar">

    <div data-scrollbar="true" data-height="100%">

        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="@if(!empty(Auth::user()->image)) {{asset( Auth::user()->image ) }} @else {{asset('defaults/avatar/avatar.png')}} @endif" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>{{Auth::user()->name}}
                        <small>Admin</small>
                    </div>
                </a>
            </li>

            <li>
                <ul class="nav nav-profile">
                    <li><a href="{{route('admin.profile.index')}}"><i class="fa fa-user-circle"></i>Profile</a></li>
                    <li><a href="{{route('admin.profile.ep')}}"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>


        <ul class="nav">
            <li class="nav-header">General</li>
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-user"></i>
                    <span>Admin</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-list"></i> Admin List</a></li>
                </ul>
            </li>
            
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i>
                    <span>Courses</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('course.create')}}"><i class="fa fa-plus-circle"></i> Add Course</a></li>
                    <li><a href="{{route('course.index')}}"><i class="fa fa-list"></i> Course List</a></li>
                </ul>
            </li>
            
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i>
                    <span>Portfolio</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('portfolio.create')}}"><i class="fa fa-plus-circle"></i> Add Portfolio</a></li>
                    <li><a href="{{route('portfolio.index')}}"><i class="fa fa-list"></i> Portfolio List</a></li>
                </ul>
            </li>
            
             <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i>
                    <span>Client Say</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('clientsay.create')}}"><i class="fa fa-plus-circle"></i> Add Client Say</a></li>
                    <li><a href="{{route('clientsay.index')}}"><i class="fa fa-list"></i> Client Say List</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-tags"></i>
                    <span>Blog Category</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('blogcategory.index')}}"><i class="fa fa-list"></i> Blog Category List</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i>
                    <span>Blog</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('blog.create')}}"><i class="fa fa-plus-circle"></i> Add Blog</a></li>
                    <li><a href="{{route('blog.index')}}"><i class="fa fa-list"></i> Blog List</a></li>
                </ul>
            </li>
            
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-circle"></i>
                    <span>Contact Message</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="fa fa-plus-circle"></i> Blank</a></li>
                </ul>
            </li>
            
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-circle"></i>
                    <span>Site Settings</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('setting.index')}}"><i class="fa fa-plus-circle"></i> Site Settings</a></li>
                </ul>
            </li>


            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

        </ul>

    </div>

</div>
<div class="sidebar-bg"></div>