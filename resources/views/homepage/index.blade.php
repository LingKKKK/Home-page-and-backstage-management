@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/index.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                <li class="active">
                    <img src="assets/img/index/banner_1.jpg">
                </li>
                <li>
                    <img src="assets/img/index/banner_2.jpg">
                </li>
            </ul>
            <ul class="nav-img">
                <li class="active"></li>
                <li></li>
            </ul>
        </div>
        <div class="inner clearfix">
            <!-- 第一部分 -->
            <div class="t1 clearfix">
                <div class="title-img clearfix">
                    <div class="img1">
                        <img src="assets/img/index/title_1.png">
                    </div>
                    <div class="img2">
                        <img src="assets/img/index/title_2.png">
                    </div>
                </div>
                <div class="title-content clearfix">
                    <div class="title">
                        <span class="sp1">赛事动态</span>
                        <span class="sp2">Dynamic Events</span>
                        <a class="sp3">MORE></a>
                    </div>
                    <ul>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a><i>2018-02-08</i></li>
                    </ul>
                </div>
            </div>
            <!-- 第二部分 -->
            <div class="t2 clearfix">
                <div class="title-content-left title-content-item clearfix">
                    <div class="title">
                        <span class="sp1">资源下载</span>
                        <span class="sp2">Dynamic Events</span>
                    </div>
                    <ul>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                    </ul>
                </div>
                <div class="title-content-right title-content-item clearfix">
                    <div class="title">
                        <span class="sp1">赛事视频</span>
                        <span class="sp2">Dynamic Events</span>
                    </div>
                    <ul>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                        <li><a href="#">关于2017年世界机器人大赛补充通知</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $('.nav-img >li').each(function(index,el) {
                $(this).click(function(){
                    $('.nav-img >li').removeClass('active');
                    $(this).addClass('active');

                    $('.img >li').removeClass('active');
                    $('.img li').eq(index).addClass('active');
                })
            })
        })
    </script>
@endsection
