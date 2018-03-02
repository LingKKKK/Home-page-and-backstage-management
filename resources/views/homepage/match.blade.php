@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/match.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == 'match')
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
                <span class="title">参赛报名</span>
                <ul class="info-nav clearfix">
                    <li class="active">参赛报名</li>
                    <li>公示公告</li>
                </ul>
            </div>
            <div class="right clearfix">
                <div class="box signup active">
                    <ul>
                        <li>
                            <img src="assets/img/index/ba.png">
                            <span class="sp1">青少年人工智能编程挑战赛</span>
                            <span class="sp2">2018-02-10</span>
                            <a class="sp3" href="http://ss.robocom.com.cn">点击查看</a>
                        </li>
                        <li>
                            <img src="assets/img/index/ba.png">
                            <span class="sp1">青少年人工智能编程挑战赛</span>
                            <span class="sp2">2018-02-10</span>
                            <a class="sp3" href="http://ss.robocom.com.cn">点击查看</a>
                        </li>
                    </ul>
                </div>
                <div class="box notice">
                    <ul>
                        <li>
                            <img src="assets/img/index/baa.png">
                            <span class="sp1">青少年人工智能编程挑战赛</span>
                            <span class="sp2">2018-02-10</span>
                            <a class="sp3" href="http://ss.robocom.com.cn">点击查看</a>
                        </li>
                        <li>
                            <img src="assets/img/index/baa.png">
                            <span class="sp1">青少年人工智能编程挑战赛</span>
                            <span class="sp2">2018-02-10</span>
                            <a class="sp3" href="http://ss.robocom.com.cn">点击查看</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            // console.log(window.location.hash)
            $('.img >li').eq(0).addClass('active');
            $('nav-img >li').eq(0).addClass('active');
            $('.nav-img >li').each(function(index,el) {
                $(this).click(function(){
                    $('.nav-img >li').removeClass('active');
                    $(this).addClass('active');

                    $('.img >li').removeClass('active');
                    $('.img li').eq(index).addClass('active');
                })
            })

            if (window.location.hash == '#signup') {
                $('.info-nav li').eq(0).click();
            }else if (window.location.hash == '#notice') {
                $('.info-nav li').eq(1).click();
            }

            $('.info-nav >li').each(function(index,el) {
                $(this).click(function(){
                    $('.info-nav >li').removeClass('active');
                    $(this).addClass('active');

                    $('.right .box').removeClass('active');
                    $('.right .box').eq(index).addClass('active');

                    if (index == 0) {
                        window.location.hash == "#signup";
                    } else if (index == 1) {
                        window.location.hash == "#notice";
                    }
                })
            })
        })
    </script>
@endsection
