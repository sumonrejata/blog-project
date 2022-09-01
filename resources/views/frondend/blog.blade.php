<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glaxdu - Education Bootstrap 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS ============================== -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frondend') }}/assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frondend') }}/assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frondend') }}/assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frondend') }}/assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="{{ asset('frondend') }}/assets/js/vendor/modernizr-3.11.7.min.js"></script>
</head>

<body>
    @include('frondend.pages.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-5.jpg);">
            <div class="container">
                <h2>Blog Grid</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Grid</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="event-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-all-wrap mr-40">
                        <div class="row">
                            @foreach ($post_list as $post)
                                
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-blog mb-30">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="{{ asset($post->image) }}" alt=""></a>
                                    </div>
                                    <div class="blog-content-wrap">
                                        <span>Education</span>
                                        <div class="blog-content">
                                            <h4><a href="blog-details.html">{{ $post->title }}</a></h4>
                                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i>Apparel</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i> 10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog-date">
                                            <a href="#"><i class="fa fa-calendar-o"></i> June, 24th 2017</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $post_list->links() }}
                            <div class="d-flex justify-content-center">
                                {!! $post_list->links() !!}
                            </div>
                        </div>
                        
                        <div class="pro-pagination-style text-center mt-25">
                            <ul>
                                <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-style">
                        <div class="sidebar-search mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Search</h4>
                            </div>
                            <form>
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-about mb-40">
                            <div class="sidebar-title mb-15">
                                <h4>About Us</h4>
                            </div>
                            <p>quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolors eos qui ratione voluptatem sad.</p>
                            <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                            <div class="sidebar-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-post mb-35">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="recent-post-wrap">
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-category mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Course Category</h4>
                            </div>
                            <div class="category-list">
                                <ul>
                                    <li><a href="#">MBA <span>04</span></a></li>
                                    <li><a href="#">Graduate <span>08</span></a></li>
                                    <li><a href="#">Under Graduate <span>04</span></a></li>
                                    <li><a href="#">BBA <span>06</span></a></li>
                                    <li><a href="#">Engineering <span>04</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-course-wrap mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Courses</h4>
                            </div>
                            <div class="sidebar-recent-course">
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-tag-wrap">
                            <div class="sidebar-title mb-40">
                                <h4>Tag</h4>
                            </div>
                            <div class="sidebar-tag">
                                <ul>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Loreipsum</a></li>
                                    <li><a href="#">Dolar</a></li>
                                    <li><a href="#">Site ament dollar</a></li>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Dummy Text</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('frondend.pages.footer')
<!-- JS
============================================ -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('frondend') }}/assets/js/vendor/jquery-v2.2.4.min.js"></script>
<!-- Popper JS -->
<script src="{{ asset('frondend') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frondend') }}/assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{ asset('frondend') }}/assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="{{ asset('frondend') }}/assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{ asset('frondend') }}/assets/js/main.js"></script>

</body>
</html>