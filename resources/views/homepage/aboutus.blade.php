@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/aboutus.css">

    <div class="warp" style="">
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
        <!-- <div class="info">
            <div class="logo-c">
                <span>品牌图</span>
            </div>
        </div> -->
        <div class="cut"></div>
        <div class="type clearfix">
            <div class="left">
                <ul class="info-nav clearfix">
                    <li class="active">品牌介绍</li>
                    <li>联系我们</li>
                </ul>
            </div>
            <div class="right clearfix">
                <div class="box trends active">
                    品牌介绍
                </div>
                <div class="box intro">
                    联系我们
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

            $('.info-nav >li').each(function(index,el) {
                $(this).click(function(){
                    $('.info-nav >li').removeClass('active');
                    $(this).addClass('active');

                    $('.right .box').removeClass('active');
                    $('.right .box').eq(index).addClass('active');

                    // if (index == 0) {
                    //     window.location.hash == "#trends";
                    // } else if (index == 1) {
                    //     window.location.hash == "#intro";
                    // } else if (index == 2) {
                    //     window.location.hash == "#about";
                    // }
                })
            })
        })
    </script>
@endsection
