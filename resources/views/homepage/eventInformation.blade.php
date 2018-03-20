@extends('homepage.layout')

@section('content')
    <style type="text/css">
        .res
        {
            color: Red;
        }
    </style>
    <link rel="stylesheet" href="assets/css/eventInformation.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == '关于竞赛')
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
                        @if($result->classify == '关于竞赛')
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
                    <li class="active">竞赛方式</li>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                    <div class="cut"></div>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                    <li>竞赛方式</li>
                </ul>
                <div class="cut" style="height: 15px;"></div>
                <p class="sp1">awdwadawdawdwadwadwadwadwadwadwadwadwadwadawdawdawdwadwdwadwadwadwadwwa</p>
                <p class="sp1">awdwadawdawdwadwadwadwadwadwadwadwadwadwadawdawdawdwadwdwadwadwadwaddwa</p>
            </div>
            <div class="right clearfix">
                <div class="search">
                    <input id="search_content" type="text" placeholder="搜索信息...">
                    <input class="btn-search" value="" type="button" />
                </div>
                <div class="box active">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方2式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                        </span>
                        <span class="content_span">
                            竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛3方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式竞赛方式
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
                    </div>
                </div>
                <div class="box">
                    <div class="box_title">
                        <span>竞赛方式</span>
                        <div class="cut"></div>
                    </div>
                    <div class="content clearfix">
                        <h2>标题</h2>
                        <span class="content_span">
                            1
                        </span>
                        <span class="content_span">
                            1
                        </span>
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
                $('.nav li').eq(1).addClass('active');
            });

            $('.info-nav >li').each(function(index,el) {
                $(this).click(function(){
                    $('.info-nav >li').removeClass('active');
                    $(this).addClass('active');

                    $('.right .box').removeClass('active');
                    $('.right .box').eq(index).addClass('active');

                    if (index == 0) {
                        window.location.hash == "#trends";
                    } else if (index == 1) {
                        window.location.hash == "#intro";
                    } else if (index == 2) {
                        window.location.hash == "#about";
                    }
                })
            })

            $(".banner").hover(function() {
                // $('.banner .img li img').css({
                //     "filter": "blur(3px)"
                // }, 500);
                $('.model').animate({
                    "opacity": "1"
                }, 500);
            }, function() {
                // $('.banner .img li img').css({
                //     "filter": "blur(0px)"
                // }, 500);
                $('.model').animate({
                    "opacity": "0"
                }, 500);
            });

            $('.btn-search').click(function() {
                $('#search_content').val()
                $(".active .content .content_span").each(function() {
                    //取得标签的文本
                    var t = $(this).text();
                    //取得需要查出的关键字，我们这里假定是多关键字以","间隔
                    var array = $('#search_content').val()
                    //判断标签是否包含关键字
                    if (t.indexOf(array) > -1) {
                        //定义正则表达式对象  array是关键字   "g"是指全局范围
                        var a = new RegExp(array, "g")
                        //对标签文本进行全局替换，包含关键字的位置替换为加红字span对象
                        t = t.replace(a, ("<i style='color:#F00'>" + array + "</i>"));
                        console.log(t)
                        //将替换完的文本对象赋给此对象中A标签对象的html值中
                        $(this).find('a').html(t);
                    }
                });
            })

        })
    </script>
@endsection
