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
            @if($introList)
            @foreach($introList as $key => $result)
                <div style="clear: both; margin-bottom: 30px;"></div>
                <p class="content" id="content">{!! $result->intro_content or '' !!}</p>
                <div class="href" style="width: 400px; height: 50px; margin-top: 50px; margin: 0 auto; box-sizing: border-box;display: flex;">
                    <a style="flex:1; text-align: center; line-height: 50px;font-size: 14px; font-weight: bold;" href="{{ $result->intro_doc or '' }}" target="_blank">相关文档</a>
                    <a style="flex:1; text-align: center; line-height: 50px;font-size: 14px; font-weight: bold;" href="{{ $result->intro_video or '' }}" target="_blank">相关视频</a>
                    <a style="flex:1; text-align: center; line-height: 50px;font-size: 14px; font-weight: bold;" href="{{ $result->intro_href or '' }}" target="_blank">点击报名</a>
                </div>
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
                console.log($('.error').siblings('.href').length);
                if ($('.error').siblings('.href').length == 0) {
                    $('.error').css('display', 'block');
                } else {
                    $('.error').css('display', 'none');
                }
            }, 1000)
        })
    </script>
@endsection
