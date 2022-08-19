<aside class="adminpopular-sidebar">

    <!--logo start -->
    <div class="adminpopular-logo-box">
        <a href="index-2.html" class="adminpopular-logo"><i class="fa fa-home"></i> AdminPopular</a>
    </div>
    <!-- Logo end  -->

    <div class="sidebar-user">
        <img class="sidebar-user-avatar" src="{{ asset('backend') }}/assets/images/pic.jpg" alt="User Image">
        <div>
            <p class="sidebar-user-name">John Doe</p>
            <p class="sidebar-user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="adminpopular-menu">

        <li class="treeview">
            <a class="nav-item active" href="#" data-toggle="treeview">
                <i class="nav-icon fa fa-home"></i>
                <span class="nav-label">Dashboard</span>
                <i class="treeview-icon fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="index-2.html">Default</a></li>
                <li><a class="treeview-item" href="index-light.html">Dashboard Light</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="nav-item active" href="#" data-toggle="treeview">
                <i class="nav-icon fa fa-home"></i>
                <span class="nav-label">Student</span>
                <i class="treeview-icon fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('student') }}">All Student</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="nav-item active" href="#" data-toggle="treeview">
                <i class="nav-icon fa fa-home"></i>
                <span class="nav-label">Home Page</span>
                <i class="treeview-icon fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allourcourses') }}">All Courses</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allachivement') }}">Achivement</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allteteacher') }}">Teacher</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allevent') }}">Event</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allchoose') }}">Choose</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allabout') }}">About Us</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('alltestimonila') }}">Testimonial</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="nav-item active" href="#" data-toggle="treeview">
                <i class="nav-icon fa fa-home"></i>
                <span class="nav-label">Post</span>
                <i class="treeview-icon fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createpost') }}">Add New Post</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allpost') }}">All Posts</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createcategory') }}">Add New Category</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('allcategory') }}">All Category</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="nav-item active" href="#" data-toggle="treeview">
                <i class="nav-icon fa fa-home"></i>
                <span class="nav-label">Footer</span>
                <i class="treeview-icon fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createpost') }}">Footer About</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createpost') }}">QUICK LINK</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createpost') }}">COURSES</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createpost') }}">GALLERY</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('createpost') }}">News Latter</a></li>
            </ul>

        </li>

    </ul>
</aside>