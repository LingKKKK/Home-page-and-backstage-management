@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/video.css">

    <div class="warp clearfix">
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
        <div class="video-box">
            <div class="obox">
                <img class="img1" src="assets/img/index/banner_1.jpg" style="width: 200px;height: 120px;display: block;">
                <span class="sp1">机器人精彩看点:现场直播视频</span>
            </div>
            <div class="obox">
                <img class="img1" src="assets/img/index/banner_1.jpg" style="width: 200px;height: 120px;display: block;">
                <span class="sp1">机器人精彩看点:现场直播视频</span>
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
            $('.table >li').each(function(index,el) {
                $(this).click(function(){
                    $('.table >li').removeClass('on');
                    $(this).addClass('on');

                    $('.doc-list >li').removeClass('active');
                    $('.doc-list >li').eq(index).addClass('active');
                })
            })
        })
    </script>
@endsection
