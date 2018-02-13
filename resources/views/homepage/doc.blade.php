@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/doc.css">

    <div class="warp" style="min-height: 671px;">
        <div class="banner">
            <img src="assets/img/index/banner_1.jpg">
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
                        <li>
                            <img src="assets/img/index/robocomhandbook.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/index/robocomhandbook.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <ul>
                        <li>
                            <img src="assets/img/index/robocomhandbook.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <ul>
                        <li>
                            <img src="assets/img/index/docicon.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <ul>
                        <li>
                            <img src="assets/img/index/robocomhandbook.png" style="width: 90px;height: 90px;margin-top: 5px;margin-left: 5px;">
                            <div class="details" style="flex-grow: 1;flex-shrink: 1;flex-basis: 0%;">
                                <p class="listTitle">RoboCom品牌手册</p>
                            </div>
                            <div class="download">
                                <a target="_blank" href="#">
                                <img alt="" src="assets/img/index/download.png" style="margin-top: 5px;">
                                </a>
                                <p>点击查看详情</p>
                            </div>
                        </li>
                    </ul>
                </li>
            </div>
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
