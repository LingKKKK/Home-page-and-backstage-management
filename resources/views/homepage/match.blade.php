@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="/assets/css/competition.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == '比赛项目')
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
                        @if($result->classify == '比赛项目')
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
            @if($competitionList)
            @foreach($competitionList as $key => $item)
            <div class="item">
                <div class="item_intro">
                    <span> {{$item->competition_name}}</span>
                    <a id="{{$item->id}}" href="/toIntro/{{ $item->id }}">了解详情  >></a>
                </div>
                <img src="{{$item->competition_bg}}">
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
                $('.nav li').eq(2).addClass('active');
            });

            $(".banner").hover(function() {
                $('.model').animate({
                    "opacity": "1"
                }, 500);
            }, function() {
                $('.model').animate({
                    "opacity": "0"
                }, 500);
            });

            // $('.info-nav >li').each(function(index,el) {
            //     $(this).click(function(){
            //         $('.info-nav >li').removeClass('active');
            //         $(this).addClass('active');

            //         $('.right .box').removeClass('active');
            //         $('.right .box').eq(index).addClass('active');

            //         if (index == 0) {
            //             window.location.hash == "#signup";
            //         } else if (index == 1) {
            //             window.location.hash == "#notice";
            //         }
            //     })
            // })
        })
    </script>
@endsection
