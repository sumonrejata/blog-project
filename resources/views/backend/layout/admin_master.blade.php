<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta  -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="adminpopular" />
    <!-- Description -->
    <meta name="description" content="AdminPopular : Bootstrap 4 Responsive Admnin Template" />
    <!-- Favicon icon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/assets/images/favicon.png" />
    <!-- Page title -->
    <title>Adminpopular : Bootstrap 5 Responsive Admin Template</title>
    <!-- Mobile specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    <!-- Template assets CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/assets.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendors/summernote/css/summernote.min.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/dashboard.css" />
    @yield('style')
</head>

<body class="sidebar-mini">
    <div class="loader"></div>
    <!-- header start -->
    <header class="adminpopular-header">
        <div class="adminpopular-header-wrapper">

            <!--sidebar menu toggler start -->
            <div class="adminpopular-toggle-sidebar cp-wave-effect">
                <i class="ti-menu adminpopular-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->

            <div class="adminpopular-header-right adminpopular-with-seperator">
                <!-- header right menu start -->
                <ul class="adminpopular-header-navigation">
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-search-toggle"><i
                                class="fa fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-submenu-toggle">
                            <i class="fa fa-comments"></i>
                            <span class="button__badge">82</span>
                        </a>
                        <div class="adminpopular-header-submenu noti-menu">
                            <div class="adminpopular-notify-header">
                                <span class="adminpopular-notify-text-top">9 New</span>
                                <span class="adminpopular-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 02:14</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-yellow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Your order is placed</a> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 7 Min</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-red">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <span class="notification-text"> <span>Your item is shipped</span> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 2 May</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-green">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Sneha Jogi</a> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 14 July</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-primary">
                                            <i class="fa fa-file-word-o"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 15 Min</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-submenu-toggle">
                            <i class="fa fa-bell"></i>
                            <span class="button__badge">2</span>
                        </a>
                        <div class="adminpopular-header-submenu noti-menu">
                            <div class="adminpopular-notify-header">
                                <span class="adminpopular-notify-text-top">9 New</span>
                                <span class="adminpopular-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 02:14</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-yellow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Your order is placed</a> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 7 Min</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-red">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <span class="notification-text"> <span>Your item is shipped</span> sent you a
                                            message. </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 2 May</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-green">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                        <span class="notification-text"> <a href="#">Sneha Jogi</a> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 14 July</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-primary">
                                            <i class="fa fa-file-word-o"></i>
                                        </span>
                                        <span class="notification-text"> <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 15 Min</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="adminpopular-material-button adminpopular-submenu-toggle">
                            <span class="adminpopular-user-avatar"><img alt="" src="{{ asset('backend') }}/assets/images/pic.jpg" width="32"
                                    height="32" /></span>
                        </a>
                        <div class="adminpopular-header-submenu">
                            <ul>
                                <li><a href="page-user.html">My profile</a></li>
                                <li><a href="mailbox.html">Activity</a></li>
                                <li><a href="chat.html">Messages</a></li>
                                <li>
                                    <a href="page-login.html">Logout <i class="fa fa-sign-out"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="adminpopular-search-bar">
                <form class="adminpopular-search-form">
                    <div class="adminpopular-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..."
                            class="adminpopular-search-input" />
                        <button type="submit" name="search" class="adminpopular-search-submit"><i
                                class="ti-arrow-right"></i></button>
                    </div>
                    <span class="adminpopular-search-close adminpopular-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>
    <!-- header end -->
    
    <!-- Left sidebar menu start -->
    @include('backend/pages/sidebar')
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="adminpopular-wrapper">
            @yield('content')
    </main>


    <!-- Jquery javascript library -->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <!-- Bootstrap bundle javascript -->
    <script src="{{ asset('backend') }}/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scrollbar javascript -->
    <script src="{{ asset('backend') }}/assets/vendors/scroll/scrollbar.min.js"></script>
    <!-- Waypoints javascript -->
    <script src="{{ asset('backend') }}/assets/js/waypoints.min.js"></script>
    <!-- Chart javascript -->
    <script src="{{ asset('backend') }}/assets/js/chart.js"></script>
    <!-- Jquery counterup javascript -->
    <script src="{{ asset('backend') }}/assets/js/jquery.counterup.min.js"></script>
    <!-- Custom script -->
    <script src="{{ asset('backend') }}/assets/vendors/datatable/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendors/datatable/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/functions.js"></script>
    <script src="{{ asset('backend') }}/assets/js/admin.js"></script>
    <script src="{{ asset('backend') }}/assets/vendors/summernote/js/summernote-lite.min.js"></script>
    <script>
        $('#sampleTable').DataTable();
    </script>
    <script>
        var data = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56],
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86],
                },
            ],
        };
        var pdata = [
            {
                value: 300,
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: "Red",
            },
            {
                value: 50,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green",
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow",
            },
        ];

        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);

        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);

        var ctxr = $("#radarChartDemo").get(0).getContext("2d");
        var radarChart = new Chart(ctxr).Radar(data);

        var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
        var polarChart = new Chart(ctxpo).PolarArea(pdata);

        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);

        var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
        var doughnutChart = new Chart(ctxd).Doughnut(pdata);

        var ctxd = $("#chart-area").get(0).getContext("2d");
        var doughnutChart = new Chart(ctxd).PolarArea(pdata);

        // Summernote editor
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>


</body>
</html>