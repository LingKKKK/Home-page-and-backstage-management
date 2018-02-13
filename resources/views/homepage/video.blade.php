@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/video.css">

    <div class="warp clearfix">
        <div class="banner">
            <img src="assets/img/index/banner_2.jpg">
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
