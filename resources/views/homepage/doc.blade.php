@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/doc.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <ul class="img">
             @if($results)
                    @foreach($results as $key => $result)
                        @if($result->classify == 'doc')
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
        <div class="info">
            <div class="title">
                <h4>备战资源</h4>
                <div>
                    <ul class="table">
                        <li class="on">装备手册</li>
                        <li class="">教学视频</li>
                        <li class="">技术文件</li>
                        <li class="">线下培训</li>
                    </ul>
                </div>
            </div>
            <ul class="doc-list clear">
                <li class="list active">
                    <ul>
                        @foreach($docsList as $item)
                        <!-- <li><a href="{{ $item->url or '' }}">{{ $item->name or '' }}</a></li> -->
                        @if($item->classify == '装备手册')
                            <li>
                                <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                                <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                    <p class="listTitle">{{ $item->name or '' }}</p>
                                </div>
                                <div class="download">
                                    <a target="_blank" href="{{ $item->url or '' }}">
                                        <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                    </a>
                                    <p>点击查看详情</p>
                                </div>
                            </li>
                        @endif
                        @endforeach
                    </ul>
                </li>
                <li class="list">
                    <ul>
                    @foreach($docsList as $item)
                    <!-- <li><a href="{{ $item->url or '' }}">{{ $item->name or '' }}</a></li> -->
                    @if($item->classify == '教学视频')
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">{{ $item->name or '' }}</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="{{ $item->url or '' }}">
                                    <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    @endif
                    @endforeach
                    </ul>
                </li>
                <li class="list">
                    <ul>
                    @foreach($docsList as $item)
                    <!-- <li><a href="{{ $item->url or '' }}">{{ $item->name or '' }}</a></li> -->
                    @if($item->classify == '技术文件')
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">{{ $item->name or '' }}</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="{{ $item->url or '' }}">
                                    <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    @endif
                    @endforeach
                    </ul>
                </li>
                <li class="list">
                    <ul>
                    @foreach($docsList as $item)
                    <!-- <li><a href="{{ $item->url or '' }}">{{ $item->name or '' }}</a></li> -->
                    @if($item->classify == '线下培训')
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">{{ $item->name or '' }}</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="{{ $item->url or '' }}">
                                    <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    @endif
                    @endforeach
                    </ul>
                </li>
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
