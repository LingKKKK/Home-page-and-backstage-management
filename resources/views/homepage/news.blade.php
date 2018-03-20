@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="/assets/css/news.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($pics)
                    @foreach($pics as $key => $result)
                        @if($result->classify == '新闻页面')
                            <li>
                                <img src="{{ $result->url or '' }}">
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
            <ul class="nav-img">
                @if($pics)
                    @foreach($pics as $key => $result)
                        @if($result->classify == '新闻页面')
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
        <div class="inner clearfix" style="line-height: 25px !important; font-family: robocom !important;">
            @if($results)
                @foreach($results as $key => $result)
                    <span class="id" style="display: none;">{{ $result->id or '' }}</span>
                    <h1>{{ $result->title or '' }}</h1>
                    <span class="label">{{ $result->lebel or '' }}</span>
                    <span class="creat_at">发布时间: <i class="fa fa-dot-circle-o"></i>{{ $result->creat_at or '' }}</span>
                    <span class="rule">发布者: {{ $result->rule or '' }}</span>
                    <span class="times">浏览次数: {{ $result->times or '' }}</span>
                    <div style="clear: both; margin-bottom: 30px;"></div>
                    <!-- <p id="text" style="display: none;">{{ $result->content or '' }}</p> -->
                    <p class="content" id="content" style="line-height: 25px !important; font-family: robocom !important;">{!! $result->content or '' !!}</p>
                @endforeach
            @endif
            <span class="error">未加载出数据, 请重新查找</span>
        </div>

    </div>
    <script type="text/javascript">
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

            function encodeHtml(str) {
                var encodedStr = "";
                if (str == "") return encodedStr;
                else {
                    for (var i = 0; i < str.length; i++) {
                        encodedStr += "&#" + str.substring(i, i + 1).charCodeAt().toString(10) + ";";
                    }
                }
                return encodedStr;
            }

            setTimeout(function(){
                console.log($('.id').length);
                if ($('.id').length == 0) {
                    $('.error').css('display', 'block');
                } else {
                    $('.error').css('display', 'none');
                }
            }, 1000)
        })
    </script>
@endsection
