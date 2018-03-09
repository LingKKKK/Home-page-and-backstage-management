<!DOCTYPE html>
<html lang="en">
<head>
    <title>RoboCom青少年挑战赛首页</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <script src="/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/addfont.css">
</head>
<body>
    <div class="top">
        <div class="inner">
            <div class="logo">
                <img src="/assets/img/common/logo.jpeg">
            </div>
            <div class="search">
                <img src="/assets/img/common/search.png">
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="/">首页</a>
                </li>
                <li>
                    <a href="/competition">关于竞赛</a>
                </li>
                <li>
                    <a href="/event">比赛项目</a>
                </li>
                <li>
                    <a href="/doc">参赛报名</a>
                </li>
                <li>
                    <a href="/video">精彩回顾</a>
                </li>
                <li>
                    <a href="#">水平测试</a>
                </li>
            </ul>
            <div class="user-dialog">
                <span class="change">中文 / EN</span>
                <div class="noLogin">
                    <a id="register" href="#">
                    <img src="/assets/img/common/register.png">
                    </a>
                    <a id="login" href="#">
                    <img src="/assets/img/common/login.png">
                    </a>
                </div>
                <div class="login">
                    <a id="userInfo">
                        <i>您好, 用户名</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="totop">
        <img src="/assets/img/common/totio.png">
    </div>
    <div class="footer">
        <div class="top">
            <div class="inner">
                <p class="sp1">Conract Us</p>
                <span class="sp2">+86-0521-66666666 66666666</span>
                <span class="sp3">+86-0521-66666666</span>
                <span class="sp4">bulabula@ohmalloy.com</span>
                <span class="sp5">No.1111,Youyzttttzzz  troad,Baoshan,Beijing 201900</span>
            </div>
        </div>

        <div class="bottom">
            <div class="inner">
                <span class="sp1">Powered by RoboCom 国际公开赛组委会 © 2002-2020</span>
                <div class="lo">
                    <img src="/assets/img/common/contant.png">
                </div>
                <div class="code">
                    <img src="/assets/img/common/qrcode.png">
                </div>
            </div>
        </div>
        <!-- <div class="inner">
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
                <img src="/assets/img/common/qrcode.png">
            </div>
        </div> -->
    </div>
    <script>
        $(function(){
            // var oNav = $('.nav >li');
            // oNav.each(function() {
            //     $(this).hover(function() {
            //         oNav.removeClass('active')
            //         $(this).addClass('active')
            //     }, function() {
            //         oNav.removeClass('active')
            //     });
            // })
            $(window).scroll(function() {
                if ($(window).scrollTop() >= 100) {
                    $('.totop').fadeIn(300);
                } else {
                    $('.totop').fadeOut(300);
                }
            });
            $('.totop').click(function() {
                $('html,body').animate({
                    scrollTop: '0px'
                }, 1000);
            });
        })
    </script>
    <script type="text/javascript" src='/assets/js/script_index.js'></script>
</body>
</html>
