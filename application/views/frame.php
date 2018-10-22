<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title></title>
    <meta content="Bootsrap based theme" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="/static/plugins/PIE.js"></script>
    <![endif]-->
    <link href="/static/img/favicon.ico" rel="shortcut icon">
    <link href="/static/img/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="/static/img/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="/static/img/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="/static/img/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="/static/stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/static/stylesheets/responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/static/stylesheets/font-awesome-all.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/static/stylesheets/fancybox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/static/stylesheets/theme.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/static/stylesheets/fonts.css" media="screen" rel="stylesheet" type="text/css" />

    <script src="/static/js/board_comment.js"></script>
    <script src="/static/js/board_get_comment.js"></script>
    <script src="/static/js/ajax.js"></script>
    <script src="/static/plugins/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="/static/plugins/bootstrap.js" type="text/javascript"></script>
    <script src="/static/plugins/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="/static/plugins/jquery.tweet.js" type="text/javascript"></script>
    <script src="/static/plugins/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="/static/plugins/jquery.fancybox-media.js" type="text/javascript"></script>
    <script src="/static/plugins/script.js" type="text/javascript"></script>
    <script src="https://ssl.google-analytics.com/ga.js" type="text/javascript"></script>;
    <?=$ADD_SCRIPT;?>


    <!--
    <script type="text/javascript">
        if (typeof gaJsHost == 'undefined') {
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    -->
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("#########");
            pageTracker._trackPageview();
        } catch(err) {}
    </script>




