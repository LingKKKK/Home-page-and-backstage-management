@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="/assets/css/intro.css">

    <div class="warp" style="min-height: 671px;">
        <div class="img_model">
            <img src="">
        </div>
        <div class="banner">
            <ul class="img">
                @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == 'index')
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
            <div class="model">
                <span class="sp1">青少年人工智能编程挑战赛</span>
                <span class="sp2">精彩回顾</span>
                <a class="sp3">了解详情</a>
            </div>
        </div>
        <div class="inner clearfix">
            @if($pic)
            <div class="nav_pic clearfix">
                <div class="box_pix">
                @foreach($pic as $key => $item)
                    <div class="box_item"><img src="{{$item->url}}"></div>
                @endforeach
                </div>
            </div>
            <a class="pre"> < </a>
            <a class="next"> > </a>
            @endif

            @if($introList)
            @foreach($introList as $key => $result)
            <div class="content_box" style="margin: 50px 0px; padding: 50px 50px; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                <p class="content" id="content">{!! $result->intro_content or '' !!}</p>
            </div>
            @endforeach
            @endif
            <div class="href">
                <a class="docs" href="{{ $result->intro_doc or '' }}" target="_blank"></a>
                <a class="video" href="{{ $result->intro_video or '' }}" target="_blank"></a>
                <a class="enroll" href="{{ $result->intro_href or '' }}" target="_blank"></a>
            </div>
            <span class="error">未加载出数据, 请重新查找</span>
        </div>

    </div>
    <script type="text/javascript">
        var length = $('.box_pix .box_item').length;
        var width = 393*length
        $('.box_pix').css('width', width);

        if (length < 3) {
            $('.nav_pic').css('width', width)
        }

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
                if ($('.error').siblings('.href').length == 0) {
                    $('.error').css('display', 'block');
                } else {
                    $('.error').css('display', 'none');
                }
            }, 1000)

            var index = 1;
            $('.pre').click(function(){
                $('.box_pix').append($('.box_pix .box_item').eq(0))
            })

            $('.next').click(function(){
                $('.box_pix').prepend($('.box_pix .box_item:last'));
            })

            $('.box_item img').each(function(){
                $(this).click(function(){
                    $('.img_model img').attr('src', $(this).attr('src'))
                    $('.img_model').show();
                })
            })

            $('.img_model').click(function(){
                $(this).hide()
            })
        })
    </script>
@endsection
