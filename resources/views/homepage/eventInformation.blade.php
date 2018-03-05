@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/eventInformation.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == 'eventInformation')
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
        </div>
        <div class="info clearfix">
            <div class="left">
                <span class="title">赛事信息</span>
                <ul class="info-nav clearfix">
                    <li class="active">赛事动态</li>
                    <li>赛事介绍</li>
                    <li>赛事相关</li>
                </ul>
            </div>
            <div class="right clearfix">
                <div class="box trends active">
                    <ul>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事动态</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事动态</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事动态</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事动态</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                    </ul>
                </div>
                <div class="box intro">
                    <ul>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_1.jpg">
                            <span class="sp1">RoBoCom赛事介绍</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_1.jpg">
                            <span class="sp1">RoBoCom赛事介绍</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_1.jpg">
                            <span class="sp1">RoBoCom赛事介绍</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_1.jpg">
                            <span class="sp1">RoBoCom赛事介绍</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                    </ul>
                </div>
                <div class="box about">
                    <ul>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事相关</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事相关</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事相关</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
                        <li class="clearfix">
                            <img src="assets/img/index/banner_2.jpg">
                            <span class="sp1">RoBoCom赛事相关</span>
                            <span class="sp2">2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的2016世界机器人大赛RoBoCom青少年挑战赛是由中国电子学会和中国工信出版传媒集团举办的</span>
                            <a href="#">更多></a>
                        </li>
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
            // console.log(window.location.hash)

            if (window.location.hash == '#trends') {
                console.log(1);
                $('.info-nav li').eq(0).click();
            }else if (window.location.hash == '#intro') {
                console.log(1);
                $('.info-nav li').eq(1).click();
            }else if (window.location.hash == '#about') {
                console.log(1);
                $('.info-nav li').eq(2).click();
            }

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
        })
    </script>
@endsection
