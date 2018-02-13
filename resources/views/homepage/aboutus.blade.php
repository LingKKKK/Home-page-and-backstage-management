@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/aboutus.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <img src="assets/img/index/banner_1.jpg">
        </div>
        <div class="info">
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
