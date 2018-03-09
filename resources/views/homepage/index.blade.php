@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/index.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == 'index')
                            <li>
                                <img src="{{ $result->url or '' }}">
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
            <ul class="nav-img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == 'index')
                            <li></li>
                        @endif
                    @endforeach
                @endif
            </ul>
            <div class="model">
                <span class="sp1">青少年人工智能编程挑战赛</span>
                <span class="sp2">精彩回顾</span>
                <a class="sp3">了解详情</a>
            </div>
        </div>
        <div class="inner clearfix">
            <span class="event_intro">赛项介绍</span>
            <div class="event_img"></div>
            <span class="event_details">
                2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛2016年机器人大赛
            </span>
            <a class="show_more">
                <img src="/assets/img/common/more.png">
            </a>
        </div>
        <div class="toEnroll">
            <img src="/assets/img/index/toEnroll.png">
        </div>
        <div class="inner clearfix">
            <ul class="event_click">
                <li>
                    背景图
                    <img class="bg" src="">
                    <a class="event_href">
                        <img src="/assets/img/index/event_href.png">
                    </a>
                </li>
                <li>
                    背景图
                    <img class="bg" src="">
                    <a class="event_href">
                        <img src="/assets/img/index/event_href.png">
                    </a>
                </li>
            </ul>
            <a class="show_more">
                <img src="/assets/img/common/more.png">
            </a>
            <div class="event_information">
                <span class="title">赛事动态</span>
                <div class="title-content clearfix">
                    <div class="title">
                        <span class="sp1">赛事动态</span>
                        <span class="sp2">Dynamic Events</span>
                        <a class="sp3">MORE></a>
                    </div>
                    <ul>
                        @if($newsList)
                            @foreach($newsList as $key => $result)
                            <li>
                                <a href="{{ $result->url or '' }}">{{ $result->title or '' }}</a>
                                <b></b>
                                <i>{{ $result->creat_at or '' }}</i>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <script>
        $(function(){
            $('.img >li').eq(0).addClass('active');
            $('.nav-img >li').eq(0).addClass('active');
            $('.nav-img >li').each(function(index,el) {
                $(this).click(function(){
                    $('.nav-img >li').removeClass('active');
                    $(this).addClass('active');

                    $('.img >li').removeClass('active');
                    $('.img li').eq(index).addClass('active');
                })
            })

            $(".banner").hover(function() {
                $('.banner .img li img').css({
                    "filter": "blur(3px)"
                }, 500);
                $('.model').css({
                    "opacity": "1"
                }, 500);
            }, function() {
                 $('.banner .img li img').css({
                    "filter": "blur(0px)"
                }, 500);
                $('.model').css({
                    "opacity": "0"
                }, 500);
            });
        })
    </script>
@endsection


<!-- 第一部分 -->
<!-- <div class="t1 clearfix">
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
        @if($newsList)
            @foreach($newsList as $key => $result)
                    <li><a href="{{ $result->url or '' }}">{{ $result->title or '' }}</a><i>{{ $result->creat_at or '' }}</i></li>
            @endforeach
        @endif
        </ul>
    </div>
</div> -->
<!-- 第二部分
<div class="t2 clearfix">
    <div class="title-content-left title-content-item clearfix">
        <div class="title">
            <span class="sp1">资源下载</span>
            <span class="sp2">Dynamic Events</span>
        </div>
        <ul>
            @if($docsList)
                @foreach($docsList as $key => $result)
                        <li><a href="{{ $result->url or '' }}">{{ $result->name or '' }}</a></li>
                @endforeach
            @endif
            <a href="/doc" class="more-click">更多</a>
        </ul>
    </div>
    <div class="title-content-right title-content-item clearfix">
        <div class="title">
            <span class="sp1">赛事视频</span>
            <span class="sp2">Dynamic Events</span>
        </div>
        <ul>
            @if($videoList)
                @foreach($videoList as $key => $result)
                        <li><a href="{{ $result->url or '' }}">{{ $result->name or '' }}</a></li>
                @endforeach
            @endif
            <a href="/video" class="more-click">更多</a>
        </ul>
    </div>
</div> -->

<!-- <div class="parter">
    <div class="title">
        <h4>合作资源</h4>
        <p>Cooperative resources</p>
    </div>
    <div class="picScroll-left lunbo">
        <div class="bd">
            <div class="tempWrap" style="overflow:hidden; position:relative; width:1152px"><div class="tempWrap" style="overflow:hidden; position:relative; width:1152px"><ul style="width: 1728px; left: -288px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                <li style="float: left; width: 270px;"><a href="" target="_blank"><img src="assets/img/index/2_dianzixuehui.jpg" alt=""></a></li>
                <li style="float: left; width: 270px;"><a href="" target="_blank"><img src="assets/img/index/3_robocom.jpg" alt=""></a></li>
                <li style="float: left; width: 270px;"><a href="" target="_blank"><img src="assets/img/index/4_souhuoicon.png" alt=""></a></li>
                <li style="float: left; width: 270px;"><a href="" target="_blank"><img src="assets/img/index/2_dianzixuehui.jpg" alt=""></a></li>
                <li style="float: left; width: 270px;"><a href="" target="_blank"><img src="assets/img/index/3_robocom.jpg" alt=""></a></li>
                <li style="float: left; width: 270px;"><a href="" target="_blank"><img src="assets/img/index/4_souhuoicon.png" alt=""></a></li>
            </ul></div></div>
        </div>
        <a href="javascript:void(0)" class="prev"></a>
        <a href="javascript:void(0)" class="next"></a>
    </div>
</div> -->
