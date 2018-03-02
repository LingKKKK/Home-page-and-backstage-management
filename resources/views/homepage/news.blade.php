@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="/assets/css/news.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
                <li class="active">
                    <img src="/assets/img/index/banner_1.jpg">
                </li>
                <li>
                    <img src="/assets/img/index/banner_2.jpg">
                </li>
            </ul>
            <ul class="nav-img">
                <li class="active"></li>
                <li></li>
            </ul>
        </div>
        <div class="cut" style=""></div>
        <div class="inner clearfix">
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
                    <p class="content" id="content">{!! $result->content or '' !!}</p>
                @endforeach
            @endif
            <span class="error">未加载出数据, 请重新查找</span>
        </div>

    </div>
    <script type="text/javascript">
        $(function(){
            // console.log($('#text').text());
            // $('#content').html(encodeHtml($('#text').html()));
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
                    console.log(1)
                } else {
                    $('.error').css('display', 'none');
                    console.log(2)
                }
            }, 1000)
        })
    </script>
@endsection
