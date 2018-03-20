@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/match.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == '参赛报名')
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
                        @if($result->classify == '参赛报名')
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
            @if($eventList)
            @foreach($eventList as $key => $item)
            <div class="item">
                <div class="item_model">
                    <a id="{{$item->id}}" href="/toCompetition/{{ $item->id }}" class="toCompetition">点击查看赛项内容</a>
                </div>
                <a class="all clearfix">
                    <img class="bg" src="{{$item->event_bg}}">
                    <div class="intro">
                        <span> {{$item->event_name}}</span>
                        <p> {{$item->event_time}}</p>
                    </div>
                </a>
                <div class="href">
                    <a href="{{$item->event_href}}"><img src="/assets/img/enroll.png"></a>
                    <a><img src="/assets/img/event_tips.png"></a>
                    <a><img src="/assets/img/add_tips.png"></a>
                </div>
            </div>
            @endforeach
            @endif
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
                $('.nav li').eq(3).addClass('active');
            });

            if (window.location.hash == '#signup') {
                $('.info-nav li').eq(0).click();
            }else if (window.location.hash == '#notice') {
                $('.info-nav li').eq(1).click();
            }

            $(".banner").hover(function() {
                $('.model').animate({
                    "opacity": "1"
                }, 500);
            }, function() {
                $('.model').animate({
                    "opacity": "0"
                }, 500);
            });

            $(".info .item").each(function(index, el) {
                $(this).hover(function() {
                    $(this).find('.item_model').animate({
                        "opacity": "1"
                    }, 500);
                }, function() {
                    $(this).find('.item_model').animate({
                        "opacity": "0"
                    }, 500);
                });
            });

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

            // $('.item a').each(function(){
            //     $(this).unbind('click').bind('click', function(){
            //         var id = $(this).attr('id')
            //         console.log(id)
            //         $.get("/toCompetition/" + id, function() {

            //         })
            //     })
            // })
        })
    </script>
@endsection
