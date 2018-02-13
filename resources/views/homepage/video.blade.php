@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/video.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <img src="assets/img/index/banner_2.jpg">
        </div>
        <div class="info">
        <!--     <div class="obox">
                <img class="img1" src="assets/img/index/banner_1.jpg">
                <span class="sp1">机器人精彩看点:现场直播视频</span> -->
                <!-- <img class="img2" src="assets/img/index/"> -->
        <!--     </div> -->
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
