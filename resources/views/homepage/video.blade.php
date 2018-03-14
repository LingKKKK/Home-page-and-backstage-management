@extends('homepage.layout')

@section('content')
    <style type="text/css">
        .res
        {
            color: Red;
        }
    </style>
    <link rel="stylesheet" href="/assets/css/video.css">

    <div class="warp" style="min-height: 671px;">
        <div class="img_model">
            <img src="">
        </div>
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
        <div class="info clearfix">
            <div class="left">
                <div class="cut"></div>
                <span class="title">关于竞赛</span>
                <ul class="info-nav clearfix">
                    <li class="active">精彩图片</li>
                    <li>精彩视频</li>
                    <li>公示公告</li>
                </ul>
            </div>
            <div class="right clearfix">
                <div class="search">
                    <input id="search_content" type="text" placeholder="搜索信息...">
                    <input class="btn-search" value="" type="button" />
                </div>
                <div class="box active">
                    <div class="box_title">
                        <span>精彩图片</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <ul class="all clearfix">
                            @if($pics)
                            @foreach($pics as $key => $item)
                            <li>
                                <img src="{{$item->url}}">
                                <div class="img_tips">
                                    <span class="name">{{$item->classify}}</span>
                                    <span class="times">{{$item->creat_at}}</span>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>精彩视频</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <div class="all clearfix">
                            @if($videos)
                            @foreach($videos as $key => $item)
                            <div class="video_box">
                                <video src="{{$item->url}}" controls="controls">您的浏览器不支持 video 标签</video>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box spe_box">
                    <div class="box_title">
                        <span>公示公告</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <div class="all clearfix">
                            <h2>标题</h2>
                            <span class="content_span">
                                1竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方2式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                            </span>
                            <span class="content_span">
                                竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛3方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                            </span>
                            <span class="content_span">
                                竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛3方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                            </span>
                            <span class="content_span">
                                竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛3方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                            </span>
                            <span class="content_span">
                                竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛3方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                            </span>
                            <span class="content_span">
                                竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛3方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                            </span>
                        </div>
                        <div class="spe"></div>
                    </div>
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

            $('.nav li').each(function(index, el) {
                $(this).removeClass('active');
                $('.nav li').eq(4).addClass('active');
            });

            $('.info-nav >li').each(function(index,el) {
                $(this).click(function(){
                    $('.info-nav >li').removeClass('active');
                    $(this).addClass('active');

                    $('.right .box').removeClass('active');
                    $('.right .box').eq(index).addClass('active');
                })
            })

            $(".banner").hover(function() {
                $('.model').animate({
                    "opacity": "1"
                }, 500);
            }, function() {
                $('.model').animate({
                    "opacity": "0"
                }, 500);
            });

            $('.btn-search').click(function() {
                $('#search_content').val()
                $(".active .content .content_span").each(function() {
                    var t = $(this).text();
                    var array = $('#search_content').val()
                    if (t.indexOf(array) > -1) {
                        var a = new RegExp(array, "g")
                        t = t.replace(a, ("<i style='color:#F00'>" + array + "</i>"));
                        // console.log(t)
                        $(this).find('a').html(t);
                    }
                });
            })

            $('.box .content ul li img').each(function(){
                $(this).click(function(){
                    $('.img_model img').attr('src', $(this).attr('src'))
                    $('.img_model').show();
                })
            })

            $('.img_model').click(function(){
                $(this).hide()
            })
        })
    </script>
@endsection
