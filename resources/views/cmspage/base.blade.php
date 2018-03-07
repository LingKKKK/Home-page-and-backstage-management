<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">
  <title>后台管理系统</title>
  <!--common-->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">
  <link href="assets/css/base_cms.css" rel="stylesheet">


</head>

<body class="sticky-header">

<section>
    <div class="left-side sticky-left-side">
        <div class="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="assets/img/logo_icon.png" alt=""></a>
        </div>

        <div class="left-side-inner">
            <div class="visible-xs hidden-sm hidden-md hidden-lg"">
                <div class="media logged-user">
                    <img alt="" src="assets/img/logo-b.png" class="media-object" style="text-align: center; display: block; width: 50px;">
                    <!-- <div class="media-body">
                        <h4><a href="#">管理员</a></h4>
                        <span>"正在为您载入..."</span>
                    </div> -->
                </div>
                <h5 class="left-nav-title">管理操作</h5>
                <ul class="nav nav-pills nav-stacked custom-nav" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                  <li><a href="#"><i class="fa fa-user"></i> <span>个人中心</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>设置</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>退出</span></a></li>
                </ul>
            </div>

            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="item_click" data-id="index" id="index"><a><i class="fa fa-home"></i> <span>主页</span></a></li>
                <li class="menu-list"><a><i class="fa fa-th-list"></i> <span> 文档</span></a>
                    <ul class="sub-menu-list">
                        <li class="item_click" data-id="documentManage" id="documentManage"><a> 文档管理</a></li>
                        <li class="item_click" data-id="documentUpload" id="documentUpload"><a> 文档上传</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a><i class="fa fa-file-text"></i> <span> 新闻</span></a>
                    <ul class="sub-menu-list">
                        <li class="item_click" data-id="newsManage" id="newsManage"><a> 新闻管理</a></li>
                        <li class="item_click" data-id="newsUpload" id="newsUpload"><a> 新闻发布</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a><i class="fa fa-picture-o"></i> <span> 精彩回顾</span></a>
                    <ul class="sub-menu-list">
                        <li class="item_click" data-id="pictureManage" id="pictureManage"><a> 图片管理</a></li>
                        <li class="item_click" data-id="pictureUpload" id="pictureUpload"><a> 图片上传</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a><i class="fa fa-youtube-play"></i> <span> 视频</span></a>
                    <ul class="sub-menu-list">
                        <li class="item_click" data-id="videoManage" id="videoManage"><a> 视频管理</a></li>
                        <li class="item_click" data-id="videoUpload" id="videoUpload"><a> 视频上传</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a><i class="fa fa-picture-o"></i> <span> 主页banner图</span></a>
                    <ul class="sub-menu-list">
                        <li class="item_click" data-id="bannerManage" id="bannerManage"><a> 图片管理</a></li>
                        <li class="item_click" data-id="bannerUpload" id="bannerUpload"><a> 图片上传</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a><i class="fa fa-rocket"></i> <span> 比赛项目</span></a>
                    <ul class="sub-menu-list">
                        <li class="item_click" data-id="eventManage" id="eventManage"><a> 大赛管理</a></li>
                        <li class="item_click" data-id="eventRelease" id="eventRelease"><a> 大赛发布</a></li>
                        <li class="item_click" data-id="competitionRelease" id="competitionRelease"><a> 赛项编辑</a></li>
                        <li class="item_click" data-id="introRelease" id="introRelease"><a> 子赛项详情页面编辑</a></li>
                    </ul>
                </li>

                <li class="item_click" data-id="setting"  id="setting"><a><i class="fa fa-cogs"></i> <span> 设置</span></a></li>
            </ul>

        </div>
    </div>

    <div class="main-content" >
        <div class="header-section">
            <a class="toggle-btn" style="display: block;"><i class="fa fa-bars"></i></a>
            <!-- 切换侧边栏的状态 -->
            <!-- 搜索栏!!!! -->
            <!-- <form class="searchform" action="" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form> -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/img/logo-b.png" alt="" />
                            管理员
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i> 个人中心</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> 退出</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="page-heading"></div>
        <div class="wrapper" id="cms_content"></div>
    </div>
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="/assets/js/jquery-1.10.2.min.js"></script>
<script src="/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>
<!--common scripts for all pages-->
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/scripts_cms.js"></script>
<script type="text/javascript">
    // console.log(calc(100% - 240px));
    $('.left-side.sticky-left-side').resize(function(){
        console.log($('footer').css('width'));
    });
</script>
</body>
</html>
