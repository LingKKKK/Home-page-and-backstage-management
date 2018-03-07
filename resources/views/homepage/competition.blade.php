@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="/assets/css/match.css">

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
            @if($competitionList)
            @foreach($competitionList as $key => $item)
            <div class="item">
                <a class="clearfix" id="{{$item->id}}" href="/toIntro/{{ $item->id }}">
                    <img src="{{$item->competition_bg}}">
                    <span> {{$item->competition_name}}</span>
                </a>
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