</head>
<body>
<div class="wrapper">
    <div class="nav-collapse collapse" align="right">
            <?php
            if ( @$this->session->userdata('is_login') == true) {
                ?>
                <?php echo $this->session->userdata('user_id');?> 님 환영합니다. &nbsp;&nbsp;
                <button type="button" class="btn btn-mini btn-primary" id="btn_logout">로그아웃</button>
                <button type="button" class="btn btn-mini btn-info" id="btn_mypage">마이페이지</button>

                <?php
            } else {
                ?>
                <button type="button" class="btn btn-mini btn-link" id="btn_login2">로그인</button>
                <button type="button" class="btn btn-mini btn-link" id="btn_join2">회원가입</button>
                <?php
            }
            ?>
    </div>
    <!-- Page Header -->
    <header id="masthead">
        <nav class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <h1 class="brand">
                        <a href="/main">
                            Jeongwoo<span class="light">.Nam</span></a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="">
                                <a href="/home">Home</a>
                            </li>
                            <!--<li class="dropdown">
                                <a href="/aboutus">회사소개</a>
                            </li>
                            <li class="dropdown">
                                <a href="/product">제품소개</a>
                            </li>-->
                            <li class="dropdown">
                                <a href="/board">게시판</a>
                            <!--</li>
                            <li class=""><a href="contact.html">Contact</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script>
        $('#btn_login2').on('click', function() {
            window.location.href="/board/memberlogin/"
        });

        $('#btn_logout').on('click', function() {
            window.location.href="/auth_ajax/logout/";
        });

        $('#btn_join2').on('click', function() {
            window.location.href="/board/memberjoin/";
        });
    </script>
    <!--    <!-- Main Content -->
    <!--    <div id="content" role="main">-->
    <!--        <!-- Promo Section -->
    <!--        <section class="section section-alt">-->
    <!--            <div class="row-fluid">-->
    <!--                <div class="super-hero-unit">-->
    <!--                    <figure>-->
    <!--                        <img alt="some image" src="images/assets/landscapes/landscape-5-1250x300.jpg">-->
    <!--                        <figcaption class="flex-caption">-->
    <!--                            <h1 class="super animated fadeinup delayed">-->
    <!--                                Sidebar-->
    <!--                                <span class="lighter">-->
    <!--                    &amp;-->
    <!--                  </span>-->
    <!--                                Left-->
    <!--                            </h1>-->
    <!--                        </figcaption>-->
    <!--                    </figure>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!--        <!-- Blog -->
    <!--        <section class="section section-padded">-->
    <!--            <div class="container-fluid">-->
    <!--                <div class="row-fluid">-->
    <!--                    <aside class="span3 sidebar">-->
    <!--                        <div class="sidebar-widget widget_search">-->
    <!--                            <form>-->
    <!--                                <div class="input-append row-fluid">-->
    <!--                                    <input class="span12" placeholder="search" type="text">-->
    <!--                                    <i class="icon-search"></i>-->
    <!--                                    <button class="btn hide" type="submit">-->
    <!--                                        search-->
    <!--                                    </button>-->
    <!--                                </div>-->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                        <div class="sidebar-widget widget_categories">-->
    <!--                            <h3 class="sidebar-header">Categories</h3>-->
    <!--                            <ul>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            Company-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            News-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            Services-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            Web Design-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                        <div class="sidebar-widget widget_tag_cloud">-->
    <!--                            <h3 class="sidebar-header">Popular Tags</h3>-->
    <!--                            <ul>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Mountains</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Winter</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Sports</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Boating</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Recreation</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Tourism</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Nature</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <a href="post.html">-->
    <!--                                        <span>Alps</span>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                        <div class="sidebar-widget widget_recent_entries">-->
    <!--                            <h3 class="sidebar-header">Recent posts</h3>-->
    <!--                            <ul>-->
    <!--                                <li>-->
    <!--                                    <div class="row-fluid">-->
    <!--                                        <div class="span3">-->
    <!--                                            <div class="round-box box-mini">-->
    <!--                                                <a class="box-inner" href="post.html">-->
    <!--                                                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-1-300x300.jpg">-->
    <!--                                                </a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="span9">-->
    <!--                                            <h4>-->
    <!--                                                <a href="post.html">-->
    <!--                                                    Nunc vehicula dapibus-->
    <!--                                                </a>-->
    <!--                                            </h4>-->
    <!--                                            <h5 class="light">-->
    <!--                                                12 Feb 2013-->
    <!--                                            </h5>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <div class="row-fluid">-->
    <!--                                        <div class="span3">-->
    <!--                                            <div class="round-box box-mini">-->
    <!--                                                <a class="box-inner" href="post.html">-->
    <!--                                                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-300x300.jpg">-->
    <!--                                                </a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="span9">-->
    <!--                                            <h4>-->
    <!--                                                <a href="post.html">-->
    <!--                                                    Fusce a metus eu diam-->
    <!--                                                </a>-->
    <!--                                            </h4>-->
    <!--                                            <h5 class="light">-->
    <!--                                                21 Jan 2013-->
    <!--                                            </h5>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <div class="row-fluid">-->
    <!--                                        <div class="span3">-->
    <!--                                            <div class="round-box box-mini">-->
    <!--                                                <a class="box-inner" href="post.html">-->
    <!--                                                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-3-300x300.jpg">-->
    <!--                                                </a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="span9">-->
    <!--                                            <h4>-->
    <!--                                                <a href="post.html">-->
    <!--                                                    Quisque lacus augue-->
    <!--                                                </a>-->
    <!--                                            </h4>-->
    <!--                                            <h5 class="light">-->
    <!--                                                13 dec 2012-->
    <!--                                            </h5>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                        <div class="sidebar-widget widget_archive">-->
    <!--                            <h3 class="sidebar-header">Archive</h3>-->
    <!--                            <ul>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            January-->
    <!--                                            <span class="light">-->
    <!--                          (12)-->
    <!--                        </span>-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            December-->
    <!--                                            <span class="light">-->
    <!--                          (7)-->
    <!--                        </span>-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            October-->
    <!--                                            <span class="light">-->
    <!--                          (4)-->
    <!--                        </span>-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            September-->
    <!--                                            <span class="light">-->
    <!--                          (9)-->
    <!--                        </span>-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                                <li>-->
    <!--                                    <h4>-->
    <!--                                        <a href="#">-->
    <!--                                            August-->
    <!--                                            <span class="light">-->
    <!--                          (13)-->
    <!--                        </span>-->
    <!--                                        </a>-->
    <!--                                    </h4>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                        <div class="sidebar-widget widget_twitter">-->
    <!--                            <h3 class="sidebar-header">Twitter feed</h3>-->
    <!--                            <div class="twitter-feed"></div>-->
    <!--                        </div>-->
    <!--                    </aside>-->
    <!--                    <div class="span9">-->
    <!--                        <article>-->
    <!--                            <h2 class="small-screen-center compact">-->
    <!--                                We Create The Most Responsive Sites You Have Ever Seen-->
    <!--                            </h2>-->
    <!--                            <p class="lead">-->
    <!--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
    <!--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
    <!--                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
    <!--                                consequat.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit turpis quis nisl rhoncus ac venenatis odio tempor. Maecenas adipiscing nisl sit amet lectus laoreet interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
    <!--                            </p>-->
    <!--                            <h3>-->
    <!--                                Built With Love &amp; Bootstrap!-->
    <!--                            </h3>-->
    <!--                            <p>-->
    <!--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
    <!--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
    <!--                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
    <!--                                consequat.-->
    <!--                            </p>-->
    <!--                            <figure>-->
    <!--                                <img alt="some image" src="images/assets/landscapes/landscape-6-900x400.jpg">-->
    <!--                            </figure>-->
    <!--                            <blockquote>-->
    <!--                                <p>-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
    <!--                                    tempor incididunt ut labore et dolore magna aliqua.-->
    <!--                                </p>-->
    <!--                                <small>-->
    <!--                                    Sam Doe-->
    <!--                                    <cite title="Source Title">biz inc</cite>-->
    <!--                                </small>-->
    <!--                            </blockquote>-->
    <!--                            <p>-->
    <!--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
    <!--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
    <!--                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
    <!--                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse-->
    <!--                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non-->
    <!--                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
    <!--                            </p>-->
    <!--                            <hr>-->
    <!--                            <h3 class="small-screen-center">-->
    <!--                                Are you in need of columns?-->
    <!--                            </h3>-->
    <!--                            <div class="row-fluid">-->
    <!--                                <div class="span4">-->
    <!--                                    <p>-->
    <!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit turpis quis nisl rhoncus ac venenatis odio tempor. Maecenas adipiscing nisl sit amet lectus laoreet interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                                <div class="span4">-->
    <!--                                    <p>-->
    <!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit turpis quis nisl rhoncus ac venenatis odio tempor. Maecenas adipiscing nisl sit amet lectus laoreet interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                                <div class="span4">-->
    <!--                                    <p>-->
    <!--                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit turpis quis nisl rhoncus ac venenatis odio tempor. Maecenas adipiscing nisl sit amet lectus laoreet interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <hr>-->
    <!--                            <h3 class="small-screen-center">-->
    <!--                                Are you in need of images too?-->
    <!--                            </h3>-->
    <!--                            <figure class="pull-right margin-left">-->
    <!--                                <img alt="some image" class="img-polaroid" src="images/assets/landscapes/landscape-5-400x400.jpg">-->
    <!--                            </figure>-->
    <!--                            <p>-->
    <!--                                Duis aute irure dolor in reprehenderit in voluptate velit esse-->
    <!--                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non-->
    <!--                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
    <!--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
    <!--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Sed in neque accumsan sapien viverra suscipit at eget mauris. Integer ornare pharetra ultricies. Fusce hendrerit, tellus sagittis placerat ornare, libero felis mollis diam, a ultricies arcu quam porttitor velit. Praesent pharetra neque id erat ultricies at facilisis felis vehicula. Proin aliquam molestie pharetra. Ut in porta lacus. Praesent aliquet pharetra elit, quis suscipit risus vulputate vel.-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                Nulla vitae faucibus eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi scelerisque adipiscing augue in fringilla.-->
    <!--                            </p>-->
    <!--                            <hr>-->
    <!--                            <h3 class="small-screen-center">-->
    <!--                                Fancy a list?-->
    <!--                            </h3>-->
    <!--                            <p>-->
    <!--                                Sed in neque accumsan sapien viverra suscipit at eget mauris. Integer ornare pharetra ultricies. Fusce hendrerit, tellus sagittis placerat ornare, libero felis mollis diam, a ultricies arcu quam porttitor velit. Praesent pharetra neque id erat ultricies at facilisis felis vehicula. Proin aliquam molestie pharetra. Ut in porta lacus. Praesent aliquet pharetra elit, quis suscipit risus vulputate vel.-->
    <!--                            </p>-->
    <!--                            <br>-->
    <!--                            <div class="row-fluid">-->
    <!--                                <div class="span8">-->
    <!--                                    <p class="lead">-->
    <!--                                        Sed in neque accumsan sapien viverra suscipit at eget mauris. Integer ornare pharetra ultricies. Fusce hendrerit, tellus sagittis placerat ornare, libero felis mollis diam, a ultricies arcu quam porttitor velit.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                                <div class="span4">-->
    <!--                                    <ul class="icons list-compact">-->
    <!--                                        <li>-->
    <!--                                            <i class="icon-ok green"></i>-->
    <!--                                            Libero felis mollis-->
    <!--                                        </li>-->
    <!--                                        <li>-->
    <!--                                            <i class="icon-ok green"></i>-->
    <!--                                            Praesent aliquet-->
    <!--                                        </li>-->
    <!--                                        <li>-->
    <!--                                            <i class="icon-ok green"></i>-->
    <!--                                            Risus vulputate-->
    <!--                                        </li>-->
    <!--                                        <li>-->
    <!--                                            <i class="icon-ok green"></i>-->
    <!--                                            Ut enim ad minim-->
    <!--                                        </li>-->
    <!--                                    </ul>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <p>-->
    <!--                                Praesent nunc augue, faucibus tincidunt lobortis bibendum, dapibus et mi. Sed vel elit nulla, id porta nulla. Donec vulputate purus dui, blandit placerat nulla. Ut id nunc non nulla eleifend mattis. Integer ligula arcu, pellentesque vitae cursus ut, volutpat commodo lectus. Aliquam porta cursus leo. Etiam justo eros, gravida quis molestie sit amet, egestas vel nunc. Nulla tempor urna non augue tincidunt iaculis.-->
    <!--                            </p>-->
    <!--                        </article>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!--        <!-- Related posts News -->
    <!--        <section class="section section-alt section-padded">-->
    <!--            <div class="container-fluid">-->
    <!--                <div class="section-header">-->
    <!--                    <h1>-->
    <!--                        Related-->
    <!--                        <small class="light">posts?</small>-->
    <!--                    </h1>-->
    <!--                </div>-->
    <!--                <ul class="unstyled row-fluid">-->
    <!--                    <li class="span4">-->
    <!--                        <div class="row-fluid">-->
    <!--                            <div class="span4">-->
    <!--                                <div class="round-box box-small">-->
    <!--                                    <a class="box-inner" href="#">-->
    <!--                                        <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-3-300x300.jpg">-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                                <h5 class="text-center light">-->
    <!--                                    12 dec 2012-->
    <!--                                </h5>-->
    <!--                            </div>-->
    <!--                            <div class="span8">-->
    <!--                                <h3>-->
    <!--                                    <a href="#">-->
    <!--                                        A normal post-->
    <!--                                    </a>-->
    <!--                                </h3>-->
    <!--                                <p>-->
    <!--                                    Curabitur euismod ultrices purus eget vehicula. Cras interdum est sed dui congue imperdiet. Nulla nisi justo, lacinia eget scelerisque et, porttitor in ante.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li class="span4">-->
    <!--                        <div class="row-fluid">-->
    <!--                            <div class="span4">-->
    <!--                                <div class="round-box box-small">-->
    <!--                                    <a class="box-inner" href="#">-->
    <!--                                        <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-1-300x300.jpg">-->
    <!--                                        <i class="icon-link"></i>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                                <h5 class="text-center light">-->
    <!--                                    10 dec 2012-->
    <!--                                </h5>-->
    <!--                            </div>-->
    <!--                            <div class="span8">-->
    <!--                                <h3>-->
    <!--                                    <a href="#">-->
    <!--                                        Link post-->
    <!--                                    </a>-->
    <!--                                </h3>-->
    <!--                                <p>-->
    <!--                                    Donec viverra pulvinar ante, a placerat risus tincidunt vitae. Donec felis dolor, malesuada vel euismod sed, eleifend id nibh. Fusce accumsan bibendum ornare.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li class="span4">-->
    <!--                        <div class="row-fluid">-->
    <!--                            <div class="span4">-->
    <!--                                <div class="round-box box-small">-->
    <!--                                    <a class="box-inner" href="#">-->
    <!--                                        <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-e-300x300.jpg">-->
    <!--                                        <i class="icon-play"></i>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                                <h5 class="text-center light">-->
    <!--                                    12 Nov 2012-->
    <!--                                </h5>-->
    <!--                            </div>-->
    <!--                            <div class="span8">-->
    <!--                                <h3>-->
    <!--                                    <a href="#">-->
    <!--                                        Video post-->
    <!--                                    </a>-->
    <!--                                </h3>-->
    <!--                                <p>-->
    <!--                                    Phasellus condimentum dapibus ligula vel dapibus. Praesent dictum aliquet pharetra. Vestibulum lorem sapien, elementum vitae lobortis et, sagittis quis magna.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--        </section>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Page Footer -->
    <?php echo $CONTENT; ?>

    <footer id="footer" role="contentinfo">
        <div class="wrapper wrapper-transparent">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6 small-screen-center">
                        <h3>
                                TEST
                            <span class="light">
                                PAGE
                            </span>
                        </h3>
                        <p>
                            010-1234-5678  |  replaysoccer@naver.com
                            <br>
                            Digital St 777 My Home, Korea.
                            <br>
                            &copy; Copyright 2018
                        </p>
                    </div>
                    <div class="span6">
                        <ul class="unstyled inline text-right small-screen-center big social-icons">
                            <li>
                                <a data-iconcolor="#00a0d1" href="#">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-iconcolor="#3b5998" href="#">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-iconcolor="#910101" href="#">
                                    <i class="icon-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
