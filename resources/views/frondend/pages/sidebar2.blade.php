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
                @foreach ($latest_posts as $latest_post)
                    
                
                <div class="single-recent-post">
                    <div class="recent-post-img">
                        <a href="#"><img src="{{ asset($latest_post->image) }}" alt=""></a>
                    </div>
                    <div class="recent-post-content">
                        <h5><a href="#">{{ $latest_post->title }}</a></h5>
                        <span>Blog Category</span>
                        <p>Datat non proident qui offici.hafw adec qart.</p>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
        <div class="sidebar-category mb-40">
            <div class="sidebar-title mb-40">
                <h4>Course Category</h4>
            </div>
            <div class="category-list">
                <ul>
                    @foreach ($category as $cat)
                    <li><a href="#">{{ $cat->category_name }} <span>{{ $cat->posts_count }}</span></a></li> 
                    @endforeach
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