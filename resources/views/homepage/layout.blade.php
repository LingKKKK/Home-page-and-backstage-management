<!DOCTYPE html>
<html lang="en">
<head>
    <title>RoboCom青少年挑战赛首页</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <script src="../assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
</head>
<body>
    <div class="top">
        <div class="inner">
            <div class="logo">
                <img src="assets/img/common/logo.png">
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="/">首页</a>
                </li>
                <li>
                    <a href="/eventInformation#trends">赛事信息</a>
                    <ul class="two-level" style="z-index: 999;">
                        <li><a href="/eventInformation#trends">赛事动态</a></li>
                        <li><a href="/eventInformation#intro">赛事介绍</a></li>
                        <li><a href="/eventInformation#about">赛事相关</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/match#signup">参赛报名</a>
                    <ul class="two-level" style="z-index: 999;">
                        <li><a href="/match#signup">参赛报名</a></li>
                        <li><a href="/match#notice">公示公告</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">水平测试</a>
                </li>
                <li>
                    <a href="#">资源下载</a>
                </li>
                <li>
                    <a href="#">视频资源</a>
                </li>
                <li>
                    <a href="#">关于我们</a>
                    <ul class="two-level" style="z-index: 999;">
                        <li><a>品牌介绍</a></li>
                        <li><a>联系我们</a></li>
                    </ul>
                </li>
            </ul>
            <div class="user-dialog">
                <div class="noLogin">
                    <a id="register" href="#">注册</a><i>  /  </i><a id="login" href="#">登录</a>
                </div>
                <div class="login"></div>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="footer">
        <div class="inner">
            <div class="link">
                <ul>
                    <li><a href="index.html">网站首页</a></li>
                    <li><a href="http://ss.robocom.com.cn" target="_blank">参赛报名</a></li>
                    <li><a href="Event-information.html">赛事信息</a></li>
                    <li><a href="Beauty-live.html">赛事直播</a></li>
                    <li><a href="Prepare-for-registration.html">备战资源</a></li>
                </ul>
            </div>
            <div id="reldescript" style="text-align: center;">
                <span>Powered by RoboCom 国际公开赛组委会  © 2002-2020</span><br>
                <span>技术支持：北京搜获科技有限公司</span><br>
                <span>开发运营：通服(武汉)数字工程有限公司</span><br>
                <span>CopyRight@北京搜获科技有限公司</span>
            </div>
            <div class="code">
                <img src="assets/img/common/qrcode.png">
            </div>
        </div>
    </div>
    <script>
        $(function(){
            var oNav = $('.nav >li');
            oNav.each(function() {
                $(this).hover(function() {
                    oNav.removeClass('active')
                    $(this).addClass('active')
                }, function() {
                    oNav.removeClass('active')
                });
            })
        })
    </script>
</body>
</html>
